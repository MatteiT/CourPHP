<?php 


$names = ["john", "bob", "barry", "olga", "ben", 2 , 3, 4];

// count
echo count($names);
echo "<br>";
echo end($names);
echo "<br>";

// array merge

$lastnames = ["poivron", "oignons", "banane"];

$allnames = array_merge($names, $lastnames);
echo "<pre>";
print_r($allnames);
echo "</pre>";


// array reverse
echo "<pre>";
print_r(array_reverse($allnames));
echo "</pre>";

// array unshift ajout un element au début
// array_unshift($allnames, "susy");
// echo "<pre>";
// print_r($allnames);
// echo "</pre>";

// array_shift supprime le premier element
// array_shift($allnames);
// echo "<pre>";
// print_r($allnames);
// echo "</pre>";

array_push($allnames, "susy"); 
// ajoute a la fin 

array_pop($allnames);
// supprime le dernier element
echo "<pre>";
print_r($allnames);
echo "</pre>";

$specific_names = array_slice($allnames, 0, 5);
echo "<pre>";
print_r($specific_names);
echo "</pre>";