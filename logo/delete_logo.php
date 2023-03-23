<?php 
///////////banner photo
session_start();
require '../db.php';

$id = $_GET['id'];

////
$select_logo = "SELECT * FROM logos WHERE id=$id";
$result = mysqli_query($db_connection,$select_logo);
$after_assoc_logo = mysqli_fetch_assoc($result);
$delete_from = '../uploads/logo/'.$after_assoc_logo['logo'];
unlink($delete_from);
////


$delete = "DELETE FROM logos WHERE id=$id";
mysqli_query($db_connection, $delete);

$_SESSION['delete'] = 'Photo Deleted Successfully';
header('location:add_logo.php');

?>
