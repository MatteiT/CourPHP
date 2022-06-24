<?php
//* array_map
//* retourne un nouvel array
//* ne change pas la taille de l'array originel
//* utilise les valeurs originelles de l'array pour en faire un nouveau

$people = [
  ["name" => 'bob', "age" => 20, "job" => 'developpeur'],
  ["name" => 'peter', "age" => 25, "job" => 'designer'],
  ["name" => 'susy', "age" => 30, "job" => 'la boss'],
  ["name" => 'anna', "age" => 35, "job" => 'la boss'],
];

$ages = array_map(function ($person) {
  // return $person["age"];
  return $person["age"] + 20;
}, $people);

echo "<pre>";
print_r($ages);
echo "</pre>";

$newPeoples = array_map(function ($person) {
  return [
    "firstName" => strtoupper($person["name"]),
    "oldAge" => $person["age"] + 20
  ];
}, $people);

echo "<pre>";
print_r($newPeoples);
echo "</pre>";

$names = array_map(function ($person) {
  return "<h1>{$person["name"]}</h1>";
}, $people);

foreach ($names as $name) {
  echo $name;
}
