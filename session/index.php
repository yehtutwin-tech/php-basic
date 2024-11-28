<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PHP Login Form</title>
</head>
<body>
  <?php
    session_start();
    $usernameErr = $passwordErr = '';
    $username = $password = '';
    $message = '';

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
      if (empty($_POST["username"])) {
        $usernameErr = 'Username is required';
      } else {
        $username = $_POST['username'];
      }

      if (empty($_POST["password"])) {
        $passwordErr = 'Password is required';
      } else {
        $password = $_POST['password'];
      }

      if (
        $username === 'admin' &&
        $password === '123'
      ) {
        $_SESSION['isLoggedIn'] = true;
        header('Location: home.php');
        // die('successfully login');
      } else {
        $message = 'Invalid credential';
      }
    }
  ?>
  <h1>Login Page</h1>
  <form method="post">
    <p style="color:red"><?= $message ?></p>
    <label>Username</label>
    <span>(* <?= $usernameErr ?>)</span>
    <br/>
    <input type="text" name="username" />
    <br/><br/>
    <label>Password</label>
    <span>(* <?= $passwordErr ?>)</span>
    <br/>
    <input type="password" name="password" />
    <br/><br/>
    <button type="submit">Login</button>
  </form>
</body>
</html>
