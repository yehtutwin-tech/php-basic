<?php

$x = 10;
$y = 3;

// Addition
echo "Addition: " . ($x + $y) . "<br/>";

// Subtraction
echo "Substraction: " . ($x - $y) . "<br/>";

// Multiplication
echo "Multiplication: " . ($x * $y) . "<br/>";

// Division
echo "Division: " . ($x / $y) . "<br/>";

// Exponentiation
echo "Exponentiation: " . ($x ** $y) . "<br/>";

// Modulus
echo "Modulus: " . ($x % $y) . "<br/>";

echo "<hr/>";

// Operator precedence
// ()
// **
// * / %
// + -
$total = 1 + 2 - 3 * 4 / 5 ** 2;
echo $total; // 2.52

// 1 + 2 - 3 * 4 / (5 ** 2)
// 1 + 2 - 3 * 4 / (25)
// 1 + 2 - (3 * 4) / 25
// 1 + 2 - (12) / 25
// 1 + 2 - (12 / 25)
// 1 + 2 - (0.48)
// (1 + 2) - 0.48
// (3) - 0.48
// 2.52





