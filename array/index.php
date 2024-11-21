<?php

// $foods = array('apple', 'orange', 'banana', 'coconut');
$foods = ['apple', 'orange', 'banana', 'coconut'];

// index
echo $foods[0] . '<br/>';
echo $foods[1] . '<br/>';
echo $foods[2] . '<br/>';
echo $foods[3] . '<br/>';

echo '<hr/>';

// foreach
foreach($foods as $food) {
  echo $food . '<br/>';
}

echo '<hr/>';

// foreach
foreach($foods as $index => $food) {
  echo $index . ' - ' . $food . '<br/>';
}

echo '<hr/>';

// updating array
// $foods[0] = 'pineapple';

// add to array
// array_push($foods, 'pineapple', 'kiwi');

// remove last index
// array_pop($foods);

// remove first index
// array_shift($foods);

// array_splice, unset ***

// array reverse
// $foods = array_reverse($foods);

// foreach
foreach($foods as $key => $value) {
  echo "$key - $value<br/>";
}

echo '<hr/>';

echo count($foods);

echo '<hr/>';

for($i = 0; $i < count($foods); $i++) {
  echo $i . ' - ' . $foods[$i] . '<br/>';
}




