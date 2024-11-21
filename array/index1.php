<?php

$currencies = [
  'US' => 'USD',
  'EU' => 'EUR',
  'JP' => 'JPY',
  'IN' => 'INR',
  'MM' => 'MMK',
];

// print_r($currencies);

foreach($currencies as $key => $value) {
  echo "$key - $value<br/>";
}
echo '<hr/>';

$currencies = array_flip($currencies);

foreach($currencies as $key => $value) {
  echo "$key - $value<br/>";
}
echo '<hr/>';

// $currencies_keys = array_keys($currencies);
// foreach($currencies_keys as $key => $value) {
//   echo "$key - $value<br/>";
// }
// echo '<hr/>';

// $currencies_values = array_values($currencies);
// foreach($currencies_values as $key => $value) {
//   echo "$key - $value<br/>";
// }


