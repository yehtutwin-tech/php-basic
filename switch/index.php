<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Switch</title>
</head>
<body>
  <?php
    $grade = null;
    $result = null;

    if (isset($_POST['grade'])) {
      $grade = $_POST['grade'];
      $grade = strtoupper($grade);

      switch ($grade) {
        case 'A':
          $result = 'You did great.';
          break;
        case 'B':
          $result = 'You did good.';
          break;
        case 'C':
          $result = 'You did okay.';
          break;
        case 'D':
          $result = 'You did poorly.';
          break;
        case 'E':
          $result = 'You failed.';
          break;
        default:
          $result = 'Invalid grade!';
      }
    }
  ?>
  <form method="post">
    <p>What is your grade?</p>
    <input type="text" name="grade" value="<?= $grade ?>" />
    <button type="submit">Submit</button>
  </form>
  <hr/>
  <label>Result: <?= $result ?>
</body>
</html>