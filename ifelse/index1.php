<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>If / Else</title>
</head>
<body>
  <?php
    $age = null;
    $result = null;

    if (isset($_POST['age'])) {
      $age = $_POST['age'];

      if ($age >= 18) {
        $result = 'You are an adult';
      }
      else if ($age >= 16) {
        $result = 'You are a teenager';
      }
      else {
        $result = 'You are a minor';
      }
    }

    // Baby - 0 - 18 months

    // Toddler - 1-3

    // Child - 4-9

    // Tween - 10-12

    // Teen - 13-19

    // Young Adult - 20-24

    // Adult - 25-39

    // Middle - 40-54

    // Elder - 55-79

    // Just plain old - 80+
  ?>
  <h1>If / Else</h1>
  <form method="post">
    <label>Age:</label>
    <input type="text" name="age" value="<?= $age ?>" />
    <button type="submit">Submit</button>
  </form>
  <hr/>
  <label>Result: <?= $result ?></label>
</body>
</html>
