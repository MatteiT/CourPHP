<?php

//* Les propriétés et les méthodes peuvent avoir des modificateurs d'accès qui contrôlent l'endroit où elles sont accessibles.

//*  trois modificateurs d'accès

//* public - la propriété ou la méthode est accessible de partout - par défaut

//* protected - la propriété ou la méthode est accessible AU SEIN de la classe et par les classes dérivées de cette classe

//* private - la propriété ou la méthode est UNIQUEMENT accessible au sein de la classe

class Fruit{

    public $name;
    public $color;
    public $weight;

    // les getters et les setters servent à controler l'accès à nos données et leur conformité

    function setName($name)
    {
        $this->name = $name;
    }
    
    function setColor($color)
    {
        $this->color = $color;
    }

    function setWeight($weight)
    {
        $this->weight = $weight;
    }

    function getName()
    {
        return $this->name;
    }

    function getColor()
    {
        return $this->color;
    }

    function getWeight()
    {
        return $this->weight;
    }

}