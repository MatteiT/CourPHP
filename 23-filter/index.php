<?php
//* array_filter
//* retourne un nouvel array
//* peut manipuler la taille d'un array
//* retours basés sur la condition

$people = [
  ["name" => 'bob', "age" => 20, "job" => 'développeur'],
  ["name" => 'peter', "age" => 25, "job" => 'designer'],
  ["name" => 'susy', "age" => 30, "job" => 'la boss'],
  ["name" => 'anna', "age" => 35, "job" => 'la boss'],
];

$youngPeople = array_filter($people, function ($person) {
  return $person["age"] <= 25;
});

$developers = array_filter($people, function ($person) {
  // return $person["job"] === "développeur";
  return $person["job"] === "développeur sénior";
});

echo "<pre>";
print_r($youngPeople);
echo "</pre>";

echo "<pre>";
print_r($developers);
echo "</pre>";
