<?php

class Dog{

    private $name;
    private $age;
    private $breed;


    public function __construct($name, $age, $breed)
    {
        $this->name=$name;
        $this->age=$age;
        $this->breed=$breed;
    }

    public function intro()
    {
        echo "nom: $this->name - Age: $this->age - Race: $this->breed";
    }
}

$dog= new Dog('Pam', 15, 'Yorkshire');
$dog2= new Dog('mina', 5, 'Yorkshire');
$dog3= new Dog('hok', 12, 'Jack Russell');


$dog->intro();
echo "<br>";
$dog2->intro();
echo "<br>";
$dog3->intro();
echo "<br>";