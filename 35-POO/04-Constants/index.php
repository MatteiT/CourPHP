<?php 
// Les constantes ne peuvent pas être modifies une fous déclarées.

class Goodbye{

    const LEAVING_MESSAGE = "Merci d'avoir visité w3.schools.com";

    public function byebye(){

        echo self::LEAVING_MESSAGE;
    }
}

echo Goodbye::LEAVING_MESSAGE;

$goobye = new Goodbye();
$goodbye->byebye;