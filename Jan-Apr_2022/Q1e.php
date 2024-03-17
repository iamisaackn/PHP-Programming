<?php
function factorial($n) {
    if ($n == 0) {
        return 1;
    } else {
        return $n * factorial($n - 1);
    }
}

function calculate_e($terms) {
    $x = 1; // value of x
    $e = 1; // start with 1

    for ($i = 1; $i <= $terms; $i++) {
        $e += pow($x, $i) / factorial($i);
    }

    return $e;
}

$terms = intval(readline("Enter the number of terms: "));
echo "The estimated value of e is: " . calculate_e($terms);
?>
