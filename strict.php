<?php
//strict_types: This directive enables strict type checking for function calls and return types, ensuring that the types of arguments passed and returned are exactly as declared.

declare(strict_types=1);

function add(int $a, int $b): int {
    return $a + $b;
}

echo add(2, 3);  // Output: 5
// echo add(2.5, 3.5);  // This will cause a TypeError
/**Function Declaration:

function add(...): This declares a function named add.
Parameters:

int $a: The first parameter $a is typed as an integer.
int $b: The second parameter $b is also typed as an integer.
Return Type:

: int: This specifies that the function will return an integer. If the return type does not match, a TypeError will be thrown (if strict_types is enabled).
Function Body:

return $a + $b;: This line calculates the sum of $a and $b, and returns the result. */
?>