
<?php include('db.php');

//create row
function createRow(){

if (isset($_POST['submit'])){
global $connection;
    $username=$_POST['username'];
    $password=$_POST['password'];
    
//    security begin
    
        $username= mysqli_real_escape_string($connection,$username);
    $password= mysqli_real_escape_string($connection,$password);
    
    
//    enctyption:
    
    $hashFormat ="$2y$10$";
    $salt = "chemicalstanencryption";
    $hashF_and_salt = $hashFormat . $salt;
    $password = crypt($password,$hashF_and_salt);
    
    
// security end   
    
    
    $query = "INSERT INTO users(username, password) VALUES ('$username', '$password')";
    
    $result = mysqli_query($connection, $query );
    
    
        if (!$result){
    die ('server error!!!');
    
    } else{
    
    echo 'record created';}
    
}

}
//  display row
function ShowAllData(){
    
    global $connection;
    
$query = "SELECT * FROM users";
$result = mysqli_query($connection, $query);
//    tester
if (!$result){
die("selection failed");
}

while ($row = mysqli_fetch_assoc($result)){
$id = $row['id'];
             echo "<option value='$id'>$id</option>";

}

 }

// updaterow
function updateTable(){

    if(isset($_POST["submit"])){
    global $connection;
    
$username=$_POST["username"];
 $password=$_POST["password"];
  $id=$_POST["id"];
    
    $query = "UPDATE users SET ";
$query .="username = '$username' ," ;
$query .="password = '$password'";
$query .="WHERE id = $id ";
$result = mysqli_query($connection, $query);
    //    tester

    if (!$result){
    die ("fatal error " . mysqli_error($connection));
    }else {
    echo "update succesful";}

}}

//deleterow

function deleteRow(){
if(isset($_POST["submit"])){

    global $connection;
    
  $id=$_POST["id"];
    
    $query = "DELETE FROM users ";

$query .="WHERE id = $id ";
$result = mysqli_query($connection, $query);
    //    tester

    if (!$result){
    die ("fatal error " . mysqli_error($connection));
    }else {
    echo "delete succesful";}

}
}

//READ DATA
function readdata(){

    global $connection;

 $query /*command type*/ = "SELECT * FROM users";
$result /*conctn + command type*/ = mysqli_query($connection, $query);

while ($row=mysqli_fetch_assoc($result)){
        print_r($row);}
}