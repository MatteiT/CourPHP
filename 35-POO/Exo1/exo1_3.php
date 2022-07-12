<?php
class triangle{

    private $height;
    private $width;
    
public function __construct($height, $width)
    {
        $this->height=$height;
        $this->width=$width;
    }

    public function perimeter()
    {
        return ($this->height)+($this->width);
    }

    public function area()
    {
        return ($this->height)*($this->width);
    }

    public function isSquare()
    {
        if(($this->height)===($this->width)){
            return "IL s'agit  d'un carré ";
        }
    }
    public function displayRectangle()
    {
        if(self::isSquare()){
        return "longueur:  {$this->height} - largeur:  {$this->width} - Périmètre : {$this->perimeter()} - Aire: {$this->area()}  -  {$this->isSquare()} ";
        }else{
        return "Le périmètre est {$this->perimeter()}  <br> La surface est {$this->area()} ";
    }
    }

}

$rectangle= new triangle(5, 5);
$rectangle2= new triangle(4, 5);
echo $rectangle->displayRectangle();
echo "<br>";
echo $rectangle2->displayRectangle();
echo "<br>";