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

$truck = new Car();
$mercendes = new Car();
//    change
echo $mercendes -> wheels=77 . '<br>';
//or
$mercendes -> door =55;

echo $mercendes -> door . '<br>';

 $mercendes ->movewheels();
echo $mercendes -> wheels. '<br>';


$truck->createdoors();

echo $truck->wheels;
    
?>


<br>