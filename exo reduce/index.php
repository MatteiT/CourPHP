<?php

include "data.php"; 

$updatestudent = array_map(function($person){
    $person["role"]= "student";
    return $person;
}
, $student);

echo "<pre>";
print_r($updatestudent);
echo "<pre>";

$highscore = array_filter($student, function($person)
{
    return $person["score"] > 80;
}
);
echo "<pre>";
print_r($highscore);
echo "<pre>";

$scoretotal = array_reduce($student, function($acc, $curritem){
echo "score : {$curritem["score"]} <br>";
$acc += $curritem["score"];
return $acc;
}, 0);
echo $scoretotal;

echo "<br>";
$count = count($student);
$averagescore = $scoretotal / $count;    
echo $averagescore;
echo "<br>";

echo "<br>";
$survey = array_reduce($student, function($acc, $curritem2){
    print_r($curritem2["favoriteSubject"]);
    $favoriteSubject= $curritem2["favoriteSubject"];
if (array_key_exists($favoriteSubject, $acc)) {
    $acc[$favoriteSubject] += 1;
}else {
    $acc[$favoriteSubject] = 1;
} 
return $acc;},
[]);


echo "<br>";
echo "<pre>";
var_dump($survey);
echo "<pre>";