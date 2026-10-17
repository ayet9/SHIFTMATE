<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Http\Requests\RegisterRequest;
use App\Http\Requests\SiginRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\ValidationException;

class AuthController extends Controller
{
    /**
     * Handle a request for registration based on users table migration.
     */
    public function register(RegisterRequest $request)
    {
        if ($request->has('name')) {
            $nameParts = explode(' ', $request->name, 2);
            $firstName = $nameParts[0];
            $lastName = $nameParts[1] ?? '';
        } else {
            $firstName = $request->first_name;
            $lastName = $request->last_name;
        }

        $portal = $request->input('portal', 'employee');
        if (!in_array($portal, ['employee', 'admin'], true)) {
            return response()->json(['message' => 'Choose a valid portal.'], 422);
        }

        // Admin creation is protected by a private server-side code.
        if ($portal === 'admin') {
            $expectedCode = (string) env('SHIFT_MATE_ADMIN_REGISTRATION_CODE', '');
            $providedCode = (string) $request->input('admin_code', '');
            if ($expectedCode === '' || !hash_equals($expectedCode, $providedCode)) {
                return response()->json(['message' => 'The administrator registration code is invalid.'], 422);
            }
        }

        $user = User::create([
            'first_name' => $firstName,
            'last_name'  => $lastName,
            'email'      => $request->email,
            'password'   => Hash::make($request->password),
            'role'       => $portal === 'admin' ? 'admin' : 'employee',
            'status'     => 'active',
        ]);

        $token = $user->createToken('auth_token')->plainTextToken;

        return response()->json([
            'access_token' => $token,
            'token_type' => 'Bearer',
            'user' => $user
        ], 201);
    }

    /**
     * Handle a request for authentication.
     */
    public function login(SiginRequest $request)
    {
        $user = User::where('email', $request->email)->first();

        if (!$user || !Hash::check($request->password, $user->password)) {
            throw ValidationException::withMessages([
                'email' => ['The provided credentials are incorrect.'],
            ]);
        }

        // Check if user is active based on migration status enum
        if ($user->status === 'inactive') {
            return response()->json([
                'message' => 'Your account is inactive. Please contact an administrator.'
            ], 403);
        }

        $portal = $request->input('portal', 'employee');
        $isAdmin = in_array(strtolower((string) $user->role), ['admin', 'manager'], true);
        if (($portal === 'admin' && !$isAdmin) || ($portal === 'employee' && $isAdmin)) {
            return response()->json([
                'message' => 'This account does not belong to the selected portal. Choose the correct login portal.'
            ], 403);
        }

        $token = $user->createToken('auth_token')->plainTextToken;

        return response()->json([
            'access_token' => $token,
            'token_type' => 'Bearer',
            'user' => $user
        ]);
    }

    /**
     * Log the user out (Revoke token).
     */
    public function logout(Request $request)
    {
        $request->user()->currentAccessToken()->delete();

        return response()->json([
            'message' => 'Successfully logged out'
        ]);
    }

    /**
     * Get the authenticated user.
     */
    public function me(Request $request)
    {
        return response()->json($request->user());
    }
}
