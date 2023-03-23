<?php 

require '../db.php';


$name= $_POST['name'];
$title= $_POST['title'];
$comment= $_POST['comment'];



$image= $_FILES['image'];
$after_explode= explode('.',$image['name']);
$extension= end($after_explode);
$allowed_extension= array('jpg','gif','webp','png');

if(in_array($extension, $allowed_extension)){
    if($image['size'] <= 1000000){
        $insert = "INSERT INTO reviews (name,title,comment,image)VALUES('$name','$title','$comment','$image')";
        mysqli_query($db_connection, $insert);
        $last_id = mysqli_insert_id($db_connection);
        $file_name = $last_id.'.'.$extension;
        $new_location = '../uploads/review/'.$file_name;
        move_uploaded_file($image['tmp_name'], $new_location);
        $update= "UPDATE reviews SET image='$file_name' WHERE id='$last_id'";
        mysqli_query($db_connection,$update);
        header('location:review.php');

    }
    else{
        $_SESSION['error']= 'logo size must be under 1MB';
        header('location:review.php');
    }

}
else{
    $_SESSION['error']= 'Invalid EXtension';
    header('location:review.php');
}

?>