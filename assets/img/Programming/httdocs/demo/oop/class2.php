<?php 

// NOTE:: In order to assign a variable to any other variable within the class, during instanciating (Creating an object), You must pass the parameter or arguments through the class to avoid error.
 
 // For the example below, to use a constructor that assigns value to a variable with in the class, we must pass the arguments while initializing an instance of the class i.e while using it as an object.

class Persons{
	public $name;
	public $age;
	public $class;
	public function __construct($name, $age){
	$this->name = $name;
	$this->age = $age;
}

	public function sentence($class){
	//	echo $this->class = $class;
		echo $this->name . " is " . $this->age . "  Years old." . "<br>";
	}
}
$person = new persons('John', 20);
$person->sentence(3);


// Class inheritance

class Bird {
	public $canFly;
	public $legCount;

	public function __construct($canFly, $legCount){

		$this->canFly = $canFly;
		$this->legCount = $legCount;
	}
	public function canFly(){
		return $this->canFly;
	}
	public function getLegCount(){
		return $this->legCount;
	}
}

class Pigeon extends Bird{

}


$pigeon = new Pigeon (true, 2);
echo $pigeon->getLegCount() . '<br>';

	if ($pigeon->canFly()){
		echo "can fly.";
	}




 ?>