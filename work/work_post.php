<?php 
session_start();
require '../login_check.php';
require '../db.php';

$user_id = $_POST['user_id'];
$category = $_POST['category'];
$sub_title = $_POST['sub_title'];
$title = $_POST['title'];
$desp = $_POST['desp'];


$insert = "INSERT INTO works(user_id,category,sub_title,title,desp)VALUES('$user_id', '$category', '$sub_title','$title','$desp' )";
mysqli_query($db_connection, $insert);

$last_id= mysqli_insert_id($db_connection);




// thumbnail
$thumb= $_FILES['thumb'];


        $after_explode_thumb= explode('.', $thumb['name']);
        $thumb_extension= end($after_explode_thumb);
        $allowed_thumbEX= array('jpg','png','webp','gif');
        if(in_array($thumb_extension,$allowed_thumbEX)){
            if($thumb['size'] <= 1000000){
                $file_name= $last_id.'.'.$thumb_extension;
                $new_location= '../uploads/work/thumbnail/'.$file_name;
                move_uploaded_file($thumb['tmp_name'],$new_location);
                $update_thumb_name= "UPDATE works SET thumb='$file_name' WHERE id='$last_id'";
                mysqli_query($db_connection,$update_thumb_name);
                header('location:work.php');
            }
        }
        else{
            
            header('location:work.php');
        }
        
        
// Feat_image
$feat_image= $_FILES['feat_image'];


        $after_explode_feat_image= explode('.', $feat_image['name']);
        $feat_image_extension= end($after_explode_feat_image);
        $allowed_feat_imageEX= array('jpg','png','webp','gif');

        if(in_array($feat_image_extension,$allowed_feat_imageEX)){
            if($feat_image['size'] <= 1000000){
                $file_name2= $last_id.'.'.$feat_image_extension;
                $new_location2= '../uploads/work/feat_image/'.$file_name2;
                move_uploaded_file($feat_image['tmp_name'],$new_location2);
                $update_feat_image_name= "UPDATE works SET feat_image='$file_name2' WHERE id='$last_id'";
                mysqli_query($db_connection,$update_feat_image_name);
                header('location:work.php');
            }
        }
        else{
            
            header('location:work.php');
        }

        // header('location:work.php');

?>