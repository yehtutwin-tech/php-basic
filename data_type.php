<?php

$name = 'Ko Ko'; // string
$age = 20; // integer
$price = 3.5; // float
$is_online = true; // boolean

var_dump($name);
echo '<br/>';
var_dump($age);
echo '<br/>';
var_dump($price);
echo '<br/>';
var_dump($is_online);

echo '<hr/>';

echo gettype($name);

echo '<hr/>';

$food = 'pizza';
$price = 3.5;
$quantity = 3;

$total = null;

echo "You have ordered $quantity x $food";

$total = $price * $quantity;

echo '<br/>';
echo "Your total amount is : $$total";


