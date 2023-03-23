<?php 
session_start();
require 'db.php';

$name = $_POST['name'];
$email = $_POST['email'];
$password = $_POST['password'];
$after_hash =password_hash($password, PASSWORD_DEFAULT);

// $upper = preg_match('@[A-Z]@', $password);
// $lower = preg_match('@[a-z]@', $password);
// $number = preg_match('@[0-9]@', $password);
// $spsl = preg_match('@[#,$,%,^,*,&]@', $password);
 //$regex = preg_match('/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)[a-zA-Z\d]{8,}$/', $password);

$flag=true;

//name
if(empty($name)){
    $_SESSION['nam'] = 'kire nam na diya e login korte chas';
    $flag = false;
    header('location:register.php');
}

//email
if(empty($email)){
    $_SESSION['email'] = 'Email na diya abar log in korte chas';
    $flag = false;
    header('location:register.php');
}
else{
    if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
         $_SESSION['email'] = 'Akta Email o valo moto ditaros nah?';
         $flag = false;
         header('location:register.php');
    }
}

//password
if(empty($password)){
    $_SESSION['pass'] = 'Password tah ki ami dimu?';
    $flag = false;
    header('location:register.php');
}
// else{
//     if(!$regex){
//         $_SESSION['pass'] = 'Password Must Contain 1 UpperCase, 1 LowerCase, 1 Number, 1 Symbol nad Min 8 charceter!';
//         $flag = false;
//         header('location:register.php');
//     }
// }


//if all good
if($flag){
    
$insert = "INSERT INTO users(name, email, password)VALUES('$name', '$email', '$after_hash')";
mysqli_query($db_connection, $insert);

$_SESSION['success'] = 'Registered Successfully!';
header('location:register.php');

}

//if any field error
else{
    $_SESSION['nam_value'] = $name;
    $_SESSION['email_value'] = $email;
    header('location:register.php');
}

?>