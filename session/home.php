<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Home Page</title>
</head>
<body>
  <?php
    session_start();
    
    if (isset($_SESSION['isLoggedIn'])) {
      echo 'you are logged in';
    }
    else {
      echo 'you are not logged in';
    }

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
      if (isset($_POST['logout'])) {
        session_destroy();
        header('Location: index.php');
      }
    }
  ?>
  <h1>Home</h1>
  <form method="post">
    <input type="submit" name="logout" value="Logout" />
  </form>
</body>
</html>