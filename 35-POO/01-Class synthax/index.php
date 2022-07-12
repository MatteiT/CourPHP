<?php
//* Les bases de la POO

//* On utilise les classes pour représenter des entités comme dans la vraie vie. C'est un modèle de données

//* Les valeurs peuvent être des strings, numbers, booleans, arrrays et functions, dans ce cas on l'appelera une méthode

//* Une convention commune est de mettre la première lettre de notre classe en majuscule

class Account{

    //attributs

    var $name;
    var $balance;
    var $bank = "BNP";

    function __construct($name, $initialbalance)
    {
        $this->name=$name;
        $this->balance=$initialbalance;
    }

    function deposit($amount)
    {
        $this->balance += $amount;
        echo "Bonjour $this->name, votre solde est de $this->balance";
    }


}

$john = new Account("john", 0);


$john->name= "john";

echo "<pre>";
print_r($john);
echo "</pre>";

$bob = new Account("bob", 700);

echo "<pre>";
print_r($bob);
echo "</pre>";

$bob->deposit(100);

echo "<pre>";
print_r($bob);
echo "</pre>";
