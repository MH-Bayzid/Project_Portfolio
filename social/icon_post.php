<?php 
session_start();
require '../login_check.php';
require '../db.php';

$link= $_POST['link'];
$icon= $_POST['icon'];


$insert= "INSERT INTO social(icon,link)VALUES('$icon','$link') ";
mysqli_query($db_connection,$insert);
$_SESSION['success']='Link Successfully Updated!';
header('location:social.php');
?>