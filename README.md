PHP Crash Course Summary
This repository contains basic examples and explanations of core PHP concepts, covering fundamental syntax, data handling, control structures, and Object-Oriented Programming (OOP) principles.
Table of Contents
Variables & Data Types
Control Structures (Conditionals & Loops)
Functions (Arrays & Strings)
Superglobals & Form Handling
Security (Sanitization & Validation)
State Management (Cookies & Sessions)
File Handling & Uploads
Exception Handling
Object-Oriented Programming (OOP)
Variables & Data Types
PHP is a loosely typed language. Variables must start with $ and follow specific naming rules.
Data Types: String, Integer, Float, Boolean, Array, Object, NULL.
Arrays: Containers for multiple values, accessed via index ($fruits[0]) or key ($user['name']).
Control Structures (Conditionals & Loops)
Used for decision making and repetition.
Comparison Operators: ==, === (identical), !=, !==, >, <, etc.
If/Else/Elseif: Standard conditional logic.
Ternary Operator: Shorthand if-else (condition ? true : false;).
Loops:
while: Repeats as long as a condition is true.
for: Repeats a specific number of times.
foreach: Iterates easily over array elements.
Functions (Arrays & Strings)
Reusable blocks of code. PHP has numerous built-in functions for specific data types.
Array Functions: count(), sort(), array_push(), in_array().
String Functions: strlen(), str_replace(), strtoupper(), trim().
Superglobals & Form Handling
Built-in variables available everywhere in the script.
$_GET: Data passed via URL parameters.
$_POST: Data passed via HTML forms (hidden in the background).
$_SERVER: Information about the server environment.
$_REQUEST: Combines $_GET and $_POST data.
Security (Sanitization & Validation)
Crucial for preventing XSS and SQL injection attacks.
htmlspecialchars(): Converts special characters to HTML entities.
filter_var()/filter_input(): Use built-in PHP filters (e.g., FILTER_SANITIZE_EMAIL, FILTER_VALIDATE_INT) to clean and verify user input.
State Management (Cookies & Sessions)
Used to maintain data across multiple page requests.
Cookies: Stored on the client-side (browser). Set using setcookie(), read using $_COOKIE.
Sessions: Stored on the server-side (more secure). Must call session_start() first, then use $_SESSION.
File Handling & Uploads
Interacting with the server's file system.
Basic Handling: fopen(), fread(), fwrite(), fclose(). Shorthands: file_get_contents() and file_put_contents().
File Uploads: Use $_FILES superglobal and move_uploaded_file(). Requires enctype="multipart/form-data" in the HTML form.
Security for Uploads: Always validate file size and type/extension (.jpg, .png, etc.) before saving.
Exception Handling
A structured way to manage errors and unexpected events gracefully.
try: Contains code that might throw an exception.
throw new Exception(): Used to signal an error condition.
catch: Catches the exception and handles the error.
finally: Code block that executes regardless of whether an exception occurred or not.
Object-Oriented Programming (OOP)
A paradigm for organizing code into reusable objects.
Class: A blueprint (e.g., User).
Object: An instance of a class (e.g., $user1 = new User(...)).
Properties: Variables within a class.
Methods: Functions within a class.
__construct(): A magic method that runs when an object is created.
Inheritance: Using extends to create a new class based on an existing one (e.g., Employee extends User).



