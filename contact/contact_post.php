<?php 
session_start();
require_once('../db.php');
require_once('../login_check.php');

$address = $_POST['address'];
$phone = $_POST['phone'];
$email = $_POST['email'];

$select_contacts = "UPDATE contacts SET address='$address', phone='$phone', email='$email'";
 mysqli_query($db_connection, $select_contacts);
$_SESSION['contact_update'] = 'Information Updated successfully';
header('location: contact.php');




?>
