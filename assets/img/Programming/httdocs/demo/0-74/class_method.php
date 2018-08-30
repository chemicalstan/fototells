<?php

class Car{

        function movewheels(){
        echo "the wheels are moving";
        }

}

if(method_exists('Car','movewheels')){

echo 'the method exists';
} else {echo 'this method deosnt exist';}

?>