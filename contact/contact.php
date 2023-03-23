<?php 
session_start();
require_once('../db.php');
require_once('../login_check.php');

$select_contacts = "SELECT * FROM contacts";
$select_contacts_res = mysqli_query($db_connection, $select_contacts);
$after_assoc_contacts = mysqli_fetch_assoc($select_contacts_res);




?>

    <?php require '../dashboard_parts/header.php' ?>
    <div class="container">
        <div class="row">
            <div class="col-lg-8 m-auto">
                <div class="mb-3">
                    <?php if(isset($_SESSION['contact_update'] )) { ?>
                        <div class="alert alert-success"><?= $_SESSION['contact_update']  ?></div>
                    <?php } unset($_SESSION['contact_update']) ?>
                </div>
                <div class="card">
                    <div class="card-header">
                        <h3>Edit Contact Informations</h3>
                    </div>
                    <div class="card-body">
                        <form action="contact_post.php" method="POST">
                            <div class="mb-3">
                                <input type="text" name="address" class="form-control" value="<?=$after_assoc_contacts['address'] ?>">
                            </div>
                            <div class="mb-3">
                                <input type="number" name="phone" class="form-control" value="<?=$after_assoc_contacts['phone'] ?>">
                            </div>
                            <div class="mb-3">
                                <input type="email" name="email" class="form-control" value="<?=$after_assoc_contacts['email'] ?>">
                            </div>
                            <div class="mb-3">
                                <button type="submit" class="btn btn-success">Update</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php require '../dashboard_parts/footer.php' ?>