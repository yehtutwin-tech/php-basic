<?php

// class User {
//   const BR = '<br/>';

//   public function __construct($name)
//   {
//     echo 'hi ' . $name . self::BR;
//     echo 'hi ' . $name . '<br/>';
//   }
// }

// $user = new User('Ko Ko');
// $user = new User('Mg Mg');
// $user = new User('Su Su');

// class User {
//   public $age;
//   private $password;

//   public function __construct($age)
//   {
//     $this->age = $age;
//     $this->password = '@dm1n';
//   }

//   public function printAge()
//   {
//     print $this->age;
//   }
// }

// $user = new User(20);
// // $user->printAge();

// echo $user->age;
// // echo $user->password; // not accessable


include('user.php');

$user1 = new User('Ko Ko', 'koko@mail.com', 'Member');

echo $user1->getType();

echo "<hr/>";

$user2 = new Admin('Mg Mg', 'mgmg@mail.com', 'Admin', 3);

echo $user2->getType();




