<?php

//* reduce
//* réduit l'array à une simple valeur - nombre, array
//* itère aussi avec une fonction callback :
//* 1er paramètre ('acc') - total de tous les calculs
//* 2ème paramètre ('curr') - itération/valeur actuelle

$people = [
  ["name" => 'bob', "age" => 20, "job" => 'développeur', "salary" => 200],
  ["name" => 'peter', "age" => 25, "job" => 'designer', "salary" => 30],
  ["name" => 'susy', "age" => 30, "job" => 'la boss', "salary" => 500],
  ["name" => 'anna', "age" => 35, "job" => 'la boss', "salary" => 500],
];

$total = array_reduce($people, function($acc, $curritem){
// echo "total: $acc <br>";
// echo "<pre>";
// print_r($curritem);
// echo "</pre>";
echo "salaire : {$curritem["salary"]} <br>";
$acc += $curritem["salary"];
return $acc;
}, 0);

echo $total;