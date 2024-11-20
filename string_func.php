<?php

$name = ' Digital Skill Institute ';

$name = trim($name);
// $name = strtolower($name);
// $name = strtoupper($name);

// 1
// 00001
// 2
// 00002
// 10
// 00010
// 223
// 00223

// $name = str_pad($name, 30, '*', STR_PAD_BOTH);
// $name = strrev($name);
// $name = str_shuffle($name);
// $name = str_replace(' ', ' - ', $name);

echo '"'.$name.'"';
echo '<hr/>';

// $equal = strcmp($name, 'Digital Skill Institute') == 0;

// if ($equal) {
//   echo 'Equal';
// }
// else {
//   echo 'Not Equal';
// }

// $count = strlen($name);
// echo $count;

$first_name = substr($name, 0, 13);
$last_name = substr($name, 14);

echo $first_name;
echo '<br/>';
echo $last_name;


