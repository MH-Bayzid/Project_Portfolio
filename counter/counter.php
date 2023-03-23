<?php 
session_start();
require '../login_check.php';
require '../db.php';

$select = "SELECT * FROM counters";
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
                <th>Icon</th>
                <th>Number</th>
                <th>sub_title</th>
                <th>Action</th>
              </tr>
            <?php foreach($select_res as $sl=>$work){ ?>
            <tr>
                <td><?=$sl+1?></td>
                <td><i style="font-family:fontawesome"class="<?=$work['icon']?>"></i></td>
                <td><?=$work['number']?></td>
                <td><?=$work['sub_title']?></td>
                <td>
                    <a href="delete_counter.php" class="btn btn-danger" >Delete</a>
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
                <h3>Counter Form</h3>
            </div>
            <div class="card-body">
                <form action="counter_post.php" method="POST">
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
                    <div class="mb-3">
                                <?php foreach($fonts as $icon){ ?>
                                    <i style="font-family:fontawesome; margin-right:20px; font-size:35px;" class="fa <?= $icon ?>" ></i>
                                <?php } ?>
                            </div>
                    <div class="mb-3">
                        <label  class="form-label">Icon</label>
                        <input type="text" name="icon" id="icon" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label  class="form-label">Number</label>
                        <input type="number" name="number" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label  class="form-label">Sub Title</label>
                        <input type="text" name="sub_title" class="form-control">
                    </div>
                    <div class="mb-3">
                        <button type="submit" class="btn btn-primary">Add Counter</button>
                    </div>
                </form>
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