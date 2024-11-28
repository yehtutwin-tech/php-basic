<?php

$mail = 'mgmg.2010@mail.com';
$password = 'mgmg2020';

$hash_pasword = password_hash($password, PASSWORD_BCRYPT);

echo $password;
echo '<br/>';
echo $hash_pasword;

echo '<hr/>';

if (password_verify('mgmg2020', $hash_pasword)) {
  echo 'You are logged in!';
}
else {
  echo 'Incorrect password!';
}



