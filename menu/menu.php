<?php 
session_start();
require '../login_check.php';
require '../db.php';

$select = "SELECT * FROM menus";
$select_res = mysqli_query($db_connection, $select);
?>

<?php 
    require '../dashboard_parts/header.php';
?>
<div class="row">
    <div class="col-lg-8">
        <div class="card">
            <div class="card-header">
                <h2>Menu List</h2>
            </div>
            <div class="card-body">
            <table class="table table-striped table-hover">
            <tr>
                <th>SL</th>
                <th>Menu Name</th>
                <th>Section ID</th>
                <th>Action</th>
              </tr>
            <?php foreach($select_res as $sl=>$work){ ?>
            <tr>
                <td><?=$sl+1?></td>
                <td><?=$work['menu_name']?></td>
                <td><?=$work['section_id']?></td>
                <td>
                    <a href="delete_menu.php?id=<?=$work['id']?>" class="btn btn-danger" >Delete</a>
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
                <h3>Add Work</h3>
            </div>
            <div class="card-body">
                <form action="menu_post.php" method="POST">
                    <div class="mb-3">
                        <label for="" class="form-label">Menu Name</label>
                        <input type="text" name="menu_name" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label for="" class="form-label">Section ID</label>
                        <input type="text" name="section_id" class="form-control">
                    </div>
                    <div class="mb-3">
                        <button type="submit" class="btn btn-primary">Add Menu</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<?php 
    require '../dashboard_parts/footer.php';
?>