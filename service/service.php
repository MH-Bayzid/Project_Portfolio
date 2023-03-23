<?php 
session_start();
require '../login_check.php';
require '../db.php';

$select_service= "SELECT * FROM services";
$select_service_res= mysqli_query($db_connection,$select_service);

?>
<?php 
    require '../dashboard_parts/header.php';
?>

<div class="container">
        <div class="row">
            <div class="col-lg-8">
                <div class="card">
                    <div class="card-header">
                        <h3>Service List</h3>
                    </div>
                    
                    <div class="card-body">
                        <table class="table table-striped table-hover ">
                        <tr>
                                <th>Sl</th>
                                <th>Title</th>
                                <th>Description</th>
                                <th>Icon</th>
                                <th>Action</th>
                            </tr>
                            <?php foreach($select_service_res as $sl=>$service){ ?>
                            <tr>
                                <td><?=$sl+1?></td>
                                <td><?=$service['title'] ?></td>
                                <td><?=substr($service['desp'],0,20) ?></td>
                                <td>
                                    <i style="font-family: fontawesome;" class="<?=$service['logo']?>"></td>
                                <td>
                                <a href="delete_service.php?id=<?=$service['id']?>" class="btn btn-danger delete_btn">Delete</a>
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
                            'fa-html5',
                            'fa-fire',
                            'fa-lightbulb-o',
                            'fa-edit',
                            'fa-support',
                            'fa-free-code-camp',
                            

                        );
                    ?>
                    <div class="card-body">
                        <form action="service_post.php" method="POST">
                            <?php if(isset($_SESSION['success'])){ ?>
                                <div class="alert alert-success"><?=$_SESSION['success']?></div>
                                <?php } ?>
                            <div class="mb-3">
                                <?php foreach($fonts as $icon){ ?>
                                    <i style="font-family:fontawesome; margin-right:20px; font-size:35px;" class="fa <?= $icon ?>" ></i>
                                <?php } ?>
                            </div>
                            <div class="mb-3">
                                <input type="text" name="icon" id="icon" class="form-control" placeholder="icon">
                            </div>
                            <div class="mb-3">
                                <label  class="form-label">Title</label>
                                <input type="text" class="form-control" name="title">
                            </div>
                            <div class="mb-3">
                                <label  class="form-label">Icon</label>
                                <input type="file" class="form-control" name="files">
                            </div>
                            <div class="mb-3">
                                <label  class="form-label">Description</label>
                                <input type="text-area" class="form-control" name="description">
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