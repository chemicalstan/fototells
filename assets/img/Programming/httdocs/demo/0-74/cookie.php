
<?php

$name= "somename";
$value = 100;
$expitation = time() + (60*60*7*24);

setcookie($name,$value,$expitation);


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
     
     <?php
     if(isset($_COOKIE['somename'])){
     
     $someone=$_COOKIE['somename'];
         echo $someone;
    
     } else {
     $someone = "";
     }
     ?>
</body>
</html>