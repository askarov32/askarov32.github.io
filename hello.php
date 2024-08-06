<?php

// integer

$a = 10;
$b = 20;

$sum = $a + $b;

echo "$sum\n";
echo "$a\n";


// float

$c = 10.5;
$d = 0.5;
$diff = $c - $d;
echo "$diff\n";

// string

$string1 = "Hello, World!";
$string2 = "Good Morning, Sir!";

echo ($string1 . " " . $string2) . " ";

// boolean

$bool = ($b < $a);

echo ($bool ? 'тру' : 'фолс') . " ";

// array

$array = array(1, 2, 3, 4, 5, 6, "Ergali", "Rumi", true, false, 3.5);

echo $array[6];


// class

class Prod {
  public $id;
  public $name;
  public $image;
  public $description;
  public $cost;

  public function __construct($id, $name, $image, $description, $cost) {
    $this->id = $id;
    $this->name = $name;
    $this->image = $image;
    $this->description = $description;
    $this->cost = $cost;
  } 
}

$product1 = new Prod(1, "Ergali", "https://img.freepik.com/free-photo/forest-landscape_71767-127.jpg?size=626&ext=jpg&ga=GA1.1.2008272138.1722816000&semt=ais_hybrid", "sdfsdf", "100000");

$cost = $product1->cost;

echo " " . $cost . " "; 
echo ($cost / 2);