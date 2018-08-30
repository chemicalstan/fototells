<?php include"db.php";  ?>
 <?php include"function.php";  ?>

 <?php
createRow();


?>

    <?php include"includes/header.php";?>
    <div class="container">
        
        <div class="col-xm-6">
        <h1 class="text-center">CREATE</h1>
        <form action="loginapp_create.php" method="post">
        <div class="form-group">
        <label for="username">username</label>
        <input type="text" name="username" class="form-control">
        </div>
                <div class="form-group">
              <label for="password">password</label>
              <input type="password" name="password" class="form-control">
                 </div>
    <div>
        <input class="btn btn-primary"  type="submit" name="submit" value="CREATE">
        
    </div>
       
       
       
       </form>
      </div>
    </div>
<?php include"includes/footer.php";?>