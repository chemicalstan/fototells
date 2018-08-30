<?php include"db.php";?>
<?php include"function.php";?>

<?php
   deleteRow();

?>
 

<?php include"includes/header.php";?>
    
    <div class="container">
        <div class="col-xm-6">
        <h1 class="text-center">DELETE</h1>
         <form action="loginapp_delete.php" method="post">
         
     <br>

        <div class="form-group">    
        <select name="id" id="">
        <?php
        ShowAllData();        
        ?>
        </select>         
        </div>

            <div>
            <input class="btn btn-primary"  type="submit" name="submit" value="delete">
            </div>

          </form>
         </div>
     </div>
     
<?php include"includes/footer.php";?>












