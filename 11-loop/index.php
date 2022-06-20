<?php 

// les boucles 
// repete un bloc de code tant que la condition est vraie

// boucle while = tant que
$amount = 10;

while($amount > 0){
echo " j'ai $amount euros et jvais au magasin <br>";
$amount--;
}

echo "<br>";

// do while 
// execute le code d'abord et verifie la condition 

$money = 0;
do{
    echo "Tu as $money euros <br>";
    $money++;
}while ($money < 10);

// boucle for (pour)

echo "<br>";

for($i = 0; $i < 10; $i++){
    echo "le nombre est : $i  <br>";
}

echo "<br>";
