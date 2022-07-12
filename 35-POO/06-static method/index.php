<?php

//* Les méthodes statiques peuvent être appelées directement - sans créer d'abord une instance de la classe.

//* mot-clef - static

//* Pour accéder à une méthode statique, utilisez le nom de la classe, les doubles-points (::) et le nom de la méthode


class Greeting{

    public static function welcome(){
        echo "Hello World!";
    }

    public function __construct()
    {
        self::welcome();
    }
}


Greeting::welcome();
echo"<br>";
new Greeting();

class Domain
{
    protected static function getWebsiteNames()
    {
        return "W3Schools.com";
    }
}

class DomainW3 extends Domain
{
    public $websiteName;

    public function __construct()
    {
        $this->websiteName= parent::getWebsiteNames();
    }
}

$domaineW3 = new DomainW3();
echo "<br>";
echo $domaineW3->websiteName;