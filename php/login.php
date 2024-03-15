<?php

$servername = "localhost:3309";
$username = "root";
$password = "";
$db = "admin";

$conn = mysqli_connect($servername, $username, $password, $db);

if(!$conn){
    echo "Database not connected " . mysqli_conect_error();
}

$uname = $_POST['uname'];
$pass = $_POST['pass'];

$sql = "select * from login where uname='$uname' and pass='$pass'";
$result = mysqli_query($conn,$sql);

if(mysqli_num_rows($result) > 0){
    header("Location: success.php");
}
else{
    header("Location: error.html");
}

?>