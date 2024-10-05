<?php
// include statement is used to include and evaluate a specified file. This allows you to reuse code across different parts of your application, making it easier to manage and organize.
/**File Inclusion:

When the include statement is executed, PHP looks for the specified file, evaluates its content, and incorporates it into the script at the point where the include statement is found.
Error Handling:

If the specified file cannot be found, a warning will be issued, but the script will continue executing. This is different from require, which will cause a fatal error and stop script execution if the file is not found.
File Paths:

You can include files using either relative or absolute paths. It's often a good practice to use absolute paths to avoid issues with file location. */


//If you want to ensure that the file is included only once during the script execution (to avoid function redefinitions or variable overwrites), you can use include_once:

// main.php
include 'inc.php';  // Include the functions.php file

sayHello();  // Output: Hello, World!


include_once 'inc.php';
// Includes the file only if it hasn't been included before


//The include statement is a convenient way to modularize your PHP code, allowing you to break large scripts into smaller, reusable components. It promotes better organization and maintainability in your codebase.


/**Error Handling:

include: Issues a warning and continues executing.
require: Issues a fatal error and stops execution.
Use Cases:

Use include for optional files.
Use require for essential files that your script cannot run without. */

include_once 'inc.php';  // Will include 'file.php' only once
require_once 'inc.php';  // Will require 'file.php' only once

?>