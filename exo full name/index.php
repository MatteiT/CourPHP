<?php 

// array & for loop 

$names = ["anna", "susy", "bob"];
$lastnames = "shakeandbake";
$newarray = [];

foreach($names as $value){
array_push( $newarray, "$value $lastnames" );
echo "<pre>";
print_r($newarray);
echo "</pre>";
}
