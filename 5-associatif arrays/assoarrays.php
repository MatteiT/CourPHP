<?php

//tableau asssociatif paire clef/valeur
$person = [
    "name" => "john",
    "lastname" => "doe",
    "age" => 42,
    "education" => false,
    "siblings" => ["anna", "susy", "peter"],
];

echo "<pre>";
print_r($person);
echo "</pre>";

//on n'utilise pas l'index pour accéder à la valeur dans un tableau associatif mais une clef
// les clefs doivent être uniques mais pas les valeurs
echo $person["name"];
echo "<br>";
echo $person["siblings"][2];
echo "<br>";

$age = $person["age"];
echo "$age <br>";
echo "<br>";

$person["name"] = "bob";
echo $person["name"];
echo "<br>";

echo 'bonjour ' . $person["name"];
echo "<br>";
