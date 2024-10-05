<?php
//ARRAYS
//can be of diff data type
$progLanguages=['php','java','c'];
echo $progLanguages[0];
echo $progLanguages[0][0];
var_dump(isset($progLanguages[9]));

echo '<PRE>';
print_r($progLanguages);
echo '</PRE>';
echo count($progLanguages);
//push in arrary
$progLanguages[]='c++';

//by default the keys/ indexes are given from 0
//you can give your own indexes or keys
$new='go';
$progLanguages =  [
    'seco'=>'java',
    'first'=>[
        'name'=>'go',
        'year'=>2009,
        'web-framework'=>'Gin',
        'description'=>'Fast and minimalist web framework for Go',
        'features'=>['Web framework','Fast','Minimalist']
    ],
   'second'=>'java',
];

$progLanguages['third'] = $new;
$progLanguages[$new] = 5.8;


echo '<PRE>';
print_r($progLanguages);
echo '</PRE>'; 

echo array_pop($progLanguages);//removes the last string in the array
echo array_shift($progLanguages);//removes the first string in the array
//if you remove a value the rest that were following are reindexed if their indexes are integers if were strings they remain the way they were if we use pop and shift 

//if we use unsett the indexes remain

$arrayy=[6,4,2,3,9=>9,78,32];
print_r($arrayy);

array_pop($arrayy);
print_r($arrayy);
/**Purpose: array_pop() removes the last element from an array and returns the value of that element.
Effect on the array: It modifies the original array by removing the last element.
Use case: Primarily used when you need to remove and retrieve the last element from an array (stack-like behavior). */
unset($arrayy[9]);
print_r($arrayy);
/**Purpose: unset() destroys a variable or removes a specific element from an array by its index or key.
Effect on the array: It modifies the array but does not return any value. It simply removes the element.
Use case: Used when you want to remove an element at a specific index/key without needing to retrieve its value. It can also be used for variables outside arrays. */
$first=array_shift($arrayy);
print_r($arrayy);
//array_shift() removes the first element of an array and returns its value

//if you unset an array then add an element using [] the highest index was retained 

unset($arrayy[0],$arrayy[1],$arrayy[2],$arrayy[3]);
$arrayy[]=67;
print_r($arrayy);

$arrayy=[6,4,2,3,9=>9,78,32];

//array_splice() is used to remove or replace parts of an array
//array_splice(array &$array, int $offset, int $length = null, mixed $replacement = array());
/**
* $array: The input array that will be modified.
*$offset: The starting index from where to remove elements (can be negative to count from the end of the array).
*$length (optional): The number of elements to remove (default is all elements after the offset).
*$replacement (optional): An array or a set of elements to replace the removed elements (if provided).
 */

 //removing
$fruits = ["apple", "banana", "cherry", "date"];
$removed = array_splice($fruits, 1, 2);
print_r($fruits);  // Output: Array ( [0] => apple [1] => date )
print_r($removed); // Output: Array ( [0] => banana [1] => cherry )

//replacing
$fruits = ["apple", "banana", "cherry", "date"];
array_splice($fruits, 1, 2, ["kiwi", "mango"]);
print_r($fruits);  // Output: Array ( [0] => apple [1] => kiwi [2] => mango [3] => date )

//add without removing
$fruits = ["apple", "banana", "cherry", "date"];
array_splice($fruits, 1, 2, ["kiwi", "mango"]);
print_r($fruits);  // Output: Array ( [0] => apple [1] => kiwi [2] => mango [3] => date )

//negative index
$fruits = ["apple", "banana", "cherry", "date"];
$removed = array_splice($fruits, -2);
print_r($fruits);  // Output: Array ( [0] => apple [1] => banana )
print_r($removed); // Output: Array ( [0] => cherry [1] => date )

//casting
$c=(array)5;
print_r($c); 
//summ of elements in an array
$array = ['1', '2', '3', '4'];
$sum = array_sum($array);
echo $sum; // Output: 10

//array_combine() creates an array by combining elements from two arrays
//one array is for keys the other array is for values
$keys = [1, 2, 3,4];
$values = ["apple", "banana", "cherry",null];
$combined = array_combine($keys, $values);
print_r($combined);

//check if key exists
var_dump(array_key_exists('3', $combined));
var_dump(array_key_exists('y', $combined));

var_dump(isset($combined['e']));
var_dump(isset($combined['2']));
var_dump(isset($combined['4']));//if the key is present but value is null then false

//associative arrays are arrays that use named keys (strings or numbers) instead of numeric indexes to store and retrieve values. These keys act like labels to identify the data.
$array = [
    "key1" => "value1",
    "key2" => "value2",
    "key3" => "value3"
];


$person = [
    "name" => "John",
    "age" => 25,
    "city" => "New York"
];
echo $person["name"];  // Output: John
echo $person["age"];   // Output: 25

//adding elements
$person["country"] = "USA";

//itterating

foreach ($person as $key => $value) {
    echo "Key: $key, Value: $value\n";
}

//Accessing Keys and Values:
$keys = array_keys($person);
$values = array_values($person);
print_r($keys);   // Output: Array ( [0] => name [1] => age [2] => city [3] => country )
print_r($values); // Output: Array ( [0] => John [1] => 25 [2] => New York [3] => USA )




//array functions

//array_filter() creates a new array with all the elements of the input array that pass the test implemented by the callback function.

$numbers = [1, 2, 3, 4, 5, 6];
$evenNumbers = array_filter($numbers, function ($value) {
    return $value % 2 === 0;
});
print_r($evenNumbers); // Output: Array ( [0] => 2 [1] => 4 [2] => 6 )

//array_map() applies the callback function to each element of the input array and returns a new array containing the results.

$numbers = [1, 2, 3, 4, 5, 6];
$squaredNumbers = array_map(function ($value) {
    return $value ** 2;
}, $numbers);
print_r($squaredNumbers); // Output: Array ( [0] => 1 [1] => 4 [2] => 9 [3] => 16 [4] => 25 [5] => 36 )

//array_reduce() applies the callback function to the elements of the input array and reduces the array to a single value.  

$numbers = [1, 2, 3, 4, 5, 6];
$sum = array_reduce($numbers, function ($carry, $value) {
    return $carry + $value;
}, 0);
echo $sum; // Output: 21

//array_chunk() function in PHP splits an array into smaller arrays (chunks) of a specified size. It can optionally preserve the original array keys.
//array array_chunk(array $array, int $size, bool $preserve_keys = false)

$inputArray = [10 => 'a', 11 => 'b', 12 => 'c', 13 => 'd', 14 => 'e'];
$chunks = array_chunk($inputArray, 2, true);
print_r($chunks);
/**array_chunk() is used to split an array into smaller arrays.
You can control the size of the chunks and whether to preserve the original keys.
Useful for dividing data into manageable parts, such as paginating data or processing it in chunks. */

//array_combine() function in PHP combines two arrays into one associative array.

$keys = [1, 2, 3, 4];
$values = ['a', 'b', 'c', 'd'];
$combinedArray = array_combine($keys, $values);
print_r($combinedArray);


//array_diff() function in PHP compares two or more arrays and returns the difference.

$array1 = [1, 2, 3, 4, 5];
$array2 = [4, 5, 6, 7, 8];
$diff = array_diff($array1, $array2);
print_r($diff);

//array_intersect() function in PHP finds the common elements between two or more arrays.

$array1 = [1, 2, 3, 4, 5];
$array2 = [4, 5, 6, 7, 8];
$intersect = array_intersect($array1, $array2);
print_r($intersect);

//array_merge() function in PHP merges two or more arrays into one.

$array1 = [1, 2, 3];
$array2 = [4, 5, 6];
$mergedArray = array_merge($array1, $array2);
print_r($mergedArray);

//array_unique() function in PHP removes duplicate values from an array.

$array = [1, 2, 3, 2, 4, 5, 1];
$uniqueArray = array_unique($array);
print_r($uniqueArray);

//array_search() function in PHP searches for a given value in an array and returns the first index where it is found.

$array = [1, 2, 3, 4, 5];
$searchValue = 3;
$index = array_search($searchValue, $array);
echo $index; // Output: 2

//array_diff_assoc() function in PHP compares two arrays and returns the difference. It compares elements based on their keys as well.

$array1 = ['a' => 1, 'b' => 2, 'c' => 3];
$array2 = ['b' => 4, 'c' => 5, 'd' => 6];
$diff = array_diff_assoc($array1, $array2);
print_r($diff);

//array_value function returns all the values from an array and resets the keys to numerical indices.

$array = ['a' => 1, 'b' => 2, 'c' => 3];
$values = array_values($array);
print_r($values);

//array_flip() function in PHP reverses the keys and values of an array.

$array = ['a' => 1, 'b' => 2, 'c' => 3];
$flippedArray = array_flip($array);
print_r($flippedArray);

//array_rand() function in PHP returns one or more random keys from an array.

$array = ['a' => 1, 'b' => 2, 'c' => 3];
$randomKeys = array_rand($array, 2);
print_r($randomKeys);

//array_keys() function in PHP is used to return all the keys from an array. This is especially useful when you want to extract or manipulate the keys of an associative array.
//array array_keys(array $array, mixed $search_value = null, bool $strict = false)

$array = [
    "a" => "apple",
    "b" => "banana",
    "c" => "cherry"
];

$keys = array_keys($array);
print_r($keys);

//Search for Specific Value
$array = [
    "a" => "apple",
    "b" => "banana",
    "c" => "apple"
];

$keys = array_keys($array, "apple");
print_r($keys);

//Strict Comparison
$array = [
    "a" => 0,
    "b" => "0",
    "c" => 1
];

$keys = array_keys($array, 0, true);
print_r($keys);

//in_array() Checks if a value exists in an array.
$array = ['apple', 'banana', 'cherry'];

if (in_array('banana', $array)) {
    echo "Banana is in the array!";
} else {
    echo "Banana is not in the array.";
}


// array_key_exists() Checks if a specific key exists in an array.

$array = ['fruit' => 'apple', 'vegetable' => 'carrot'];

if (array_key_exists('fruit', $array)) {
    echo "Key 'fruit' exists!";
} else {
    echo "Key 'fruit' does not exist.";
}


//asort()function in PHP is used to sort an associative array in ascending order, while maintaining the association between keys and values. This means that the keys will stay in their original positions while the values are sorted.
//it sorts the values
//bool asort(array &$array, int $flags = SORT_REGULAR)

/**$flags (optional): Sorting behavior. Common flags are:
SORT_REGULAR: Compare items normally (default).
SORT_NUMERIC: Compare items numerically.
SORT_STRING: Compare items as strings.
SORT_NATURAL: Compare items using "natural order" sorting, like natsort().
SORT_FLAG_CASE: Sort strings case-insensitively. */


$numbers = [
    "first" => 3,
    "second" => 1,
    "third" => 2
];

asort($numbers);
print_r($numbers);

//usort() function in PHP is used to sort an array by values using a custom comparison function that you define. This function allows you to customize how elements in the array should be compared, giving you flexibility beyond the standard sorting functions.
//bool usort(array &$array, callable $callback)
$numbers = [3, 1, 4, 1, 5, 9];

usort($numbers, function($a, $b) {
    return $a <=> $b; // Spaceship operator for comparison
});

print_r($numbers);


//if you want to sort in reverse order interchange the $a and $b in the return statement
usort($numbers, function($a, $b) {
    return $b <=> $a; // Reverse comparison for descending order
});


//Sorting an Array of Objects
$people = [
    ["name" => "John", "age" => 30],
    ["name" => "Jane", "age" => 25],
    ["name" => "Joe", "age" => 35]
];

usort($people, function($a, $b) {
    return $a['age'] <=> $b['age']; // Compare by 'age' key
});

print_r($people);


//Sorting with Custom Logic
$words = ["apple", "banana", "cherry", "date"];

usort($words, function($a, $b) {
    // Sort by the length of the strings
    return strlen($a) <=> strlen($b);
});

print_r($words);


//rsort() Sorts an array in descending order. and Resets the array keys to numeric indices.
$numbers = [3, 1, 4, 1, 5];
rsort($numbers);
print_r($numbers);

//asort() Sorts an array in ascending order while maintaining key-value associations.
$fruits = ["d" => "lemon", "a" => "orange", "b" => "banana", "c" => "apple"];
asort($fruits);
print_r($fruits);

//arsort() Sorts an array in descending order while maintaining key-value associations.

$fruits = ["d" => "lemon", "a" => "orange", "b" => "banana", "c" => "apple"];
arsort($fruits);
print_r($fruits);

//krsort() Sorts an array by key in descending order.

$fruits = ["d" => "lemon", "a" => "orange", "b" => "banana", "c" => "apple"];
krsort($fruits);
print_r($fruits);

//ksort() Sorts an array by key in ascending order.

$fruits = ["d" => "lemon", "a" => "orange", "b" => "banana", "c" => "apple"];
ksort($fruits);
print_r($fruits);

//shuffle() Randomly shuffles the elements in an array.

$numbers = [1, 2, 3, 4, 5];
shuffle($numbers);
print_r($numbers);

/**Basic Sorting: sort(), rsort()
Associative Array Sorting (by value): asort(), arsort()
Associative Array Sorting (by key): ksort(), krsort()
Natural Sorting: natsort(), natcasesort()
Custom Sorting: usort(), uasort(), uksort()
Multi-dimensional Sorting: array_multisort() */


//array destructuring
//Array destructuring in PHP is a convenient way to extract values from arrays and assign them to variables in a single step. 

$array = [1, 2, 3];

// Destructure the array into variables
list($a, $b, $c) = $array;

echo $a; // Output: 1
echo $b; // Output: 2
echo $c; // Output: 3


$array = ['apple', 'banana', 'cherry'];

// Destructure the array
[$fruit1, $fruit2, $fruit3] = $array;

echo $fruit1; // Output: apple
echo $fruit2; // Output: banana
echo $fruit3; // Output: cherry


//Skipping Values


$array = [10, 20, 30, 40];

// Skip the second value
[$a, , $c, $d] = $array;

echo $a; // Output: 10
echo $c; // Output: 30
echo $d; // Output: 40

//Destructuring with Associative Arrays
$person = [
    'name' => 'John',
    'age'  => 30,
    'city' => 'New York'
];

// Destructure by accessing specific keys
['name' => $name, 'city' => $city] = $person;

echo $name;  // Output: John
echo $city;  // Output: New York


//Nested Array Destructuring
$array = [
    [1, 2],
    [3, 4],
];

// Destructure the nested array
[[$a, $b], [$c, $d]] = $array;

echo $a; // Output: 1
echo $b; // Output: 2
echo $c; // Output: 3
echo $d; // Output: 4

?>