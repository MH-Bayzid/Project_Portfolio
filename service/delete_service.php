<?php 

session_start();
require '../db.php';

$id = $_GET['id'];


$select_services = "SELECT * FROM services WHERE id=$id";
$result = mysqli_query($db_connection,$select_services);
$after_assoc_skill = mysqli_fetch_assoc($result);



$delete = "DELETE FROM services WHERE id=$id";
mysqli_query($db_connection, $delete);

$_SESSION['delete'] = 'Service Deleted Successfully';
header('location:service.php');

?>
