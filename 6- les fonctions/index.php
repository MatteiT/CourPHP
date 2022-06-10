<?php
//les fonctions déclare et invoque

echo "hello Bob <br>";
echo "hello John <br>";
echo "hello susy <br>";


//les fonctions evitent la redondance de code 
function hello(){
echo "hello Bob <br>";
echo "hello John <br>";
echo "hello susy <br>";
}

echo "<br>";
// hello();
echo "<br>";

// hello();
echo "<br>";

// hello();
echo "<br>";

// hello();
echo "<br>";

//paramètre /argument
// ce sont des placeholders / des variables locals
function greet($name){
    echo "hello $name";
}

greet("bob");
echo "<br>";
greet("susy");
echo "<br>";
greet("tom");
echo "<br>";
greet("X2");
echo "<br>";

//on peut passer des variables 
$bob = "bob";
$anna = "anna";
$susy = "susy";

echo "<br>";
greet($bob);
echo "<br>";
echo "<br>";
// on peut placer plusieurs paramètre 
//on peut pas déclarer deux fois une même fonction

function greet2($name, $second){
    echo "$second <br>";
    echo "hello $name";
}

greet2 ($anna, $bob);
echo "<br>";

function sum($num1, $num2)
{
    echo $num1 + $num2;
}
sum(4, 7);
echo "<br>";

