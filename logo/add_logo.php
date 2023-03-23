<?php 
session_start();
require '../login_check.php';
require '../db.php';

$select= "SELECT * FROM logos";
$select_res= mysqli_query($db_connection,$select);

?>
<?php 
    require '../dashboard_parts/header.php';
?>


<div class="row">
    <div class="col-lg-8">
        <div class="card">
            <div class="card-header">
                <h3>Logo List</h3>
            </div>
            <div class="card-body">
            <table class="table table-striped table-hover">
            <tr>
                <th>SL</th>
                <th>Logo</th>
                <th>Status</th>
                <th>Action</th>
            </tr>
            <?php foreach($select_res as $sl=>$logo){ ?>
            <tr>
                <td><?=$sl+1?></td>
                <td><img width="100" src="../uploads/logo/<?=$logo['logo']?>" alt=""></td>
                <td>
                    <a class="btn btn-<?=($logo['status']==1)?'success':'light'?>" href="logo_status.php?id=<?=$logo['id']?>"><?=($logo['status']==1)?'Active':'Deactive'?></a>
                </td>
                <td>
                <a href="delete_logo.php?id=<?=$logo['id']?>" class="btn btn-danger delete_btn">Delete</a>
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
                <h3>Add New Logo</h3>
            </div>
            <div class="card-body">
                <form action="logo_post.php" method="POST" enctype="multipart/form-data">
                    <div class="mb-3">
                        <input type="file" class="form-control" name="logo">
                    </div>
                    <div class="mb-3">
                        <button type="submit" class="btn btn-primary">Add Logo</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>



<?php 
    require '../dashboard_parts/footer.php';
?>