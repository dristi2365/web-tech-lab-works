<?php
// Q2: Write a PHP script to demonstrate use of arithmetic, comparison and logical operators

$a = 10;
$b = 3;

// Arithmetic Operators
echo "<h2>Arithmetic Operators</h2>";
echo "a = $a, b = $b <br><br>";
echo "Addition: $a + $b = " . ($a + $b) . "<br>";
echo "Subtraction: $a - $b = " . ($a - $b) . "<br>";
echo "Multiplication: $a * $b = " . ($a * $b) . "<br>";
echo "Division: $a / $b = " . ($a / $b) . "<br>";
echo "Modulus: $a % $b = " . ($a % $b) . "<br>";
echo "Exponentiation: $a ** $b = " . ($a ** $b) . "<br>";

// Comparison Operators
echo "<h2>Comparison Operators</h2>";
echo "a = $a, b = $b <br><br>";
echo "a == b : " . var_export($a == $b, true) . "<br>";
echo "a != b : " . var_export($a != $b, true) . "<br>";
echo "a > b : " . var_export($a > $b, true) . "<br>";
echo "a < b : " . var_export($a < $b, true) . "<br>";
echo "a >= b : " . var_export($a >= $b, true) . "<br>";
echo "a <= b : " . var_export($a <= $b, true) . "<br>";

// Logical Operators
echo "<h2>Logical Operators</h2>";
$x = true;
$y = false;
echo "x = true, y = false <br><br>";
echo "x AND y : " . var_export($x && $y, true) . "<br>";
echo "x OR y : " . var_export($x || $y, true) . "<br>";
echo "NOT x : " . var_export(!$x, true) . "<br>";
echo "NOT y : " . var_export(!$y, true) . "<br>";
?>