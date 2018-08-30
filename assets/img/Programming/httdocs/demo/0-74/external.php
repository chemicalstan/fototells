
<?php

if(isset($_POST['submit'])){
$password=$_POST['password'];
$username=$_POST['username'];
echo 'your pasword is :' . $password . '<br>';
echo 'your username is :' . $username;

    $names= array ('stanley','ghosty','fredrick','edwin','arinze');
    $maximum = 10;
    $minimum=5;
    if (strlen($username)<$minimum){
    
    echo 'this password is too short.' . '<br>';
    }

     if (strlen($username)>$maximum){
    
    echo 'this password is too long.' . '<br>';
    }
    
    


if(in_array($username,$names)){

    echo 'user found';}
//    else {echo 'not found';}
    
    elseif(!in_array($username,$names)){echo 'user not found';}

} 

?>
