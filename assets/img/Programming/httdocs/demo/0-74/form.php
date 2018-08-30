
<?php
//
//if(isset($_POST['submit'])){
//$password=$_POST['password'];
//$username=$_POST['username'];
////echo 'your pasword is :' . $password . '<br>';
////echo 'your username is :' . $username;
//
//    $maximum = 10;
//    $minimum=5;
//    if (strlen($username)<$minimum=5){
//    
//    echo 'this password is too short.';
//    }
//
//     if (strlen($username)>$maximum = 10){
//    
//    echo 'this password is too long.';
//    }
//}else {
//echo 'fuck';}


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
     
  <form action="external.php" method="post">
      
      <input type="text" placeholder="username" name="username"><br>
      <input type="password" placeholder="password" name="password"><br>
      <input type="submit" name="submit">
      
      
      
      
      
  </form>  
    
</body>
</html>