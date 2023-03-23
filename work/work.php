<?php 
session_start();
require '../login_check.php';
require '../db.php';

$select = "SELECT * FROM works";
$select_res = mysqli_query($db_connection, $select);
?>

<?php 
    require '../dashboard_parts/header.php';
?>
<div class="row">
    <div class="col-lg-9">
        <div class="card m-auto">
            <div class="card-header">
                <h1>Work List</h1>
            </div>
            <div class="card-body">
            <table class="table table-striped table-hover">
            <tr>
                <th>SL</th>
                <th>Name</th>
                <th>Category</th>
                <th>Sub Title</th>
                <th>Title</th>
                <th>Description</th>
                <th>Thumbnail</th>
                <th>Featuered Image</th>
            </tr>
            <?php foreach($select_res as $sl=>$work){ ?>
            <tr>
                <td><?=$sl+1?></td>
                <td>
                    <?php 
                    $user_id= $work['user_id'];
                    $select_user2= "SELECT * FROM users WHERE id='$user_id'";
                    $select_user_res= mysqli_query($db_connection,$select_user2);
                    $after_assoc_user= mysqli_fetch_assoc($select_user_res);
                    echo $after_assoc_user['name'];
                    ?>
                </td>
                <td><?=$work['category']?></td>
                <td><?=substr($work['sub_title'],0,20)?></td>
                <td><?=$work['title']?></td>
                <td><?=substr($work['desp'],0,20)?></td>
                <td>
                <img width="100" src="../uploads/work/thumbnail/<?=$work['thumb']?>" alt="">
                </td>
                <td>
                <img width="100" src="../uploads/work/feat_image/<?=$work['feat_image']?>" alt="">
                </td>
            </tr>
            <?php } ?>
        </table>
            </div>
        </div>
    </div>
    <div class="col-lg-3">
        <div class="card m-auto">
            <div class="card-header m-auto">
                <h3>Add Work</h3>
            </div>
            <div class="card-body">
                <form action="work_post.php" method="POST" enctype="multipart/form-data">
                    <div class="mb-3">
                        <label for="" class="form-label">Category</label>
                        <input type="hidden" name="user_id" class="form-control" value="<?=$after_assoc['id'] ?>">
                        <input type="text" name="category" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label for="" class="form-label">Sub Title</label>
                        <input type="text" name="sub_title" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label for="" class="form-label">Title</label>
                        <input type="text" name="title" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label for="" class="form-label">Description</label>
                        <textarea name="desp" id="" cols="30" rows="10" class="form-control"></textarea>
                    </div>
                    <div class="mb-3">
                        <label for="" class="form-label">Thumbnail</label>
                        <input type="file" name="thumb" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label for="" class="form-label">Featuerd Image</label>
                        <input type="file" name="feat_image" class="form-control">
                    </div>
                    <div class="mb-3">
                        <button type="submit" class="btn btn-primary">Add Work</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<?php 
    require '../dashboard_parts/footer.php';
?>