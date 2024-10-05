<?php
echo 'hello';

//backslash can be used as escape characters
//the semicolon is a must in php 
// if the code is entirely php no need of the closing tag
//if only a single line of code in the php tags the closing tag assumes the role of the semicolon so not a must
//variables

#comment
/*
comments
*/
$Name='Jose';
echo ' ' ,$Name;
echo "hello $Name";
/*
you can use
<?=     ?> or <?php  ?>
if you use single line comment on same line as closing tag gives an error
*/

//constants
//define('variable),'value'
//const $variable='value'

define('FIRSTNAME','Jose');
echo ' he', FIRSTNAME;
echo ' he'. FIRSTNAME;
echo defined('FIRSTNAME');
const FOO='bar';
/*
Declaration Context:

define() can only be used to define constants in the global scope, not in a class.
const can be used in class contexts and global scope.
Execution Time:

define() works at runtime.
const is resolved at compile time.
Dynamic Names:

define() allows dynamic constant names.
const does not allow dynamic names.
 */

 //dynamic constants
 $Car='BMW';
 define('VEHICLE',$Car);
 echo VEHICLE;
 echo PHP_VERSION;

 //variable variables
 //the values of the first variable becomes the variable name of the second
 $x='Name';
 $$x='John';
 echo $Name;

$bar='baz';
$$bar='bar';    
echo $bar,$baz;
echo "$baz, ${$bar}";

/*
  $baz and ${$bar}  above are similar
*/

 //data types
 //integer, float, string, boolean, array, object, resource
#array
$companies=[1,2,3,'jonson',true,0.89];
print_r($companies);
 /*
 Dynamically typed refers to a property of programming languages where the type of a variable is determined at runtime, rather than at compile time. This contrasts with statically typed languages, where variable types are determined at compile time. Let's explore these concepts:
  */
  echo gettype($x);
  var_dump($x);
 //casting
 //you can convert string to int and vice varsa

 $a=(string)10;
 var_dump($a);
 $a=(int)'10';
 var_dump($a);
//anything to int is rounded down
//string to int gives 0
//if the string has some numbers the numbers are returned
//in millions and big numbers where you use commas use underscore

 
 //anything not empty or nun zero is true
 //if you echo a false variable the output is blank
 //if you echo a true variable the output is 1
 //because php when you echo it trys to convert the variable to a string

 //integers
 //can be decimal 
 $r=12;
 //hexadecimal
 $hx=0x2A;
 echo "$hx\n";

 //binary
 $bi=0b11;
 echo $bi;

 //floats
 $x=3.45e5;
 $y=673.45e-2;
 echo "$x \n";
 $t=floor($y);
 echo "$t\n";
 echo ceil($y);
 //never compare floats, INF or NAN directly
 //use built in functions in INF and NAN
 var_dump(is_nan($y));
 var_dump(is_infinite($x));
 var_dump(is_finite($x));

 //strings
 //single quotes and double quotes are the same
 //in double you can use variables
 //escape characters are not needed in single quotes
 //you can use \n for newline
 //you can use \t for tab
 //you can use \r for carriage return
 //you can use \ for escaping special characters
 $str1='hello';
 $str2="world";
 echo "$str1 ${str2}\n";
 $str3='single \n quote';
 echo $str3;
 $first='will';
 $second='smith';
 $name= $first.' '.$second;
 echo '<br/>'.$name .'<br/>';
$name[6]='O';
echo $name .'<br/>';

//you can also include multiline strings
/**
 * Heredoc is a method for defining multi-line strings in a readable way without the need for concatenation or escaping special characters like quotes. It is particularly useful when dealing with long blocks of text, such as HTML or JSON, within your PHP code.
 
 *just like " "

 * every space here appaers on the browser
 * it is useful in writing html tags
 */

$text = <<<TEXT
\n
${x} 
${y} 
hvygggvgfcfc
gvhgvhj

<div>Hellooghvdgxhcxs</div>




TEXT;
echo nl2br($text);
/*
Nowdoc is similar to Heredoc but is used for defining multi-line strings without variable interpolation. It is useful when you want to include raw text, such as SQL queries or HTML, without any parsing of variables.

the syntax is the same you just enclose the opening tag with single quotes
 *just like ' '
*/
$text = <<<'TEXT'
hvygggvgfcfc ' "
gvhgvhj
TEXT;
echo nl2br($text);

//null
$x= null;
var_dump(is_null($x));
var_dump($x===null);

//unset() destroys the variable
//if a variable is undef null is returned
 $x=10;
 unset($x);
 var_dump($x);
 //if you cast null to string/array it returns an empty string/array
 //if you cast null to boolean it returns false
 //null to integer returns 0
 //boolean
 //true and false
 $b=true;
 echo gettype($b);
 $b=false;
 echo gettype($b);

 //arrays
 //can hold multiple values
 $arr=['apple','banana','orange'];
 echo $arr[0];
 //add elements
 $arr[]='grape';
 echo $arr[3];
?>