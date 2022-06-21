<?php

// filter
// retroune un nouvel array
// peut manipuler la taille d'un array
// retours basés sur la condition

$people = [
  ["name" => 'bob', "age" => 20, "job" => 'developpeur'],
  ["name" => 'peter', "age" => 25, "job" => 'designer'],
  ["name" => 'susy', "age" => 30, "job" => 'la boss'],
  ["name" => 'anna', "age" => 35, "job" => 'la boss'],
];

$youngpeople = array_filter($people, function($person)
{
    return $person["age"] <= 25;
}
);

echo "<pre>";
print_r($youngpeople);
echo "<pre>";

$developpers = array_filter($people, function($person)
{
    return $person["job"] === "developper sénior";
}
);

echo "<pre>";
print_r($developpers);
echo "<pre>";