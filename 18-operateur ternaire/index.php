<?php 

// opérateur unaire

$text = "du text";
echo gettype($text); //opérande
echo "<br>";

// opérateur binaire 

$number = 3 ;
$number2 = 2 + 5; 

// operatur ternaire 
// condition ? excute di vrai et excute si faut  
$value = 2>1 ;
if($value){
    echo" la valeur est vrai ";
}else {
    echo "la valeur est fausse";
}
echo "<br>";
$value = 1<0;
$value ? print "la valeur est vrai" : print "la valeur est fausse";
// print retourne une valeur 