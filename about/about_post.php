<?php 
session_start();
require_once('../db.php');
require_once('../login_check.php');

$sub_title = $_POST['sub_title'];
$title = $_POST['title'];
$desp = $_POST['desp'];
$desp = mysqli_real_escape_string($db_connection, $desp);



$insert = "INSERT INTO abouts(sub_title, title, desp) VALUES('$sub_title', '$title', '$desp')";
mysqli_query($db_connection, $insert);
header('location: about.php');

?>