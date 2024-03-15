<?php

$servername="localhost:3309";
$username="root";
$password="";
$db="admin";

$conn=mysqli_connect($servername,$username,$password,$db);

if(!$conn){
    die("Database connection failed " .mysqli_connect_error());
}

$edit = $_POST['edit'];
$budget=$_POST["budget"];
$weight=$_POST["weight"];
$style=$_POST["style"];
$link=$_POST["link"];

$sql = "update badminton set budget='$budget',weight='$weight',style='$style',link='$link' where id='$edit'";
$result=mysqli_query($conn,$sql);

if($result){
     header("Location: success.php");
}
else{
    die("Error Editing record".mysqli_error($conn));
}



?>
