<?php
function happyBirthday($name = 'my friend', $age = null) {
  echo "Happy birthday to you<br/>";
  echo "Happy birthday to you<br/>";
  echo "Happy birthday, dear $name<br/>";
  echo "Happy birthday to you.<br/><br/>";

  if ($age) {
    echo "You are $age years old now.<br/>";
  }
}

$name = 'Mg Mg';
happyBirthday($name);

happyBirthday();

$name = 'Su Su';
$age = 20;
happyBirthday($name, $age);





