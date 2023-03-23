<?php 
session_start();

session_destroy();
header('location:/Register form/login.php');

?>