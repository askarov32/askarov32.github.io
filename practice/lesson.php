<?php

$number = 2;
$string = "rumi";
$float = 5.6;
$boolean = false;
$array = [$string, $float, $number, $boolean];

class FifthA {
  public $name;
  public $surname;
  public $gender;
  public $age;
  public $iq;
  public $isExcellent;

  public function __construct($name, $surname, $gender, $age, $iq, $isExcellent)
  {
    $this->name = $name;
    $this->surname = $surname;
    $this->gender = $gender;
    $this->age = $age;
    $this->iq = $iq;
    $this->isExcellent = $isExcellent;
  }
}

$friend1 = new FifthA("Ilay", "Kurbanov", "male", 10.5, 201, false);
$friend2 = new FifthA("Aibar", "Daleytuly", "male", 10, 199, true);
$friend3 = new FifthA("Ergali", "Zhumabekov", "female", 10, 2500, false);
$friend4 = new FifthA("Insar", "Bolat", "female", 10, 10, false);

$friends = [$friend1, $friend2, $friend3, $friend4];

// foreach ($friends as $friend) {
//   echo $friend->name . " ";
// }

foreach ($friends as $friend) 
{
  if ($friend->iq > 10) {
    echo ($friend->name . " " . $friend->surname . " "); 
  }
}
