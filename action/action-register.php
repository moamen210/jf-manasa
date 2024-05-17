<?php 
session_start();
include('../connection/dbConnection.php');
if(isset($_POST['submit'])){
$name = stripcslashes($_POST['txt']);
$email = stripcslashes($_POST['email']);
$pass = stripcslashes($_POST['pswd']);
$type = 'user';

$name = htmlentities(mysqli_real_escape_string($conn, $_POST['txt']));
$email = htmlentities(mysqli_real_escape_string($conn, $_POST['email']));
$pass = htmlentities(mysqli_real_escape_string($conn, $_POST['pswd']));
$md5_pswd = md5($pass);

$check_user = "SELECT * FROM `users` WHERE email='$email'";
$check_result = mysqli_query($conn,$check_user);
$num_rows = mysqli_num_rows($check_result);
if($num_rows != 0){
    // $email_error = 'sorry username already exist , chnage another one ';
    $err_s = 1 ;
}


// if(empty($name)){
//     $name_error = 'رجاء كتابة الاسم <br>';
//     $err_s = 1 ;
// }

// if(empty($email)){
//     $email_error = 'رجاء كتابة الايميل <br>';
//     $err_s = 1 ;
// }elseif(!filter_var($email,FILTER_VALIDATE_EMAIL)){
//     $email_error = 'رجاء كتابة الايميل بشكل صحيح <br>';
//     $err_s = 1 ;
// }

// if(empty($pass)){
//     $pass_error = 'رجاء كتابة الباسورد <br>';
//     $err_s = 1 ;
//     header('location:../login.php');
// }elseif(strlen($pass) < 8){
//     $pass_error = 'رجاء كتابة الباسورد اكبر من 8 حروف او ارقام <br>';
//     $err_s = 1 ;
//     header('location:../login.php');
// }
else{
    if(($err_s == 0) && ($num_rows == 0)){
        $sql = "INSERT INTO users(name, email, password, md5_pass, type)
        VALUES ('$name', '$email', '$pass', '$md5_pswd', '$type')";
        mysqli_query($conn,$sql);
        header('location:../profile.php');
    }else{
        header('location:../login.php');
    }
}
}
?>