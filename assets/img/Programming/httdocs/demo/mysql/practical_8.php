<?php

$container = "ghosty123";


$hashFormat ="$2y$10$";
$salt = "chemicalstanencryption";
$hashF_and_salt =$hashFormat . $salt;

$container= crypt($container,$hashF_and_salt);

echo $container;

?>