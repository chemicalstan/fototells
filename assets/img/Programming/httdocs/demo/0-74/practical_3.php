<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
     
<!--  solution.  -->
   
   <?php
//step 1

if(3>4){
    echo '3 is greater than 4';
}

elseif(2!=2){
echo '2 is not equal to 2';
}
else {echo 'i love php.' .' <br>';}

//step 2

for($age=0; $age <=10; $age++ ){
    
    echo $age . '<br>';}
     
//    step 3
    
    $number=3;
    switch($number){
    
        case 40:
        echo 'user 40 found.';
            break; 
        case 10:
        echo 'user 10 found.';
            break;
        case 20:
        echo 'user 20 found.';
            break; 
        case 30:
        echo 'user 30 found.';
            break;
        case 3:
        echo 'user 3 found.';
            break;
    
    default: 
        echo 'user not found.';
    break;
    }
    
    
    


    
    
    
    ?>
    
</body>
</html>