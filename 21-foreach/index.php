<?php
//* forEach
//* ne retourne pas un nouvel array

$people = [
  ["name" => 'bob', "age" => 20, "job" => 'developpeur'],
  ["name" => 'peter', "age" => 25, "job" => 'designer'],
  ["name" => 'susy', "age" => 30, "job" => 'la boss']
];

// foreach ($people as $item) {
//   echo strtoupper($item["job"]) .  "<br>";
// }

function showPerson($person)
{
  // var_dump($person);
  echo strtoupper($person["job"]) . "<br>";
}

foreach ($people as  $item) {
  showPerson($item);
}
