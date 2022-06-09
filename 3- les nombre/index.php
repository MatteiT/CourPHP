<?php 

$number = 34;
$niumber = " c'est cool";
$number2 = 2.456;
$number3 = "2.456";

$add = $number + $number2;
$sub = $number - $number2;
$mult = $number * $number2;
$div = $number / $number2;
$mod = $number % $number2;
$pow = $number ** $number2;

echo "$sub <br>";
echo "$mult <br>";
echo "$div <br>";
echo "$mod <br>";
echo "$pow <br>";

$number = 40;
//$number = $number + 5
$number += 5;
$number += 5;
$number += 5;
$number += 5;
$number += 5;
$number += 5;

echo $number;