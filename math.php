<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Math Function</title>
</head>
<body>
  <?php
    $x = null;
    $y = null;
    $result = null;
    if (isset($_POST['x']) && isset($_POST['y'])) {
      $x = $_POST['x'];
      $y = $_POST['y'];

      // echo $x;

      // abs
      $result = abs($x);
      // -3.14 => 3.14
      // -5 => 5

      // round
      $result = round($x);
      // 3.5 => 4
      // 3.4 => 3

      // ceil
      $result = ceil($x);
      // 3.5 => 4
      // 3.4 => 4

      // floor
      $result = floor($x);
      // 3.5 => 3
      // 3.4 => 3

      // sqrt
      $result = sqrt($x);
      // 25 = 5
      // 144 = 12

      // pow
      $result = pow($x, $y);
      // x = 3, y = 2
      // result => 3 * 3 = 9
      // x = 3, y = 4
      // result => 3 * 3 * 3 * 3 = 81

      // min, max
      $result = min($x, $y);
      // 10, 20 => 10
      // 100, 20 => 20

      $result = max($x, $y);
      // 10, 20 => 20
      // 100, 20 => 100

      $result = min(1, 2, 3, 4, 5, 6);

      // rand
      // $result = rand();
      $result = rand($x, $y); // min, max
    }
  ?>
  <h1>Math Function</h1>
  <form method="post">
    <label>x:</label>
    <input type="text" name="x" value="<?= $x ?>" />
    <br/><br/>
    <label>y:</label>
    <input type="text" name="y" value="<?= $y ?>" />
    <br/><br/>
    <button type="submit">Submit</button>
  </form>
  <hr/>
  <label>Result: <?= $result ?></label>
</body>
</html>
