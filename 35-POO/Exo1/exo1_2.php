<?php

class Person{

    private $height;
    private $weight;
    private $age;


    public function __construct($height, $weight, $age)
    {
        $this->height=$height;
        $this->weight=$weight;
        $this->age=$age;

    }

    public function imc()
    {
        return $this->weight /($this->height**2);
    }

    public function interpretation()
    {
        if((self::imc())<=18.5){
            return "Vous êtes en insuffisance pondérale !";
        }elseif((self::imc())>=30){
            return "Vous êtes en surcharge pondérale !";
        }else{
        return "Vous êtes ok !";
        }
    }

}

$person1= new Person(1.56, 93, 20);
echo "<br>";
echo $person1->imc();
echo "<br>";
echo $person1->interpretation();
echo "<br>";

echo "<br>";
$person2= new Person(2.12, 62, 20);
echo $person2->imc();
echo "<br>";
echo $person2->interpretation();