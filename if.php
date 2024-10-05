<?php
if (condition) {
    // code to be executed if condition is true
}


$a = 10;
$b = 5;
if ($a > $b) {
    echo "$a is greater than $b";  // Output: 10 is greater than 5
}

//if...else Statement:
    if (condition) {
        // code to be executed if condition is true
    } else {
        // code to be executed if condition is false
    }

    $a = 5;
    $b = 10;
    if ($a > $b) {
        echo "$a is greater than $b";
    } else {
        echo "$a is not greater than $b";  // Output: 5 is not greater than 10
    }
   
    
    //if...elseif...else Statement:

        if (condition1) {
            // code to be executed if condition1 is true
        } elseif (condition2) {
            // code to be executed if condition1 is false and condition2 is true
        } else {
            // code to be executed if both condition1 and condition2 are false
        }

        $time = 12;

if ($time < 12) {
    echo "Good morning!";
} elseif ($time < 18) {
    echo "Good afternoon!";  // Output: Good afternoon!
} else {
    echo "Good evening!";
}


//Ternary Operator (? :):
$variable = (condition) ? value_if_true : value_if_false;

$age = 20;
$status = ($age >= 18) ? "Adult" : "Minor";
echo $status;  // Output: Adult



   // switch
   //compares using ==
switch (variable) {
    case value1:
        // code to be executed if variable equals value1
        break;
    case value8: //value8 or value2
    case value2:
        // code to be executed if variable equals value2
        break;
    // more cases...
    default:
        // code to be executed if variable does not match any case
}


//match
//compares using ===
$result = match (expression) {
    value1 => result1,
    value2 => result2,
    // more values...
    default => defaultResult,
};

$day = 3;
$result = match ($day) {
    1 => "Monday",
    2 => "Tuesday",
    3 => "Wednesday",  // Output: "Wednesday"
    4 => "Thursday",
    5 => "Friday",
    default => "Invalid day",
};
echo $result;  // Output: Wednesday


$score = 85;
$result = match (true) {
    $score >= 90 => "Grade: A",
    $score >= 80 => "Grade: B",  // Output: "Grade: B"
    $score >= 70 => "Grade: C",
    default => "Grade: F",
};
echo $result;  // Output: Grade: B

?>