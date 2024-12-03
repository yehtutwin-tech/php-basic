<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>File Upload</title>
</head>
<body>
  <?php
    $formats = ['image/jpg', 'image/jpeg', 'image/png'];

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
      if (isset($_FILES['image'])) {
        $file = $_FILES['image'];

        echo '<pre>';
        print_r($file);
        echo '</pre>';

        if (in_array($file['type'], $formats)) {

          move_uploaded_file(
            $file['tmp_name'],
            './uploads/' . $file['name']
          );
          echo 'File upload successful';

        }
        else {
          echo 'Invalid format';
        }

        echo '<hr/>';
      }
    }
  ?>
  <form method="POST" enctype="multipart/form-data">
    <input type="file" name="image" />
    <button type="submit">Upload</button>
  </form>
</body>
</html>
