<?php

$num = 0;

if (isset($num)) {
  echo 'if - isset';
}

echo '<br/>';

$num = 1;

if (empty($num)) {
  echo 'if - empty';
}
else {
  echo 'else - empty';
}

echo '<br/>';

if (!empty($num)) {
  echo 'if - !empty';
}

