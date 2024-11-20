<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login Form - POST</title>
</head>

<body>
  <form action="login.php" method="post">
    <label>Username:</label>
    <br />
    <input type="text" name="username" />
    <br />
    <label>Password:</label>
    <br />
    <input type="password" name="password" />
    <br />
    <br />
    <input type="submit" value="Login" />
  </form>
  <hr />
  <?php
    if (isset($_POST['username'])) {
      echo $_POST['username'];
    }

    echo '<br/>';

    if (isset($_POST['password'])) {
      echo $_POST['password'];
    }
  ?>
</body>

</html>