<?php

//* Héritage en POO - Lorsqu'une classe dérive d'une autre classe.

//* La classe enfant héritera de toutes les propriétés et méthodes publiques et protégées de la classe parent. De plus, il peut avoir ses propres propriétés et méthodes.

//* Une classe héritée est définie à l'aide du mot- extends clé.

class Fruit{

    public $name;
    public $color;
    public $weight;

     public function __construct($name, $color, $weight)
    {
        $this->name = $name;
        $this->color = $color;
        $this->weight = $weight;
    }


    public function intro()
    {
            echo "le fruit est un(e) $this->name, sa couleur est $this->color et son poids est de $this->weight grammes.";
    }

}

class Strawberry extends Fruit{

    public function message()
    {
        echo "je suis un fruit ou  une baie ?";
    }

}

//* La classe Strawberry est héritée de la classe Fruit.

//* Cela signifie que la classe Strawberry peut utiliser les propriétés publiques $name et $color ainsi que les méthodes publiques __construct() et intro() de la classe Fruit en raison de l'héritage.

//* La classe Strawberry possède également sa propre méthode : message().

$strawberry = new Strawberry("fraise", "rouge", 50);
$strawberry->message();
echo"<br>";
echo $strawberry->intro();