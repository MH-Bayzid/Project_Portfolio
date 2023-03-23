<?php 
session_start();
require '../db.php';

$id= $_POST['id'];
$uploaded_file= ($_FILES['photo']);

$after_explode= explode('.',$uploaded_file['name']);
$extension= end($after_explode);
$allowed_extension= array('jpg','gif','png','webp');


if(in_array($extension, $allowed_extension)){
    if($uploaded_file['size']<= 1000000){
        
        $select_image= "SELECT * FROM users WHERE id='$id'";
        $result= mysqli_query($db_connection,$select_image);
        $after_assoc_img= mysqli_fetch_assoc($result);
        $delete_form= '../uploads/user photos'.$after_assoc_img['photo'];
        unlink($delete_form);
        
        $file_name= $id.'.'.$extension;
        $new_location= '../uploads/user photos/'.$file_name;
        move_uploaded_file($uploaded_file['tmp_name'], $new_location);
        $update= "UPDATE users SET photo='$file_name' WHERE id='$id'";
        mysqli_query($db_connection,$update);
        $_SESSION['error2']= 'Update Successfully';
        header('location:profile.php');
    }
    else{
        $_SESSION['error']= 'Image size must be under 1MB';
        header('location:profile.php');
    }

}
else{
    $_SESSION['error']= 'Invalid EXtension';
    header('location:profile.php');
}






?>