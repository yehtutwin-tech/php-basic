<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Calculation</title>
</head>
<body>
  <?php
    $price = 10;
    $quantity = null;
    $total = 0;

    if(isset($_POST['quantity'])) {
      $quantity = $_POST['quantity'];

      $total = $price * $quantity;
    }
  ?>
  <h1>Buy Orange</h1>
  <form method="post">
    <label>Price (1pc):</label>
    <br/>
    <input type="text" name="price" value="<?= $price ?>" />
    <br/><br/>
    <label>Quantity</label>
    <br/>
    <input type="text" name="quantity" value="<?= $quantity ?>" />
    <br/><br/>
    <input type="submit" value="Total" />
    <hr/>
    <label>Total Amount: $<?= $total ?></label>
  </form>
</body>
</html>