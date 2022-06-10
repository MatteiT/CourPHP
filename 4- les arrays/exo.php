<?php

$fruit1 = "pomme";
$fruit2 = "poire";
$fruit3 = "fraise";
$fruit4 = "banane";
$fruit5 = "raisin";

$fruits = ["pomme", "poire", "fraise","banane","raisin", 42 ];
$topfruit = $fruits[3];
$fruits[4] = "orange";


echo "$fruits[1] <br>";
echo "<pre>";
print_r($fruits);
echo "</pre> <br>";
echo " le meilleur fruit est $topfruit <br> ";
