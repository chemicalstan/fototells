<?php
require_once("./function.php");



class User {

   private $username = "";
   protected $password = "";

   public function setUsername($username){
       $this->username = $username;
   }
   
   public function getUsername(){
       return $this->username;
   }

}


class Solomon{

    /*****   A property must have the key word: 'var','protected','public' or 'private'.   *****/
    
    var $wheels = 4;
    var $doors = 4;
    var $engine = 1;
    
    /*****  Method. It must have the keyword 'function'  *****/
    function Move_wheels(){
    $this->wheels = 12; 
        
    }
}

$name = new Solomon();
$name->Move_wheels();
echo $name->wheels;
//CLASS INHERITANCE
//using the keyword 'Extends'.

class Emmanuel extends Solomon{
//    var name
    function __construct (){
        echo $name = 'bola' . '<br>';
    }
}


















?>