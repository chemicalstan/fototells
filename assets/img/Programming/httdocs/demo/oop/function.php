<?php
function class_exist($class){
	if (class_exists($class)){
		echo 'Class exists' . '<br>';
	}else{
		echo "This class doesn't exist" . '<br>';
	}

}

function method_exist($class, $method){
	if (method_exists($class, $method)){
		echo 'Method exists' . '<br>';
	}else{
		echo "This Method doesn't exist" . '<br>';
	}
}



// class people {
	
// 	public $name;
// 	public $age;

// public function __construct($age, $name){
// 	$this->name = $name;
// 	$this->age = $age;
// }
// 	public function sentence(){
// 		echo $this->name . ' Is ' . $this->age . ' years old.';
// 	}
// }

// $people = new people(20, 'Ghosty');

// $people->sentence();
