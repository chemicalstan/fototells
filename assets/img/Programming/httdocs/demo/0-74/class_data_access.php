<?php

class Car{

public $wheels= 10;
    protected $door = 4;
    private $engine = 1;
    
    function movewheels(){
    echo  $this->engine;
    }
        }


$truck = new Car();

echo $truck-> wheels. '<br>';
echo  $truck-> movewheels(). '<br>';
//echo $truck-> door;

class Book extends Car {

function movewheels(){
        echo  $this->door;
   
}
}



$books = new Book;
  echo  $books-> movewheels(). '<br>';








?>


<br>