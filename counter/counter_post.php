<?php 
session_start();
require '../login_check.php';
require '../db.php';

$icon = $_POST['icon'];
$number = $_POST['number'];
$sub_title = $_POST['sub_title'];



$insert = "INSERT INTO counters(icon,number,sub_title) VALUES ('$icon', '$number','$sub_title')";
mysqli_query($db_connection, $insert);

 


header('location:counter.php');


?>