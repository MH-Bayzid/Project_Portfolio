<?php 
session_start();
require '../login_check.php';
require '../db.php';

$select= "SELECT * FROM brand";
$select_res= mysqli_query($db_connection,$select);

?>
<?php 
    require '../dashboard_parts/header.php';
?>


<div class="row">
    <div class="col-lg-8">
        <div class="card">
            <div class="card-header">
                <h3>Brand Image List</h3>
            </div>
            <div class="card-body">
            <table class="table table-striped table-hover">
            <tr>
                <th>SL</th>
                <th>Brand Image 1</th>
                <th>Status</th>
                <th>Action</th>
            </tr>
            <?php foreach($select_res as $sl=>$brand){ ?>
            <tr>
                <td><?=$sl+1?></td>
                <td><img width="100" src="../uploads/brand_image/<?=$brand['image1']?>" alt=""></td>
                <td>
                    <a class="btn btn-<?=($brand['status']==1)?'success':'light'?>" href="logo_status.php?id=<?=$brand['id']?>"><?=($brand['status']==1)?'Active':'Deactive'?></a>
                </td>
                <td>
                <a href="delete_brand.php?id=<?=$brand['id']?>" class="btn btn-danger delete_btn">Delete</a>
                </td>
            </tr>
            <?php } ?>
        </table>
            </div>
        </div>
    </div>
    <div class="col-lg-4">
        <div class="card">
            <div class="card-header">
                <h3>Add New Brand Image</h3>
            </div>
            <div class="card-body">
                <form action="brand_post.php" method="POST" enctype="multipart/form-data">
                    <div class="mb-3">
                        <label class="form-label">Brand Image</label>
                        <input type="file" class="form-control" name="image1" >
                    </div>
                    <div class="mb-3">
                        <button type="submit" class="btn btn-primary">Add Brand Image</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>



<?php 
    require '../dashboard_parts/footer.php';
?>