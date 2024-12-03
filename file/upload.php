<?php

class Upload {
  public $file;

  private $formats = ['image/jpg', 'image/jpeg', 'image/png'];

  private $upload_dir = './uploads/';

  public function __construct($file)
  {
    $this->file = $file;
  }

  public function isValidFormt()
  {
    return in_array($this->file['type'], $this->formats);
  }

  public function uploadNow()
  {
    return move_uploaded_file(
      $this->file['tmp_name'],
      './uploads/' . $this->file['name']
    );
  }

  // isValidSize()
  // file < 1M

  // getFileType()
  // .jpg, .png, .git

  // getBase64()
  public function getBase64() {
    $data = base64_encode(
      file_get_contents($this->file['tmp_name'])
    );
    $base64 = 'data:'.
      mime_content_type($this->file['tmp_name']).
      ';base64,'.
      $data;
    return $base64;
  }

  // resizeImage()
  // resizeImage($width, $height)

  // convertPng2Jpg()
  // convertJpg2Png()
}
