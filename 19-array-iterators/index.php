<?php

// itérateur d'array 
// foreach array_map array_filter array_reduce
// itère dans un array 
// accepte la fonction callback en argument, le callback à chaque itération 

$numbers = [0, 1, 2, 3, 4];

// affiche les nombres
for($i=0; $i < count($numbers); $i++){
    echo "$numbers[$i] <br>";
}
// le foreach ne retounre pas un nouveau tableau
$people = [
    ["names" => "bob", "age" => 20, "job" => "developpeur" ],
    ["names" => "peter", "age" => 25, "job" => "designer" ],
    ["names" => "susy", "age" => 30, "job" => "bossman" ],
];

function showperson($person){
    echo strtoupper($person["job"]) . "<br>";
};

foreach($people as $items){
    showperson($items);
};

