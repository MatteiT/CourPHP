<?php

$person1 = [
    "name" => "bob",
    "age" => 20,
    "status" => "résident",
];
$person2 = [
    "name" => "tom",
    "age" => 88,
    "status" => "touriste",
];

if($person1["age"] >= 18 && $person1["status"] === "résident"){
    echo "felicitation {$person1["name"]} vous pouvez voter! <br> ";
}else {
    echo "vous ne pouvez pas voter {$person1["name"]} ! <br>";
};

if($person2["age"] >= 18 && $person2["status"] === "résident"){
    echo "felicitation {$person2["name"]} vous pouvez voter! <br> ";
}else {
    echo "vous ne pouvez pas voter {$person2["name"]} ! <br>";
};