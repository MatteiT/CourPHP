<?php
// opérateur logiques
// && = AND , OR = ||

$name = "john";
$age = 24;

if ($name === "bob"){
    echo "salut cher utilisateur <br>";
}else {
    echo "mauvaise valeur <br>";
}

if ($name === "bob" || $age ===24) {
echo "salut cher utilisateur <br>";
}else {
echo "mauvaise valeur   <br>";
}
if ($name === "bob" && $age ===24) {
echo "salut cher utilisateur <br>";
}else {
echo "mauvaise valeur   <br>";
}
