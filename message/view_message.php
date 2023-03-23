<?php 
session_start();
require '../login_check.php';
require '../db.php';

$id=$_GET['id'];

$select1 = "SELECT * FROM messages WHERE id=$id";
$select_res1 = mysqli_query($db_connection, $select1);
$after_assoc1= mysqli_fetch_assoc($select_res1);

$update="UPDATE messages SET status=1 WHERE id=$id";
mysqli_query($db_connection,$update);

?>

<?php 
    require '../dashboard_parts/header.php';
?>


<section class="get-in-touch">
   <div class="card">
    <div class="card-body">
        <div class="card-header">
        <h2 class="title">View Message</h2>
        </div>
        <div class="card-body">
              <table class="table table-bordered">
                <tr>
                     <th>Name</th>
                     <td><?= $after_assoc1['name'] ?></td>
                </tr>
                <tr>
                     <th>Email</th>
                     <td><?= $after_assoc1['email'] ?></td>
                </tr>
                <tr>
                     <th>Messages</th>
                     <td><?= $after_assoc1['message'] ?></td>
                </tr>

              </table>  
        </div>
    </div>
   </div>
</section>


<?php 
    require '../dashboard_parts/footer.php';
?>