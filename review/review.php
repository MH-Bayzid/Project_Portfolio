<?php 
session_start();
require '../login_check.php';
require '../db.php';

$select= "SELECT * FROM reviews";
$select_res= mysqli_query($db_connection,$select);

?>
<?php 
    require '../dashboard_parts/header.php';
?>


<div class="row">
    <div class="col-lg-8">
        <div class="card">
            <div class="card-header">
                <h3>Review List</h3>
            </div>
            <div class="card-body">
            <table class="table table-striped table-hover">
            <tr>
                <th>SL</th>
                <th>Name</th>
                <th>Title</th>
                <th>Comment</th>
                <th>Image</th>
                <th>Action</th>
            </tr>
            <?php foreach($select_res as $sl=>$review){ ?>
            <tr>
                <td><?=$sl+1?></td>
                <td><?=$review['name']?></td>
                <td><?=$review['title']?></td>
                <td><?=$review['comment']?></td>
                <td>
                    <img width="100" src="../uploads/review/<?=$review['image']?>" alt=""></td>
                <td>
                <a href="delete_review.php?id=<?=$review['id']?>" class="btn btn-danger delete_btn">Delete</a>
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
                <h3>Add New Review</h3>
            </div>
            <div class="card-body">
                <form action="review_post.php" method="POST" enctype="multipart/form-data">
                    <div class="mb-3">
                        <label  class="form-label">Name</label>
                        <input type="text" class="form-control" name="name">
                    </div>
                    <div class="mb-3">
                        <label  class="form-label">Title</label>
                        <input type="text" class="form-control" name="title">
                    </div>
                    <div class="mb-3">
                        <label  class="form-label">Comment</label>
                        <input type="text" class="form-control" name="comment">
                    </div>
                    <div class="mb-3">
                    <label  class="form-label">Client Image</label>
                        <input type="file" class="form-control" name="image">
                    </div>
                    <div class="mb-3">
                        <button type="submit" class="btn btn-primary">Add Review</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>



<?php 
    require '../dashboard_parts/footer.php';
?>