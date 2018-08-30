
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
$id=20;
$butten="click here now";

?>
     
     <a href="get.php?id=<?php echo $id;?>"><?php echo $butten;?></a>
     
     
</body>
</html>