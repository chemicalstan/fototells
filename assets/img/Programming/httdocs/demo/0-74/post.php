
<?php
if(isset($_POST['submit'])){

echo $_POST['name'];
    
    
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
     
     
     <form action="post.php" method="post">
         
         <input type="text" name="name">
         <input type="submit" value="create" name="submit">
     </form>
     
</body>
</html>