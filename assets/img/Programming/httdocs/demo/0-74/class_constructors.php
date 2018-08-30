<?php

class Car{

    
    var $wheels= 10;
    var $door = 4;
    var $engine = 1;
    
        function movewheels(){
        
            $this->wheels = 6;
        }
    
    function __construct(){
    
   echo $this-> wheels = 456;
    }

}

$truck = new Car();

?>


<br>