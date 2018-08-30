<?php 
require ('lock.php');
require ('chest.php');

$chest = new Chest(new Lock);
$chest->close();
// $chest->open();