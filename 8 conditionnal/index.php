<?php 
//   les conditionnelles 
// >< <= >= == === != !==
// $value = 2>1;

// if($value){
// echo "hello world";
// };

// $value3 = false;
// if($value2){
//     echo "hello people";
// }

// else
$value2 = 2>3;

if($value2) {
    echo "hello world";
}else {
    echo "hello people";
}
echo "<br>";

$num1 = 4; 
$num2 = 6;
$result = $num1 >= $num2;

if($num1 > $num2){
    echo " le premier nombre est plus grand que le second";
}else if ($result){
    echo " ils sont égaux";
}else {
    echo " le second nombre est plus grand que le premier";
}
echo "<br>";
// ! not operator
$value3 = false;

if(!$value3){
    echo "value est false ";
}

// == check seulement la valeur 
// === check la valeur et le type

// $num1 = 6; 
// $num2 = '6';

// $value4 = $num1 == $num2;
// $value5 = $num1 === $num2;

// var_dump($value4);
// var_dump($value5);

$num1 = 6; 
$num2 = 10;
$value4 = $num1 != $num2;
$value5 = $num1 !== $num2;
var_dump($value4);
var_dump($value5);