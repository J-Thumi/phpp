<?php
function add($a, $b) {
    return $a + $b;  // Returns the sum of $a and $b
}

$result = add(5, 10);  // Calls the function and stores the result
echo $result;           // Output: 15


function getValues() {
    return [1, 2, 3];  // Returns an array
}

list($a, $b, $c) = getValues();  // Unpacking the returned array
echo "$a, $b, $c";                // Output: 1, 2, 3


function noValue() {
    return;  // Implicitly returns NULL
}
$result = noValue();
var_dump($result);  // Output: NULL



//declare function
//declare (directive => value);
declare(ticks=1);

function tickHandler() {
    echo "Tick occurred!\n";
}

register_tick_function('tickHandler');

for ($i = 0; $i < 5; $i++) {
    // Code that will trigger ticks
    usleep(100000);  // Sleep for 100 milliseconds
}

unregister_tick_function('tickHandler');

?>