
<?php

class Dog {

    var $eyecolors= 'eyecolors: brown';
    var $nose = 'nose: 1';
    var $furcolor = 'furcolor: yellow';
    function ShowAll(){
    
        echo $this-> eyecolors . '<br>';
        echo $this-> nose . '<br>';
        echo $this-> furcolor . '<br>';
        
    
    }
    
}

$pitbull = new Dog;

echo "<h1>pitbull:</h1>";

 $pitbull->ShowAll();






// if (class_exists('Dog')){
// echo "great";
// }
?>




