<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>NOT (!) Operator</title>
</head>
<body>
  <?php
    $is_cloudy = null;
    $result = null;
    $cloudy = false;

    if (isset($_POST['is_cloudy'])) {
      $is_cloudy = $_POST['is_cloudy'];

      if ($is_cloudy == 'yes') {
        $result = 'Yes, it is cloudy.';
        $cloudy = true;
      }
      else {
        $result = 'No, it is sunny.';
        $cloudy = false;
      }
    }
  ?>
  <form method="post">
    <p>Is Cloudy?</p>
    <input
      type="radio" id="yes" name="is_cloudy" value="yes"
      <?= ($is_cloudy == 'yes' ? 'checked' : '') ?>
    />
    <label for="yes">Yes</label>
    <br/>
    <input
      type="radio" id="no" name="is_cloudy" value="no"
      <?= ($is_cloudy == 'no' ? 'checked' : '') ?>
    />
    <label for="no">No</label>
    <br/><br/>
    <button type="submit">Submit</button>
  </form>
  <hr/>
  <label>Result: <?= $result ?></label>
  <hr/>
  <label>
    Cloudy or Sunny:
    <?php
      if (!$cloudy) {
        echo 'Sunny';
      }
      else {
        echo 'Cloudy';
      }
    ?>
  </label>
</body>
</html>