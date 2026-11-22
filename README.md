# SHIFTMATE: Employee Shift Scheduling System

Other github Repository link
https://github.com/TevesRey/Shift_System.git 

Documentation Google Docs link
https://docs.google.com/document/d/1ySmGv3xi8Z-eJObzsNMcg2VmCs38tbsd/edit?usp=sharing&ouid=109663179994546808243&rtpof=true&sd=true

CHAPTER 1 – INTRODUCTION

1.1 Background of the Project
	Employee scheduling is an important part of managing coffee shop operations because it ensures that enough employees are available to handle daily activities and customer demands. Coffee shops typically operate with employees assigned to different shifts, such as opening, morning, afternoon, and closing shifts. According to Ernst et al. [1], staff scheduling is an important area of workforce planning, particularly for organizations that need to balance operational requirements with employee availability and scheduling needs. In relation to this, the researchers conducted an observation at a local coffee shop on October 25, 2026, which has approximately seven staff members, consisting of six employees and one manager. The six employees are assigned across three shifts, with approximately two employees per shift. The establishment currently uses a Messenger group chat to communicate employee schedules and schedule-related updates. During the observation, the researchers identified challenges involving schedule updates and employee requests, highlighting the need for a more organized way of managing work schedules and communicating changes.
	In coffee shop operations, managing employee schedules can become challenging when several employees have different working hours, availability, and rest-day preferences. Managers may experience difficulties when assigning shifts, accommodating rest-day change requests, and finding replacements when employees are unexpectedly absent. When schedules are managed through paper records, spreadsheets, or group messages, employees may miss schedule updates or become confused about their assigned working hours. Sudden changes can also make it difficult for managers to maintain enough staff during operating hours. Existing employee scheduling platforms, such as Homebase, provide tools for creating schedules, managing shifts, and notifying employees about schedule updates [3].
	To address these concerns, SHIFTMATE: Employee Shift Scheduling System is proposed as a web-based application specifically designed for coffee shops to manage employee schedules and schedule-related requests. The system allows managers or administrators to create and update schedules, assign shifts, and review employee requests. Employees, such as baristas and cashiers, can view their assigned schedules and rest days, submit rest-day change requests, and file emergency absence requests. The system also provides email and web push notifications to inform employees about important schedule updates.
	Through these functions, SHIFTMATE aims to provide coffee shops with a more organized and accessible platform for managing employee schedules and communicating schedule-related information. It is intended to reduce confusion caused by scattered schedule information, simplify the handling of employee requests, and help managers coordinate staff availability more efficiently.
    
1.2 Statement of the Problem
	Coffee shops that use paper records, spreadsheets, or group messages to manage employee schedules may experience difficulties in organizing shifts, communicating schedule changes, and handling employee requests.
Specifically, the project aims to address the following problems:
1. Difficulty in creating and updating employee work schedules.
2. Difficulty in receiving timely notifications about important schedule changes
3. Difficulty in organizing and reviewing employee rest-day change requests.
4. Difficulty in managing emergency absence requests when employees cannot report to work.
5. Difficulty in accessing updated work schedules and rest days in one centralized platform.

1.3 Objectives of the Project
	General Objective
The general objective of the project is to develop SHIFTMATE, an employee shift scheduling system that helps coffee shops organize employee schedules and schedule-related requests.
Specific Objectives
Specifically, the project aims to:
1. Develop a system that allows managers to create, update, and manage employee schedules;
2. Allow managers to assign work shifts to employees;
3. Allow employees to view their assigned schedules and rest days;
4. Allow employees to submit rest-day change requests and emergency absence requests; 
5. Allow managers to review, approve, or reject rest-day change requests and emergency absence requests; and
6. Provide email and web push notifications for important schedule updates and request status changes.

1.4 Scope and Limitations
Scope
	SHIFTMATE focuses on employee schedule management and schedule-related requests for coffee shops. It allows managers or administrators to create and manage employee schedules, set shift times, assign shifts, and review employee requests. Employees can view their assigned schedules and rest days, submit one rest-day change request per week, and file emergency absence requests.
	The system provides email and web push notifications for schedule updates and request status changes. Managers or administrators receive notifications when employees submit requests. Approved rest-day changes must be manually applied and published by the manager or administrator before the employee's schedule is updated.
Limitations
	SHIFTMATE does not automatically generate employee schedules. Managers or administrators are responsible for creating schedules, setting shift times, assigning shifts, and applying approved schedule changes. The system also excludes payroll processing, attendance monitoring, and time-in/time-out functions.
	The manager or administrator has the final decision on employee requests and schedule changes. Since SHIFTMATE is a web-based application, an active internet connection is required to access its features.

1.5 Target Users / Beneficiaries
	The primary users of SHIFTMATE are managers or administrators and employees. 
1. Managers/Administrators
	Managers or administrators are responsible for creating and managing employee schedules, assigning shifts, and reviewing schedule-related requests. SHIFTMATE can help them organize employee schedules and manage changes more efficiently.
2. Employees 
	Employees can use the system to view their assigned schedules and rest days. They can also submit rest-day change requests and emergency absence requests. Through email and web push notifications, employees can also receive updates regarding important changes to their schedules.

1.6 Related Systems
	Several existing employee scheduling systems have been developed to help businesses organize employee work schedules and improve communication between managers and employees. These systems provide scheduling, shift management, and notification functions that are related to the proposed SHIFTMATE system.
	Sling is an employee scheduling system that allows managers to create and publish employee schedules. Employees can view their assigned schedules and receive notifications when new schedules are published or when existing shifts are edited. Sling supports notifications through email and push notifications, helping employees stay updated with changes to their schedules [2]. 
	Homebase is an employee scheduling platform designed to help businesses manage employee schedules and related workforce activities. It provides scheduling functions that allow managers to organize employee shifts and communicate schedule information with employees. The system is particularly designed for businesses that need organized employee scheduling and workforce management [3].
	7shifts is an employee scheduling system that allows managers to create and publish schedules for employees. Employees can view their schedules and receive notifications through push notifications, email, or SMS. The system also supports schedule changes and shift-trading processes that require manager or administrator approval [4].
	Compared with these existing systems, SHIFTMATE focuses on the basic scheduling needs of businesses. It allows managers or administrators to create and assign employee shifts, while employees can view their assigned schedules and submit rest-day change and emergency absence requests. SHIFTMATE also includes email and web push notifications to inform employees about important schedule updates. Unlike broader workforce management systems, the proposed system maintains a focused scope centered on employee scheduling and schedule-related requests.

1.7	Definition of Terms
1. Shift Assignment – Refers to the process of assigning specific working hours or shifts to employees by the manager or administrator.
2. Rest-Day Change Request – Refers to a request submitted by an employee to ask for a change in their assigned rest day, subject to the manager’s or administrator’s review and approval.
3. Emergency Absence Request – Refers to a request submitted by an employee to report an unexpected situation that prevents them from attending their scheduled work.
4. Web Push Notification – Refers to a notification displayed through a web browser to inform users about relevant schedule updates and system activities.

CHAPTER 2 – METHODOLOGY

2.1 Development Methodology
		The project adopted the Agile Development Methodology in developing SHIFTMATE: Employee Shift Scheduling System. Agile was selected because it allows the development team to follow an iterative process in which system features are developed, reviewed, tested, and improved throughout the project.
	During the initial development cycle, beginning on October 8, 2026, the team focused on project planning and identifying the main purpose and scope of SHIFTMATE. The initial development activities and system requirements were outlined to establish the direction of the project.
	During the requirements gathering cycle, the team identified and refined the system requirements through observation. On October 25, 2026, the researchers conducted an observation at a local coffee shop with approximately seven staff members, consisting of six employees assigned across three shifts and one manager. The researchers observed that employee schedules and updates were communicated through a Messenger group chat. The information gathered helped identify scheduling concerns and determine the necessary system functionalities.
	During the system design cycle, the team planned the system structure, database, user interface, and system processes based on the identified requirements. The design served as the basis for implementing the application's features.
	During the development cycle, the team implemented the system using HTML, CSS, and JavaScript for the front end, Laravel for the back end, and MySQL for the database. The developed functionalities included user authentication, employee account management, schedule creation and updating, shift assignment, rest-day change requests, emergency absence requests, and notifications.
	During the testing and improvement cycle, the team conducted functional testing to identify errors and verify the behavior of the developed features. The programmer reviewed the system and provided feedback regarding the display of assigned shifts and rest days, the handling of employee requests, and the notification features. The team considered these suggestions during the revision process. Documentation was also updated throughout development to record project progress and system changes. Integration testing and remaining development activities were scheduled for completion before final implementation.

2.2 REQUIREMENT GATHERING
	The project observation as the primary method of gathering system requirements. The researchers conducted an observation at a local coffee shop on October 25, 2026, to understand how employee schedules and schedule-related concerns were handled.
	The establishment had approximately seven staff members, consisting of six employees assigned across three shifts, with approximately two employees per shift, and one manager. The researchers observed that employee schedules and related updates were communicated through a Messenger group chat.
	The observation helped the researchers identify the need for a more organized scheduling process, particularly in creating and updating employee schedules, assigning work shifts, communicating schedule changes, and handling rest-day change and emergency absence requests.
	The information gathered during the observation served as the basis for identifying the functional requirements and determining the features to be included in SHIFTMATE.




#"Please refer to the additional documentation via the Google Docs link at the top."
