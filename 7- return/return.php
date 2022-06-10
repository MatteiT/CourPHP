<?php

//par défaut une fonction php retourne null par défaut
// function foo(){

// }
// var_dump(foo());

$wallheight = 80;

function calculate($value){
$newValue = $value * 2.54;

// echo "la valeur en cm est : $newValue cm";
echo " la valeur en cm est : $newValue cm ";
return $newValue;
}

$height = calculate($wallheight);
echo "<br>";
$width = calculate(100);
echo "<br>";

$dimensions = [$width, $height];
echo "<pre>";
print_r($dimensions);
echo "</pre>";
