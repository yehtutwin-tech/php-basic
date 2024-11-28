<?php

// 60s * 60m * 24h
// setcookie('fav_food', 'pizza', time() + (86400 * 2), '/');
// setcookie('fav_drink', 'coffee', time() + (86400 * 3), '/');

setcookie('fav_food', 'pizza', time() + 0, '/');
setcookie('fav_drink', 'coffee', time() + 0, '/');

// print_r($_COOKIE);
// var_dump($_COOKIE);

foreach($_COOKIE as $key => $value) {
  echo "$key => $value<br/>";
}


