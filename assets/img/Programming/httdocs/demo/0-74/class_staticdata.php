<?php

class Car{

static $name = 'suleiman';
static $wheels= 10;
    static function movewheels(){
        echo Car::$name;
    // Car::$wheels=14;
    }
}

$car = new Car();

// $car->movewheels();
$car->movewheels();

// echo Car::$wheels . '<br>';

//  Car::movewheels();

// echo Car::$wheels . '<br>';

?>
