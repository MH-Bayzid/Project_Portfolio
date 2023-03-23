<?php 
session_start();
require 'db.php';
require 'login_check.php';
 
?>
<?php require 'dashboard_parts/header.php'; ?>
<div class="container">
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header">
                    <h3>Welcome To Dashboard, <strong class="text-primary"><?=$after_assoc['name']?></strong></h3>
                </div>
                <div class="card-body">
                    <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Unde harum maxime assumenda doloribus mollitia ea neque eum numquam, dolores quam nobis hic praesentium at. Expedita sint saepe repellendus hic sapiente!</p>
                </div>
            </div>
        </div>
    </div>
</div>
<?php require 'dashboard_parts/footer.php'; ?>
            