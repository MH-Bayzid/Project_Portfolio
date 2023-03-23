<?php 
session_start();
require_once('../db.php');
require_once('../login_check.php');

$id = $_GET['id'];
$select_about_query = "SELECT * FROM abouts WHERE id='$id'";
$select_about = mysqli_query($db_connection, $select_about_query);
$after_assoc_about = mysqli_fetch_assoc($select_about);




?>
  <?php require '../dashboard_parts/header.php' ?>

  <div class="col-lg-4">
                <div class="card">
                    <div class="card-header">
                        <h3>Add Testimonial</h3>
                    </div>
                    <div class="card-body">
                        <form action="edit_about_post.php" method="POST">
                            <div class="mb3">
                                <input type="hidden" name="id" id="<?=$after_assoc_about ['id']; ?>">
                                <label  class="form-label">Sub Title</label>
                                <input type="text" class="form-control" name="sub_title" value="<?=$after_assoc_about['sub_title']; ?>">
                            </div>
                            <div class="mb3">
                                <label class="form-label">Title</label>
                                <input type="text" name="title" class="form-control" value="<?=$after_assoc_about['title']; ?>">
                            </div>
                            <div class="mb3">
                                <label for="" class="form-label">Description</label>
                                <textarea name="desp"  cols="40" rows="5" ><?=$after_assoc_about['desp']; ?></textarea>
                            </div>
                            <div class="mb3">
                                <button type="submit" class="btn btn-success">Submit</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

  <?php require '../dashboard_parts/footer.php' ?>