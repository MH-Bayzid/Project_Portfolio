<?php 
session_start();
require_once('../db.php');
require_once('../login_check.php');

$select_about = "SELECT * FROM  abouts";
$about_res = mysqli_query($db_connection, $select_about);


?>
  <?php require '../dashboard_parts/header.php' ?>
  <div class="row">
            <div class="col-lg-8">
                <table class="table table-striped">
                    <tr>
                        <th>SL</th>
                        <th>Sub Title</th>
                        <th>Title</th>
                        <th>Description</th>
                        <th>Action</th>
                    </tr>
                    <?php foreach($about_res as $sl=> $about) {?>
                        <tr>
                            <td><?=$sl+1?></td>
                            <td><?=$about['sub_title']?></td>
                            <td><?=$about['title']?></td>
                            <td><?= substr($about['desp'], 0, 10); ?></td>
                            
                            <td>
                                <a class="btn btn-info" href="edit_about.php?id=<?=$about['id'];?>" ?>Edit</a>
                            </td>
                        </tr>
                     <?php } ?>
                </table>
            </div>
            <div class="col-lg-4">
                <div class="card">
                    <div class="card-header">
                        <h3>Add Testimonial</h3>
                    </div>
                    <div class="card-body">
                        <form action="about_post.php" method="POST">
                            <div class="mb3">
                                <label for="" class="form-label">Sub Title</label>
                                <input type="text" class="form-control" name="sub_title">
                            </div>
                            <div class="mb3">
                                <label for="" class="form-label">Title</label>
                                <input type="text" name="title" class="form-control">
                            </div>
                            <div class="mb3">
                                <label for="" class="form-label">Description</label>
                                <textarea name="desp" id="" cols="40" rows="5" placeholder="Enter your about description"></textarea>
                            </div>
                            <div class="mb3">
                                <button type="submit" class="btn btn-success">Submit</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
  <?php require '../dashboard_parts/footer.php' ?>