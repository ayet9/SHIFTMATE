# SHIFTMATE: Employee Shift Scheduling System

CHAPTER 1 – INTRODUCTION

1.1 Background of the Project
  Employee scheduling is an important part of workforce management because it helps businesses organize work assignments, allocate working hours, and ensure that employees are available when needed. According to Ernst et al. [1], staff scheduling is an important area of workforce planning, particularly for organizations that need to balance operational requirements with employee availability and scheduling needs.
	Managing schedules manually through paper records, spreadsheets, or group messages may make it difficult to communicate schedule changes and organize employee requests. Existing employee scheduling platforms, such as Homebase, provide tools for creating schedules, managing shifts, and notifying employees about schedule updates [2]. These features demonstrate how digital scheduling systems can support communication and coordination between managers and employees.
	To address these concerns, SHIFTMATE: Employee Shift Scheduling System is proposed as a web-based application designed to help businesses manage employee schedules and schedule-related requests. The system allows managers or administrators to create and update schedules, assign shifts, and review employee requests. Employees can view their assigned schedules and rest days, submit rest-day change requests, and file emergency absence requests. The system also provides email and web push notifications to inform employees about important schedule updates.
	Through these functions, SHIFTMATE aims to provide an organized and accessible platform for managing employee schedules and communicating schedule-related information. The system is intended to help reduce confusion caused by scattered schedule information and provide a more convenient way for managers and employees to handle scheduling activities.
 
    
1.2 Statement of the Problem
  Businesses that rely on manual methods such as paper, chat messages, or spreadsheets for employee scheduling may experience difficulty in maintaining organized schedules and communicating schedule changes to employees.
  
1.3 Objectives of the Project
  The general objective of the project is to develop SHIFTMATE: Employee Shift Scheduling System that helps businesses manage employee schedules and schedule-related requests in a more organized way.
  
1.4 Scope and Limitations
  SHIFTMATE focuses on employee schedule management and schedule-related requests. 
  The system does not automatically create employee schedules. Schedule creation and assignment remain under the responsibility of the manager. The system also does not include payroll processing, attendance monitoring, or time-in/time-out functionality. The manager has the final decision regarding schedule changes. proposed-systems. The system also requires an internet connection to access its functions.

1.5 Target Users / Beneficiaries
  1.	Managers/Administrators
  2.	Employees 

1.6 Related Systems
  Sling is an employee scheduling system that allows managers to create and publish employee schedules. 
  Homebase is an employee scheduling platform designed to help businesses manage employee schedules and related workforce activities. 
  7shifts is an employee scheduling system that allows managers to create and publish schedules for employees.

1.7	Definition of Terms
  1.	SDG – Sustainable Development Goals, a collection of 17 global goals established by the United Nations to promote sustainable development and address global challenges.


CHAPTER 2 – METHODOLOGY

2.1 Development Methodology
  The project used the Agile Development Methodology in developing SHIFTMATE. Agile was selected because it allows the development team to work through an iterative process where the system can be developed, reviewed, tested, and improved throughout the project.
  During the planning phase, the team identified the main purpose of SHIFTMATE and determined the requirements needed for employee scheduling and schedule-related requests.
  During the requirements phase, the team used observation to understand how employee schedules and schedule-related concerns are handled. The information gathered through observation was used as a basis for identifying the system requirements.
  During the design phase, the team planned the system structure, database, user interface, and system processes based on the identified requirements.
  During the development phase, the team implemented the system using HTML, CSS, JavaScript, and Angular for the front end, Laravel for the back end, and MySQL for the database.
  During the testing and improvement phase, the developed functions were tested to identify errors and issues. Necessary changes and improvements were then applied to the system based on the results of testing.

2.2 REQUIREMENT GATHERING
  The project used observation as the primary method for gathering system requirements. The team observed the process of managing employee schedules and the possible problems that may occur when schedules are changed or when employees need to submit schedule-related requests.
  Through observation, the team identified the need for a system that can organize employee schedules, assign shifts, allow employees to view their schedules, and provide a more organized way of handling rest-day changes and emergency absences.
The observations also served as a basis for determining the information and processes that should be included in SHIFTMATE.

2.3 Functional Requirements
MODULE                                         	FUNCTIONAL REQUIREMENTS
1.	User Management	The system shall allow authorized users to access the system according to their assigned role.
2.	Schedule Management	The system shall allow the manager or administrator to create, update, and manage employee schedules.
3.	Shift Assignment	The system shall allow the manager or administrator to assign shifts to employees.
4.	Schedule Viewing	The system shall allow employees to view their assigned schedules and rest days.
5.	Rest-Day Change Request	The system shall allow employees to submit requests to change their assigned rest days
6.	Emergency Absence Request	The system shall allow employees to submit requests for unexpected absences.
7.	Request Management	The system shall allow the manager or administrator to review and manage employee requests.
8.	Email Notification 	The system shall send email notifications to employees when important schedule updates are made.
9.	Web Push Notification	The system shall provide web push notifications to inform employees about important schedule updates.
10.	Updated Schedule	The system shall display the latest approved schedule to the affected employee after a schedule change.

2.4 Non-Functional Requirements
  The non-functional requirements of SHIFTMATE define the quality and operational characteristics that the system must maintain. In terms of security, the system shall restrict access to authorized users and provide appropriate  access based on their assigned roles. For usability, the system shall provide a simple and understandable interface that allows users to easily view schedules and submit or manage requests. In terms of performance, the system shall respond to user actions and display schedule and request information within a reasonable amount of time. For reliability, the system shall consistently provide accurate and updated schedule and request information to minimize errors and confusion. The system shall also be responsive and adapt properly to different screen sizes and devices. For compatibility, SHIFTMATE shall be accessible using commonly supported modern web browsers. Lastly, the system shall maintain backups of important system data to help prevent permanent data loss.

2.5 System Architecture
  SHIFTMATE follows a web-based client-server architecture composed of the browser, application server, and database. The browser serves as the interface where users access the system, view schedules, submit requests, and receive notifications. The application server processes user requests, manages the system's business logic, and handles communication between the browser and database. The database stores and manages important system information such as user accounts, employee schedules, shift assignments, and requests. When a user performs an action, the browser sends the request to the application server, which processes the request and communicates with the database when data needs to be retrieved or updated. The processed information is then returned to the browser and displayed to the user.

2.9 Development Tools and Technologies
Tools/Technologies	Description
HTML (HyperText Markup Language)	Used to structure the content and elements of the web pages.
CSS (Cascading Style Sheets)	Used to design and style the system's user interface.
JavaScript	Used to implement client-side interactions and dynamic behavior.
PHP	Used as the server-side programming language to process requests and handle application logic through Laravel.
Laravel	Used as the back-end framework to handle application logic and process user requests.
MySQL	Used to store, organize, and manage system data, including employee schedules and requests.
Visual Studio Code (VS Code)	Used as the code editor for writing and managing the application's source code.


