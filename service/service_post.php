<?php 
session_start();
require '../db.php';

$icon= $_POST['icon'];
$title= $_POST['title'];
$files= $_FILES['files'];
$description= $_POST['description'];


$insert_service= "INSERT INTO services (title,desp,logo)VALUES('$title','$description','$icon')";
mysqli_query($db_connection,$insert_service);

$_SESSION['success']= 'Service Added Success..!';
header('location:service.php')

?>