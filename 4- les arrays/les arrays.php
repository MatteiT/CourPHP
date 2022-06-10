<?php
// arrays = Tableau permet de stocker plusieurs variables

$friend1 = "anna" ;
$friend2 = "peter";
$friend3 = "tom";
$friend4 = "susy";

$friends = array("anna", "peter", "tom", "susy", 42, null );
$friends = ["anna", "peter", "tom", "susy", 42, null ];

echo "<pre>";
print_r($friends);
// var_dump($friends);
echo "</pre>";

echo "$friends[1] <br>";

$bestfriend = $friends[2];

$friends[4] = "anna";
echo "<pre>";
print_r($friends);
echo "</pre>";
echo "$friends[4] <br>";

//compter les nombres dans les tableaux
echo count($friends);

