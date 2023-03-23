<?php 
///////////banner photo
session_start();
require '../db.php';

$id = $_GET['id'];

////
$select_skill = "SELECT * FROM skills WHERE id=$id";
$result = mysqli_query($db_connection,$select_skill);
$after_assoc_skill = mysqli_fetch_assoc($result);
////


$delete = "DELETE FROM skills WHERE id=$id";
mysqli_query($db_connection, $delete);

$_SESSION['delete'] = 'Photo Deleted Successfully';
header('location:skill.php');

?>
