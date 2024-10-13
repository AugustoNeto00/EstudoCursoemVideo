<?php

class Fighter {
    private $name;
    private $nacionality;
    private $age;
    private $height;
    private $weigth;
    private $category;
    private $wins;
    private $losses;
    private $draws;
    public function __construct($name, $nacionality, $age, $height, $weigth ,$category, $wins, $losses, $draws){
        $this->name = $name;
        $this->nacionality = $nacionality;
        $this->age = $age;
        $this->height = $height;
        $this->weigth = $weigth;
        $this->category = $category;
        $this->wins = $wins;
        $this->losses = $losses;
        $this->draws = $draws;
    }
    public function getName(){
        return $this->name;
    }
    public function getNacionality(){
        return $this->nacionality;
    }
    public function getAge(){
        return $this->age;
    }
    public function getHeight(){
        return $this->height;
    }
    public function getWeigth(){
        return $this->weigth;
    }
    public function getCategory(){
        return $this->category;
    }
    public function getWins(){
        return $this->wins;
    }
    public function getLosses(){
        return $this->losses;
    }
    public function getDraws(){
        return $this->draws;
    }
    public function showOff(){

    }
}
$pretin = new Fighter("Henrique BundaMagra", "Brasil", 21, 1.65, "65,5","Leve", 1, 2, 2);
$pretin->getWins();