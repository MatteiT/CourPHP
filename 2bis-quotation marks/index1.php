<?php

//"" ou ''
//chaine de caractère

$name = "john";
$name = 'john';
echo $name;

// string concatenation combine les chaines de caractères 
$name = "jonh";
$lastname = "doe";

echo "Salut ! ton nom est $name $lastname <br>";
echo "Salut ! ton nom est $name $lastname <br>";
echo "Salut ! ton nom est $name $lastname <br>";
echo "Salut ! ton nom est $name $lastname <br>";

$fullname = $name . ' ' . $lastname;
//$fullname = "$name $lastname";
echo $fullname;