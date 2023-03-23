<?php 
session_start();
require '../login_check.php';
require '../db.php';


?>

<?php 

date_default_timezone_set('Asia/Dhaka');
$name= $_POST['name'];
$email= $_POST['email'];
$message= $_POST['message'];
$date= date("y-m-d h:i:s");


$insert_message= "INSERT INTO messages (name,email,message,date)VALUES('$name','$email','$message','$date')";
$insert_message_res= mysqli_query($db_connection,$insert_message);

$_SESSION['success']='Message Sent Successfully.!';
header('location:../index.php#contact')





?>