<?php

class User {
  public $name;
  public $email;
  public $type;

  public function __construct($name, $email, $type)
  {
    $this->name = $name;
    $this->email = $email;
    $this->type = $type;
  }

  public function getType()
  {
    return $this->type;
  }
}

class Admin extends User {
  public $permission_level;

  public function __construct($name, $email, $type, $permission_level)
  {
    parent::__construct($name, $email, $type);
    $this->permission_level = $permission_level;
  }
}
