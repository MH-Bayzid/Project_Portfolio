<?php 

session_start();
require '../db.php';

$id = $_GET['id'];


$select_social = "SELECT * FROM social WHERE id=$id";
$result = mysqli_query($db_connection,$select_social);
$after_assoc_social = mysqli_fetch_assoc($result);



$delete = "DELETE FROM social WHERE id=$id";
mysqli_query($db_connection, $delete);

$_SESSION['delete'] = 'Photo Deleted Successfully';
header('location:social.php');

?>
