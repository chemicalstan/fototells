<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
     
    <?php
    
function values($value1, $value2){

    $sum = $value1 + $value2;
return $sum; 

}
    
 $result= values(344,443);
 echo $result . '<br>'; 

     $result= values(344,$result);
 echo $result;
    ?>    
    
</body>
</html>