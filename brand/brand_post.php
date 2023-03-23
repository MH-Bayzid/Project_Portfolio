<?php 
session_start();
require '../db.php';

$image1= $_FILES['image1'];


$after_explode_image1= explode('.',$image1['name']);
$extension= end($after_explode_image1);
$allowed_extension= array('jpg','gif','webp','png');

if(in_array($extension, $allowed_extension)){
    
        $insert = "INSERT INTO brand (image1)VALUES('$image1')";
        mysqli_query($db_connection, $insert);
        $last_id= mysqli_insert_id($db_connection);
        $file_name = $last_id.'.'.$extension;
        $new_location = '../uploads/brand_image/'.$file_name;
        move_uploaded_file($image1['tmp_name'], $new_location);
        $update= "UPDATE brand SET image1='$file_name' WHERE id='$last_id'";
        mysqli_query($db_connection,$update);
        header('location:brand.php');

    }
   
    else{
    $_SESSION['error']= 'Invalid EXtension';
    header('location:brand.php');
}

?>

