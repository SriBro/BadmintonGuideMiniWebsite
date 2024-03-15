<?php

$servername="localhost:3309";
$username="root";
$password="";
$db="admin";

$conn=mysqli_connect($servername,$username,$password,$db);

if(!$conn){
    die("Database connection failed " . mysqli_connect_error());
}
$id=$_POST["id"];
$budget=$_POST["budget"];
$weight=$_POST["weight"];
$style=$_POST["style"];
$link=$_POST["link"];

$sql="insert into badminton values ('$id','$budget','$weight','$style','$link')";

$result = mysqli_query($conn,$sql);

if($result){
    header("Location: success.php");
}
else{
    die("Error inserting data " .mysqli_error($conn));
}



?>