<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Function</title>
</head>
<body>
  <?php
    function isEven($num) {
      return $num % 2 === 0;
      // $remainder = $num % 2;
      // if ($remainder === 0) {
      //   return true;
      // }
      // else {
      //   return false;
      // }
    }

    $number = null;
    $result = null;
    if (isset($_POST['number'])) {
      $number = $_POST['number'];

      if (isEven($number)) {
        $result = 'It is even number';
      }
      else {
        $result = 'it is odd number';
      }
    }
  ?>
  <form method="post">
    <input type="text" name="number" value="<?= $number ?>" />
    <button type="submit">Submit</button>
  </form>
  <hr/>
  <?= $result ?>
</body>
</html>
