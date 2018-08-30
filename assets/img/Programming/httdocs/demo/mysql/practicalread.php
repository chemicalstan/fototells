<?php


$connection =mysqli_connect('localhost','root','','practical');
    if ($connection){
    echo'we are connected';
    } else{
    die ('database connection failed');
    }
    


?>

<?php include"includes/header.php";?>
    
    <div class="container">
        
        <div class="col-xm-6">
        <h1 class="text-center">PRACTICAL READ DATA</h1>
       <pre>
        <?php
        $query="SELECT * FROM mydatas";
$result = mysqli_query($connection, $query);


while ($row=mysqli_fetch_assoc($result)){

print_r($row);
    
 echo $row['username'] . '<br>';
}

        ?>
        </pre>
      </div>
    </div>

<?php include"includes/footer.php";?>