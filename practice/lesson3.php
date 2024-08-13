<?php

$array = [0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10];
$sum_nechet = 0;
$sum_chet = 0;
$sum = 0;

foreach ($array as $number) {
  $sum = $sum + $number;
}

echo $sum . " - сумма всех чисел";
