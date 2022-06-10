<?php 

$score1 = 10 ;
$score2 = 30;
$score3 = 50;

$scoretotal = $score1 + $score2 + $score3;
echo "le total est  $scoretotal <br>";
$scoremoy = $scoretotal / 3;
echo "le score moyen $scoremoy <br>";

$plates = 20;
$people = 7;
$reste = $plates % $people;
$reste += 1;
echo "$reste <br>";
$message = "Il y a $reste plats disponibles";
echo "$message <br>";
