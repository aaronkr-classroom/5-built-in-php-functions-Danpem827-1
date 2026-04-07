<?php
$username= 'Ivy'; //사칼라 변수
$user_array1 = ['Ivy',34,'Web programming'];
$user_array2 =[
  'name'=> 'Ivy',
  'age'=> 34,
  'major'=> 'Web programming',
];
class User{
  public $name;
  public $age;
  public $major;
  public function __construct($name,$age,$major){
    $this->name = $name;
    $this->age = $age;
    $this->major = $major;
  }
}
$user_object = new User('Ivy',34,'Web programming');
?>
<p>Scalar: <?php var_dump($username); ?></p>
<p>Array1:  <?php var_dump($user_array1); ?></p>
<p>Array2:  <?php var_dump($user_array2); ?></p>
<p>Object: <?php var_dump($user_object); ?></p>