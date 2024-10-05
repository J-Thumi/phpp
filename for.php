<?php
for (initialization; condition; increment) {
    // code to be executed
}



for ($i = 0; $i < 5; $i++) {
    echo "Iteration $i\n";  // Output: Iteration 0, Iteration 1, Iteration 2, Iteration 3, Iteration 4
}


for ($i = 0; $i < 3; $i++) {
    for ($j = 0; $j < 3; $j++) {
        echo "i: $i, j: $j\n";  
        // Output: i: 0, j: 0, i: 0, j: 1, ..., i: 2, j: 2
    }
}


for ($i = 0; $i < 5; $i++) {
    if ($i == 3) {
        break;  // Exits the loop when $i equals 3
    }
    echo $i . "\n";  // Output: 0, 1, 2
}


for ($i = 0; $i < 5; $i++) {
    if ($i == 2) {
        continue;  // Skips the current iteration when $i equals 2
    }
    echo $i . "\n";  // Output: 0, 1, 3, 4
}

?>