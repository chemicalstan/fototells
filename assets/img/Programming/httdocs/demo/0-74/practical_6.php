
<?php

//if (isset ($_POST['submit'])){
$username= $_POST['username'];
    echo $username;
//}


?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
     
  <form action="practical_6.php" method="post">
      <input type="text" placeholder="enter username." name="username">
      <br>
      <input type="submit" name="submit">
  </form>  
    
</body>
</html>