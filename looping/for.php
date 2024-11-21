<?php
// // for loop increment by 1
// for($i = 1; $i <= 10; $i++) {
//   echo $i . '<br/>';
// }

// echo '<hr/>';

// // for loop increment by 2
// for($i = 1; $i <= 10; $i+=2) {
//   echo $i . '<br/>';
// }

// echo '<hr/>';

// // for loop decrement by 1
// for($i = 10; $i > 0; $i--) {
//   echo $i . '<br/>';
// }

// for nested loop
for($i = 1; $i <= 10; $i++) {

  for($j = 1; $j <= $i; $j++) {

    echo "i = $i, j = $j <br/>";

  }

  echo '<hr/>';

}

