<?php 
session_start();
require '../login_check.php';
require '../db.php';
// Banner Info
$select= "SELECT * FROM banners";
$select_res= mysqli_query($db_connection,$select);
$after_assoc_banner= mysqli_fetch_assoc($select_res);


// Banner photo
$select_photo= "SELECT * FROM banner_photos";
$select_photo_res= mysqli_query($db_connection,$select_photo);


?>
<?php 
    require '../dashboard_parts/header.php';
?>

<div class="row">
    <div class="col-lg-6">
        <div class="card">
            <div class="card-header">
                <h3>Edit Banner Info</h3>
            </div>
            <div class="card-body">
                <form action="update_banner.php" method="POST">
                    <div class="mb-3">
                        <input type="text" name="sub_title" class="form-control" value="<?= $after_assoc_banner['sub_title'] ?>">
                    </div>
                    <div class="mb-3">
                        <input type="text" name="title" class="form-control"value="<?= $after_assoc_banner['title'] ?>">
                    </div>
                    <div class="mb-3">
                        <input type="text" name="desp" class="form-control"value="<?= $after_assoc_banner['desp'] ?>">
                    </div>
                    <div class="mb-3">
                       <button type="submit" class="btn btn-primary">Update Info</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <div class="col-lg-6 ">
    <div class="card">
            <div class="card-header">
                <h3>Banner Photo List</h3>
            </div>
            <div class="card-body">
                <table class="table table-striped table-hover">
                    <tr>
                        <th>SL</th>
                        <th>Photo</th>
                        <th>Status</th>
                        <th>Action</th>
                    </tr>
                    <?php foreach($select_photo_res as $sl=>$photo){?>
                    <tr>
                        <td><?=$sl+1?></td>
                        <td><img width="50" src="../uploads/banner_photos/<?=$photo['photo']?>" alt=""></td>
                        <td>
                        <a class="btn btn-<?=($photo['status']==1)?'success':'light'?>" href="photo_status.php?id=<?=$photo['id']?>"><?=($photo['status']==1)?'Active':'Deactive'?></a>
                        </td>
                        <td>
                        <a href="delete_banner_photo.php?id=<?= $photo['id'] ?>'"  class="btn btn-danger delete_btn">Delete</a>

                        </td>
                    </tr>
                    <?php } ?>
                </table>
            </div>
        </div>
        <div class="card">
            <div class="card-header">
                <h3>Edit Banner Photo</h3>
            </div>
            <?php if(isset($_SESSION['error'])){?>
                    <strong class="btn btn-danger"><?=$_SESSION['error']?></strong>
                <?php } else{ unset($_SESSION['error'])?>
                    
                <?php } unset($_SESSION['error'])?>
            <div class="card-body">
                <form action="update_banner_photo.php" method="POST" enctype="multipart/form-data">
                    <div class="mb-3">
                        <input type="file" name="photo" class="form-control">
                    </div>
                    <div class="mb-3">
                       <button type="submit" class="btn btn-primary">Update Image</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>



<?php 
    require '../dashboard_parts/footer.php';
?>


