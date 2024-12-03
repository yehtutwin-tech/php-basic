<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>File Upload</title>
</head>
<body>
  <?php
    include('upload.php');

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
      if (isset($_FILES['image'])) {
        $file = $_FILES['image'];

        $upload = new Upload($file);

        if ($upload->isValidFormt()) {
          echo 'Valid format!<br/>';

          $base64 = $upload->getBase64();
          echo $base64;

          echo "<img src='$base64' />";

          // $result = $upload->uploadNow();

          // if ($result) {
          //   echo 'Upload successfully!<br/>';
          // }
          // else {
          //   echo 'Upload failed!';
          // }
        }
        else {
          echo 'Invalid format!';
        }
      }
    }
  ?>
  <form method="POST" enctype="multipart/form-data">
    <input type="file" name="image" />
    <button type="submit">Upload</button>
    <img src="uploads/14327665_5474209.jpg" width="100" />
  </form>
</body>
</html>
