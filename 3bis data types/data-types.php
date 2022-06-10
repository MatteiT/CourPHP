<?php
//types de données
// Primitif - string number boolean null
//objet arrays functions objects

//gettype opérateur qui retourne le type d'une variable ou valeur

// echo gettype("hello");

//string 
$text = "some text";

//nombre 
$interger = 45;
$decimal = 4.256;

//boolean true / false 
$value = true;
$value2 = false;

//null 
$result = null;

echo gettype($result);
echo "<br>";
echo gettype($interger);
echo "<br>";
echo gettype($decimal);
echo "<br>";
echo gettype($value);
echo "<br>";