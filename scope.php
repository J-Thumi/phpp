<?php
//variable scope refers to the context in which a variable is accessible. Variables can be declared in different scopes, and depending on the scope, they may or may not be available in other parts of the code. PHP has four types of variable scopes:

    //a variable out of a function can be accessed either by passing it as a parameter or using global key word which passes by reference meaning change to it in the function affects the original value of the variable


    //A variable declared outside of any function is considered to have global scope. Global variables are only accessible within the global context and cannot be directly accessed inside functions unless you explicitly declare them as global.

    
    $x=8;
    echo  $x;//8
    function myFunction() {
        global $x;
        $x=90;
        echo  $x;//90
    }
    myFunction();
    echo  $x;//90

    //A variable declared inside a function is considered to have local scope. It can only be accessed within that function, and it cannot be accessed from outside the function.

    //a variable declared inside a function can only be accessed within that function
    //a variable declared inside a loop can only be accessed within that loop
    //a variable declared outside a function or loop can be accessed anywhere within the script

    //A static variable retains its value between function calls. Normally, variables inside a function are destroyed after the function exits, but a static variable preserves its value and state across multiple invocations of the function.
    function myFunction2() {
        static $x = 0;
        echo  $x;
        $x++;
    }
    myFunction2(); // Output: 0
    myFunction2(); // Output: 1
    myFunction2(); // Output: 2

//there are several types of functions that you can define and use based on how they are structured or how they behave. Here are the main types of functions in PHP:

//User-Defined Functions
    //A user-defined function is created by using the function keyword followed by the function name, parentheses, and then the function body. The function can take any number of parameters and return any value.
    function functioName($param1, $param2) {
        // code to execute
        return $result;
    }
    
//Built-in Functions
    //PHP provides a wide range of built-in functions that can be used to perform various tasks. Some common built-in functions include:
    //strlen() - Returns the length of a string
    //strtolower() - Converts all uppercase letters in a string to lowercase
    //strtoupper() - Converts all lowercase letters in a string to uppercase
    //substr() - Extracts a portion of a string
    //array_push() - Adds an element to the end of an array
    //echo - Outputs one or more values to the screen
    //isset() - Checks if a variable is set and is not NULL
    //unset() - Unsets a variable
    //date() - Returns the current date and time
    //time() - Returns the current timestamp
    //rand() - Generates a random integer
    //sort() - Sorts an array in ascending order
    //rsort() - Sorts an array in descending order
    //count() - Returns the number of elements in an array
    //in_array() - Checks if a value exists in an array
    //array_merge() - Merges two or more arrays
    //array_diff() - Finds the difference between two arrays
    //array_sum() - Returns the sum of all values in an array
    //array_filter() - Filters elements of an array using a callback function
    //array_map() - Applies a callback function to every element of an array
    //file_get_contents() - Reads entire contents of a file into a string
    //file_put_contents() - Writes a string to a file
    echo strlen("Hello World");  // Output: 11


//Recursive Functions
//A recursive function is a function that calls itself. It is used for tasks that can be broken down into smaller, similar tasks, such as calculating the factorial of a number or traversing a tree structure.
function factorial($n) {
    if ($n == 0) {
        return 1;
    } else {
        return $n * factorial($n - 1);
    }
}

echo factorial(5);  // Output: 120

//Anonymous Functions (Closures)
//Anonymous functions (also known as closures) are functions without a name. They are often used as callback functions or for inline functionality.
$greet = function($name) {
    return "Hello, $name!";
};

echo $greet("John");  // Output: Hello, John!

// Closure Capturing a Variable:
$message = "Goodbye";
$farewell = function() use ($message) {//here the message is passed by value hence if it is changed in the function the original remains the same
    echo $message;
};
$farewell();  // Output: Goodbye

//Arrow Functions
    //Arrow functions are a new feature in PHP 7.4. They are anonymous functions that have a shorter syntax and support arrow syntax. Arrow functions do not have their own `this` value, instead, they inherit the `this` value from the parent scope.
    $greet = fn($name) => "Hello, $name!";
    echo $greet("John");  // Output: Hello, John!
    //you can access variables in the parent scope directly without use() they are passed by value hence cannot be modified in the function
    //are for single line expressions only

//Variadic Functions
//These functions accept a variable number of arguments using the splat operator (...). All additional arguments are gathered into an array.
    function sum(...$numbers) {
        return array_sum($numbers);
    }
    echo sum(1, 2, 3, 4, 5);  // Output: 15

//Parameterized Functions
//These are functions that accept one or more parameters to process data. The values of these parameters are passed when calling the function.
    function greet($name) {
        echo "Hello, $name!";
    }
    greet("John");  // Output: Hello, John!

//Static Functions
//Static functions are defined within a class but do not require an instance of the class to be called. They are called using the class name.
class Calculator {
    public static function add($a, $b) {
        return $a + $b;
    }
}
echo Calculator::add(2, 3);  // Output: 5


//Generator Functions
//Generator functions allow you to iterate over a set of data without needing to build an array in memory. They use the yield keyword and are useful for working with large datasets or streams of data.

function getNumbers() {
    for ($i = 1; $i <= 3; $i++) {
        yield $i;
    }
}
foreach (getNumbers() as $number) {
    echo $number;  // Output: 1 2 3
}


//Pure Functions
//A pure function is a function where the output depends solely on its inputs and has no side effects (e.g., modifying global variables, I/O operations). While this is more of a concept than a special type in PHP, it's good to aim for pure functions for maintainable code.
function multiply($a, $b) {
    return $a * $b;
}


//Abstract Functions
//Abstract functions are defined in abstract classes and do not contain a body. They are meant to be overridden in child classes.
abstract class Animal {
    abstract public function sound();
}

class Dog extends Animal {
    public function sound() {
        return "Bark!";
    }
}
$dog = new Dog();
echo $dog->sound();  // Output: Bark!

//CALLBACK FUNCTIONS

//callback function in PHP is a function that is passed as an argument to another function and is called (or executed) within that function. Callback functions can be named, anonymous, or static methods from a class.

//Using Named Functions as Callbacks
function sayHello($name) {
    return "Hello, $name!";
}

function grit($callback, $name) {
    echo $callback($name);
}
// Passing the function name as a callback
grit('sayHello', 'John');  // Output: Hello, John!


//Using Anonymous Functions as Callbacks

function grt($callback, $name) {
    echo $callback($name);
}

grt(function($name) {
    return "Hi, $name!";
}, 'Alice');  // Output: Hi, Alice!


//Using Callback in array_map()
function double($num) {
    return $num * 2;
}
$numbers = [1, 2, 3, 4, 5];
$doubledNumbers = array_map('double', $numbers);
print_r($doubledNumbers);  // Output: Array ( [0] => 2 [1] => 4 [2] => 6 [3] => 8 [4] => 10 )


//To specify that a function parameter must be a callable, you can use the callable type hint. This can be any valid callable, including named functions, anonymous functions (closures), and class methods.
function executeCallback(callable $callback, $name) {
    return $callback($name);
}

function sayello($name) {
    return "Hello, $name!";
}

// Using a named function
echo executeCallback('sayHello', 'Alice');  // Output: Hello, Alice!

// Using an anonymous function
echo executeCallback(function($name) {
    return "Hi, $name!";
}, 'Bob');  // Output: Hi, Bob!

?>