<?php 
session_start();
require_once('../db.php');

$id = $_GET['id'];
$delete = "DELETE FROM menus WHERE id=$id";
mysqli_query($db_connection, $delete);
$_SESSION['delete'] = 'One Menu Deleted Successfully';
header('location: menu.php');

//href="user_delete.php?id=<?= $user['id'];

?>