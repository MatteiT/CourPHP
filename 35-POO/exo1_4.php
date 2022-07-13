<?php
abstract class Véhicule{

    private static $matricule=0;
    private $year;
    private $model;
    private $price;


    public function __construct($model, $year, $price)
    {
        self::$matricule++;
        $this->year=$year;
        $this->model=$model;
        $this->price=$price;

    }
    public function getModel()
    {
        return $this->model;
    }
    public function getYear(){
        return $this->year;
    }
    public function getPrice(){
        return $this->price;
    }
    public function setModel($model)
    {
        $this->model= $model;
    }
    public function setYear($year){
        $this->year = $year;
    }
    public function setPrice($price){
        $this->price = $price;
    }
    abstract public function démarrer() ;
    abstract public function accelérer() ;

    public function __toString()
    {
        return "Le n° d'immatriculation= est  " . self::$matricule . "   Le modèle est {$this->model} l'année est {$this->year} et le prix est {$this->price}";
    }

}

class Voiture extends Véhicule{

    public function démarrer()
    {
        return "Elle démarre !!";
    }
    public function accelérer()
    {
        return "la voiture accélère vite ! Vroom !";
    }
}

class Camion extends Véhicule{

    public function démarrer()
    {
        return "je suis un camion je démarre !!";
    }
    public function accelérer()
    {
        return "le camion accélère vite  ! Vroom !";
    }
}

$voiture1 = new Voiture('honda', 2002, 15000);
echo $voiture1;
echo "<br>";
echo $voiture1->démarrer();
echo "<br>";
echo $voiture1->accelérer();
echo "<br>";
echo "<br>";
$voiture2 = new Voiture('toyota', 1999, 6000);
echo $voiture2;
echo "<br>";
echo "<br>";
$voiture3 = new Voiture('ford', 1970, 22000);
echo $voiture3;
echo "<br>";
echo "<br>";
$camion1 = new Camion('iveco', 2005, 80000);
echo $camion1;
echo "<br>";
echo $camion1->démarrer();
echo "<br>";
echo $camion1->accelérer();
echo "<br>";
$camion2 = new Camion('man', 1999, 60000);
echo "<br>";
echo $camion2;
echo "<br>";
