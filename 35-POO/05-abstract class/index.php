<?php
//* Les classes et méthodes abstraites sont lorsque la classe parent a une méthode nommée, mais a besoin de sa ou ses classes enfant pour remplir les tâches.

//* Une classe abstraite est une classe qui contient au moins une méthode abstraite. Une méthode abstraite est une méthode déclarée mais non implémentée dans le code.

//* mot-clef - abstract

abstract class Car
{

    public $name;

    public function __construct($name)
    {
        $this->name = $name;
    }

    abstract public function intro() ;
}

// class enfants

class Audi extends Car
{
        public function intro()
        {
            return "Choisir la deutch qualitat! Je suis une $this->name";
        }
}
class Volvo extends Car
{
        public function intro()
        {
            return "Choisir la suédoise! Je suis une $this->name";
        }
}
class Citroen extends Car
{
        public function intro()
        {
            return "Choisir la française! Je suis une $this->name";
        }
}

// creer des objects depuis les classes enfants

$audi = new Audi("Audi");
echo $audi->intro();
echo "<br>";

$volvo = new Volvo("Volvo");
echo $volvo->intro();
echo "<br>";

$citroen = new Citroen("Citroen");
echo $citroen->intro();
echo "<br>";

// exemple avec des arguments

abstract class ParentCLass{

    abstract protected function preFixName($name);
}

class ChildClass extends ParentClass{
    public function preFixName($name, $separator=".", $greet = "Cher"){
        if($name === "John Doe"){
            $prefix = "Mr";
        }elseif($name === "Jane Doe"){
            $prefix="Mme";
            $greet = "Chère";
        }else{
            $prefix="";
    }
    return "$greet $prefix$separator $name";
    }
}

$class = new ChildClass();
echo $class->preFixName("John Doe");
echo"<br>";
echo $class->preFixName("Jane Doe");
