<!--
<?php
if (isset($_POST["submit"])){
$username= $_POST["username"];
    $password=$_POST["password"];
    echo $username;
}

$connection= mysqli_connect('localhost','root','','testing');

$query= "INSERT INTO `table` (`id`, `username`, `password`) VALUES (NULL, '$username', '$password')";

$result= mysqli_query($connection, $query);

if (!$result){
echo 'successful';
};

?>









<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>
    
    <div class="container">
        
        <div class="col-xm-6">
        
        <form action="example.php" method="post">
        <div class="form-group">
        <label for="username">username</label>
        <input type="text" name="username" class="form-control">
        </div>
                <div class="form-group">
              <label for="password">password</label>
              <input type="password" name="password" class="form-control">
                 </div>
    <div>
        <input class="btn btn-primary"  type="submit" name="submit" value="Submit">
        
    </div>
       
       
       
       </form>
      </div>
    </div>
</body>
</html>-->
