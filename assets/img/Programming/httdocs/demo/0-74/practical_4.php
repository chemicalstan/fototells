<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
     
    <?php
//step 1

function calculation($value1 , $value2){

    $sum = $value2+$value1;
    return $sum;
}
   $result=calculation(122,323); 
   echo $result; 
echo '<br>';

//step 2

function parameter($x,$y){
$sum = $x+$y;
echo $sum;

}
    
 parameter (34,33);   
    
    
    
    
    ?>
    
</body>
</html>