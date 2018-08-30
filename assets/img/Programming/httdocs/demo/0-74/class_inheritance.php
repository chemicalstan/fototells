<?php

class Car{

    
    var $wheels= 10;
    var $door = 4;
    var $engine = 1;
    
        function movewheels(){
            $this->wheels = 6;
        }
    function createdoors (){
    $this-> wheels = 8;
    }
}

class Plane extends Car {

}    

$jet = new Plane;

echo $jet-> wheels . '<br>';

$jet -> movewheels();

echo $jet-> wheels;



?>


<br>