<?php 
session_start();
require '../login_check.php';
require '../db.php';

$select = "SELECT * FROM messages";
$select_res = mysqli_query($db_connection, $select);
?>

<?php 
    require '../dashboard_parts/header.php';
?>
<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-header">
                <h2 class="text-center">Messages</h2>
            </div>
            <div class="card-body">
            <table class="table table-bordered table-hover">
            <tr>
                <th>SL</th>
                <th>Name</th>
                <th>Email</th>
                <th>Message</th>
                <th class="text-center">Action</th>
                
            </tr>
            <?php foreach($select_res as $sl=>$message){ ?>
            <tr class="<?=($message['status'] ==0 )?'bg-light':'' ?>" >
                <td><?=$sl+1?></td>
                <td><?=$message['name'] ?></td>
                <td><?=$message['email'] ?></td>
                <td><?=substr($message['message'],0,20).'...more'?></td>
                <td>
                    <a href="view_message.php?id=<?=$message['id']?>" class="btn btn-info" >View</a>
                    <a href="delete_message.php?id=<?=$message['id']?>"class="btn btn-danger">Delete</a>
                </td>
            </tr>
            <?php } ?>
            <?php if(mysqli_num_rows($select_res) == 0) { ?>
                <td colspan="5"class="text-center" >No Message Found</td>
                <?php } ?>
        </table>
            </div>
        </div>
    </div>
   
</div>
<?php 
    require '../dashboard_parts/footer.php';
?>



