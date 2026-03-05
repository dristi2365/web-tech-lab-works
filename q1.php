<?php
// Q1: Write a PHP program to handle arithmetic exception: Divide by zero

function divide($a, $b) {
    if ($b == 0) {
        throw new Exception("Division by zero is not allowed!");
    }
    return $a / $b;
}

try {
    echo "10 / 2 = " . divide(10, 2) . "<br>";
    echo "5 / 0 = " . divide(5, 0) . "<br>";
} catch (Exception $e) {
    echo "Exception caught: " . $e->getMessage();
}
?>