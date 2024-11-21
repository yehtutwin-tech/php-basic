<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>And (&&) Operator</title>
</head>
<body>
  <?php
    $temp = null;
    $result = null;

    if (isset($_POST['temp'])) {
      $temp = $_POST['temp'];

      if ($temp >= 20 && $temp <= 30) {
        $result = 'The weather is good.';
      }
      else {
        $result = 'The weather is bad.';
      }
    }
  ?>
  <form method="post">
    <label>Temperature</label>
    <input type="text" name="temp" value="<?= $temp ?>" />
    <button type="submit">Submit</button>
  </form>
  <hr/>
  <label>Result: <?= $result ?></label>
</body>
</html>
