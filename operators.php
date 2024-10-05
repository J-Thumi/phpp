<?php
//OPERATOS
//ARITHMETIC (+ - ** % **)
$a = 10;
$b = 3;

echo $a + $b;  // 13
echo $a - $b;  // 7
echo $a * $b;  // 30
echo $a / $b;  // 3.3333
echo $a % $b;  // 1
echo $a ** $b; // 1000 (10 to the power of 3)
//ASSIGNMENT (= += -= /= %= **=)
$a = 5;
$b = 3;

$a += $b;  // $a = 8
$a -= $b;  // $a = 5
$a *= $b;  // $a = 15
$a /= $b;  // $a = 5
$a %= $b;  // $a = 2
$a **= $b; // $a = 8 (2 to the power of 3)

//Comparison (== === != <> !== < > <= >= <=>)
$a = 5;
$b = 3;

var_dump($a == $b);   // false
var_dump($a === $b);  // false (not the same type or value)
var_dump($a != $b);   // true
var_dump($a < $b);    // false
var_dump($a > $b);    // true

echo $a <=> $b;  // 1 (a is greater)

//  Logical  && || ! and or xor
$a = true;
$b = false;

var_dump($a && $b);  // false
var_dump($a || $b);  // true
var_dump(!$a);       // false
var_dump($a xor $b); // true

// Increment/Decrement  ++ --
$a = 5;

echo ++$a;  // 6 (pre-increment)
echo $a++;  // 6 (post-increment)
echo $a;    // 7

echo --$a;  // 6 (pre-decrement)
echo $a--;  // 6 (post-decrement)
echo $a;    // 5

// String . .=
$a = "Hello";
$b = " World";

echo $a . $b;  // Hello World

$a .= $b;  // $a = "Hello World"
//concatnation assignment
echo $a;   // Hello World


// Array  + == === != <> !==
$a = ["a" => "apple", "b" => "banana"];
$b = ["b" => "banana", "a" => "apple"];

var_dump($a == $b);   // true (same key-value pairs)
var_dump($a === $b);  // false (different order)


// Bitwise  & | ^ ~ << >>
$a = 6;  // 110 in binary
$b = 3;  // 011 in binary

echo $a & $b;  // 2 (010)
echo $a | $b;  // 7 (111)
echo $a ^ $b;  // 5 (101)
echo ~$a;      // -7 (bitwise NOT of 110)
echo $a << 1;  // 12 (shift left by 1, 1100)
echo $a >> 1;  // 3 (shift right by 1, 011)


// Error Control  @
@$undefinedVar;  // Suppresses the "undefined variable" warning


// Type  instanceof
class MyClass {}
$a = new MyClass();
var_dump($a instanceof MyClass);  // true


// Execution `` (backticks)
$output = `ls`;  // Executes the "ls" command in shell
echo $output;

// Null Coalescing  ??
$a = null;
$b = "value";
echo $a ?? "default";  // default
echo $b ?? "default";  // value


// Ternary  ?:
$a = true;
$b = "yes";
$c = "no";
echo $a ? $b : $c;  // yes

// Spaceship  <=>
echo 1 <=> 2;  // -1 (1 is less than 2)
echo 2 <=> 2;  // 0 (2 is equal to 2)
echo 3 <=> 2;  // 1 (3 is greater than 2)


?>