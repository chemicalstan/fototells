
<?php

print_r($_GET);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
     
     
     <?php

$id= 20;
$button= "click here";
    

    ?>
    
     
      <a href="practical_9.php?id=<?php echo $id ?>"><?php echo $button . '<br>'?></a> 
</body>
</html>


<!--cookie-->
<?php

$name= 'ghost_cookie';
$value = "fuck eldrick";
$expiration = time() + (60*60*24*7);

setcookie($name,$value,$expiration);

if (isset($_COOKIE['ghost_cookie'])){
echo $_COOKIE['ghost_cookie'] . '<br>';

}


?>
<!--session-->
<?php session_start();

$_SESSION['greeting']= "what's up status";

echo $_SESSION['greeting'] . '<br>';


?>