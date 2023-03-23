<?php 
// require '../login_check.php';
require '../db.php';

$sub_title = $_POST['sub_title'];
$title = $_POST['title'];
$desp = mysqli_real_escape_string($db_connection, $_POST['desp']);

$update_banner = "UPDATE banners SET sub_title='$sub_title', title='$title', desp='$desp'";
mysqli_query($db_connection, $update_banner);
header('location:banner.php');

?>