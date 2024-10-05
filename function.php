<?php
//type hint
//allows you to specify the expected data types for arguments passed to functions, as well as the return type of a function. This improves code readability, makes debugging easier, and helps prevent errors due to passing wrong data types.

// function functionName(parameters):expectedDataType {
//     // code to be executed
// }
declare(strict_types=1);
function add(int $a,int $b) : int|string{//the pipe means return type can be string or number
    return $a + $b;
}
/**
 * Strict Type Enforcement:

*When strict types are enabled, the types passed to functions must match exactly. In the example above, trying to pass a float (2.5 or 3.5) to a function that expects integers (int) will result in a TypeError.
*By Default, PHP is Loosely Typed:

*Without strict types, PHP will automatically convert types (e.g., converting a float to an integer). For instance, calling add(2.5, 3.5) without strict types enabled will work because PHP will convert 2.5 and 3.5 to 2 and 3.
 */

 function ad(int|float $a, float|int $b) : float|int {
    return $a + $b;
}

echo ad(2.5, 3.5);  // Output: 5, because PHP automatically converts the floats to integers

 function adddd(int|float $a, float|int $b=8) : float|int {//you can have a default value and it should be constant not a function or an object they should come last not before the other parameters
    return $a + $b;
}

echo adddd(2.5);  
 function a(int|float $a, string|int $b) : float|int {
    return $a + $b;
}

echo a(2.5, '3.5');  // Output: 5, because PHP automatically converts the floats to integers

function mult($a,$b) : mixed {//if several data types expected as return use mixed
    return $a + $b;
}
function sum($a,$b) : void{//if null is to be returned but you should not return it explicitly i.e return null
    echo $a + $b;
    return;
}
sum(3,4);
echo add(3,4);


//you can call a function b4 declaring it but not if the function is in an if statement
$t=div(8,4);
function div(int $a, int $b) : ?int {//the question mark means that null can also be returned
  return $a / $b;
}
echo $t;

//you can have a function in  a function but the outer function must be called before the inner function
foo();
bar();
function foo(){
    echo "foo";
    function bar(){
        echo "bar";
    }
}


//CALL BY REFRENCE
// call by reference means passing a variable to a function in such a way that the function can modify the original variable, not just a copy of it. When you pass a variable by reference, any changes made to that variable inside the function will affect the original variable outside the function.
function functionName(&$parameter) {
    // code to modify $parameter
}
function addFive(&$number) {
    $number += 5;  // Modifies the original variable
}
$num = 10;
addFive($num);    // Pass $num by reference
echo $num;        // Output: 15 (the original $num was modified)

//Call by Value (Default Behavior):

// call by value means passing a variable to a function in such a way that the function only receives a copy of the original variable. When you pass a variable by value, any changes made to that variable inside the function will not affect the original variable outside the function.

function addTwo($number) {
    $number += 2;  // Does not modify the original variable
}
$num = 10;
addTwo($num);    // Pass $num by value

/**
 * When to Use Call by Reference:
*When you want a function to modify the original variable directly.
*For performance reasons, especially when dealing with large data structures (like large arrays or objects), where copying them could be expensive.
 */
function appendValue(&$array) {
    $array[] = "New Value";  // Adds a new element to the original array
}

$arr = [1, 2, 3];
appendValue($arr);  // Passes array by reference
print_r($arr);  // Output: Array ( [0] => 1 [1] => 2 [2] => 3 [3] => New Value )


//splat operator
/**splat operator (...) in PHP is used in two main ways: for passing a variable number of arguments to a function (variadic functions) and for unpacking arrays when calling a function. It simplifies handling of multiple arguments in functions or unpacking an array into function arguments. */
function functName(...$parameters) {
    // code to handle $parameters as an array
}

function su(int|float...$numbers) {
    return array_sum($numbers);//instead of foreach
}
echo su(1, 2, 3, 4);  // Output: 10


//When calling a function, the splat operator can be used to unpack an array into individual arguments.
function multiply($a, $b, $c) {
    return $a * $b * $c;
}

$numbers = [2, 3, 4];
echo multiply(...$numbers);  // Output: 24


//sum of variable numbers use foreach
function sumOfNumbers(...$numbers) {
    $sum = 0;
    foreach ($numbers as $number) {
        $sum += $number;
    }
    return $sum;
}

echo sumOfNumbers(1, 2, 3, 4,5,6,7);  

//named arguments
//initially while calling  a function that had parameters the args are passed in order 
//allow you to pass arguments to a function by specifying the name of the parameter instead of relying on the order of the arguments. This feature was introduced in PHP 8.0 and offers greater flexibility when calling functions, especially when dealing with functions that have many optional parameters.
/**Order Independence: You can pass arguments in any order.
Self-documenting: Named arguments make the code more readable since you can see the parameter names in the function call.
Optional Parameters: You can skip optional parameters without providing default values for all preceding arguments. */

//You can mix named and positional arguments, but positional arguments must come first.
function greet(string $name, string $greeting = "Hello", string $punctuation = "!") {
    echo "$greeting, $name$punctuation";
}
// Using named arguments
greet(name: "John", punctuation: ".");  // Output: Hello, John.

//Skip Optional Parameters: You can skip optional parameters by specifying only the arguments you need. it uses the default value
greet(name: "Jane");  // Output: Hello, Jane!

//Change Argument Order: You can pass arguments in any order, regardless of their position in the function signature.

greet(punctuation: "?", name: "Jane");  // Output: Hello, Jane?

//combining named and positional arguments
greet("Alice", punctuation: "!!");  // Output: Hello, Alice!!

//in division 
function division(int $x, int $y) {
    if ($x%$y==0){
        return $x/$y;
    }
    return "Error returns a fraction.";
}
echo division(y:10,x:20); 

//associative keys
$arr=['x'=>4, 'y'=>2];
echo division(...$arr);
?>