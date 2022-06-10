<?php

$car = [
    "model" => "toyota prius",
    "year" => "2014",
    "color" => ["red", "blue", "green", "gray", "black"],
    "hybrid" => true,

];
echo "<pre>";
print_r($car);
echo "</pre>";

echo $car["model"];
echo "<br>";
echo $car["color"][0];
echo "<br>";
