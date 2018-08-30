<?php
require_once("index.php");

// From users

/*class Instance == Object*/ $user = new User();
$user->setUsername('Gnarly');
echo  $user->getUsername().'<br>';

// tester
method_exist('User', 'setUsername');

// From Solomon
$object = new Solomon;
echo $object->wheels . '<br>';

// from method in class solomon
$object->Move_wheels();
echo $object->wheels . '<br>';

// From the extended class

$name = new Emmanuel();
echo $name->wheels = 6 . '<br>';





















?>