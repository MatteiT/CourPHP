<?php

//  map 
// retourne un nouvel array
// ne change pas la taille de l'array originel
// utilise les valeurs originelles de l'array pour faire un nouveau

$people = [
  ["name" => 'bob', "age" => 20, "job" => 'developpeur'],
  ["name" => 'peter', "age" => 25, "job" => 'designer'],
  ["name" => 'susy', "age" => 30, "job" => 'la boss'],
  ["name" => 'anna', "age" => 35, "job" => 'la boss'],
];

$ages = array_map(function($person){
   return $person["age"];
}, $people);

echo "<pre>";
print_r($ages);
echo "<pre>";

$newpeoples = array_map(function($person){
    return[
        "firstname"=> strtoupper($person["name"]), 
        "oldage" => $person["age"] +20
    ];
}, $people);

echo "<pre>";
print_r($newpeoples);
echo "<pre>";

$names = array_map(function($person){
    return "<h2>{$person["name"]}</h2>";
}, $people);

foreach ($names as $name){
    echo $name;
};