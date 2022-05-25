<?php

class Fruit{
    private $name;
    private $weight;
    private $color;

    public function __construct($name, $weight, $color){
        $this->name = $name;
        $this->color = $color;
        $this->weight = $weight;
    }

    public function eatFruit(){
        return "Fruit is eaten\n";
    }

    public function getInfo(){
        return "Name: $this->name\nWeight: $this->weight\nColor: $this->color\n" ;
    }

}


