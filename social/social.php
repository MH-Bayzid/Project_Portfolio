<?php 
session_start();
require '../login_check.php';
require '../db.php';

$select_social= "SELECT * FROM social";
$select_social_res= mysqli_query($db_connection,$select_social);

?>
<?php 
    require '../dashboard_parts/header.php';
?>

<div class="container">
        <div class="row">
            <div class="col-lg-8">
                <div class="card">
                    <div class="card-header">
                        <h3>Social Links</h3>
                    </div>
                    <?php if(isset($_SESSION['delete'])){ ?>
                        <strong class="btn btn-success"><?=$_SESSION['delete']?></strong>
                     <?php } unset($_SESSION['delete']) ?>
                    <div class="card-body">
                        <table class="table table-striped table-hover ">
                        <tr>
                                <th>Sl</th>
                                <th>Icon</th>
                                <th>Link</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                            <?php foreach($select_social_res as $sl=>$social){ ?>
                            <tr>
                                <td><?=$sl+1?></td>
                                <td><i style="font-family: fontawesome;" class="<?=$social['icon']?>"></td>
                                <td><?=$social['link']?></td>
                                <td>
                                <a class="btn btn-<?=($social['status'] == 1)?'success':'light'?>" href="social_status.php?id=<?=$social['id']?>"><?=($social['status'] == 1)?'active':'deactive'?></a>
                                </td>
                                <td>
                                <a href="delete_social.php?id=<?=$social['id']?>" class="btn btn-danger delete_btn">Delete</a>
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
                        <h3>Social Link</h3>
                    </div>
                    <?php 
                    if(isset($_SESSION['success'])){?>
                        <strong class="btn btn-success"><?= $_SESSION['success'] ?></strong>
                    <?php }unset($_SESSION['success']) ?>
                    <?php 
                        $fonts= array(
                            'fa-facebook-official',
                            'fa-youtube-play',
                            'fa-twitter',
                            'fa-linkedin',
                            'fa-instagram',
                            'fa-pinterest',
                            'fab fa-free-code-camp',

                        );
                    ?>
                    <div class="card-body">
                        <form action="icon_post.php" method="POST">
                            <div class="mb-3">
                                <?php foreach($fonts as $icon){ ?>
                                    <i style="font-family:fontawesome; margin-right:20px; font-size:35px;" class="fa <?= $icon ?>" ></i>
                                <?php } ?>
                            </div>
                            <div class="mb-3">
                                <input type="text" name="icon" id="icon" class="form-control" placeholder="icon">
                            </div>
                            <div class="mb-3">
                                <input type="text" name="link" id="icon" placeholder="link" class="form-control" >
                            </div>
                            <div class="mb-3">
                                <button type="submit" class="btn btn-primary">ADD Social Link</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

<?php 
    require '../dashboard_parts/footer.php';
?>
<script>
    $('.fa').click(function(){
        var icon_class= $(this).attr('class');
        $('#icon').attr('value', icon_class);
    })
</script>