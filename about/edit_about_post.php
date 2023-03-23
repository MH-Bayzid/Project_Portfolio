<?php 
session_start();
require_once('../db.php');
require_once('../login_check.php');

$id = $_POST['id'];
$sub_title = $_POST['sub_title'];
$title = $_POST['title'];
$desp = $_POST['desp'];

$edit_update = "UPDATE abouts SET sub_title='$sub_title', title='$title', desp='$desp' WHERE id='$id' ";
mysqli_query($db_connection, $edit_update);
header('location:  about.php');
 
?>