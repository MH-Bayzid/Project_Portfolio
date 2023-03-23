<?php 

require '../db.php';

$id= $_GET['id'];

$select_status2= "SELECT * FROM logos WHERE id='$id'";
$select_status_res2= mysqli_query($db_connection,$select_status2);
$after_assoc2= mysqli_fetch_assoc($select_status_res2);

if($after_assoc['status']==1){
    $update= "UPDATE banner_photos SET status=0 WHERE id='$id'";
    mysqli_query($db_connection,$update);
    header('location:banner.php');
}
else{
    $update1= "UPDATE banner_photos SET status=0";
    mysqli_query($db_connection,$update1);

    $update2= "UPDATE banner_photos SET status=1 WHERE id='$id'";
    mysqli_query($db_connection,$update2);
    header('location:banner.php');
}

?>