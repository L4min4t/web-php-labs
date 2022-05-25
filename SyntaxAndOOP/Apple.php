<?php
require_once 'Fruit.php';

class Apple extends Fruit
{
    private static $instance;
    private $variety;

    private function __construct($name, $weight, $color, $variety){
        parent::__construct($name, $weight, $color);
        $this->variety = $variety;
    }

    public static function getInstanse($name, $weight, $color, $variety){
        if(self::$instance === null) {
            self::$instance = new self($name, $weight, $color, $variety);
        }
        return self::$instance;
    }

    public function eatFruit(){
        return "Apple is eaten\n";
    }

    public function getInfo(){
        return parent::getInfo() . "Variety: $this->variety\n" ;
    }
}