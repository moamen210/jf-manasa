<?php 
session_start();
include('../Connection/dbConnection.php');
if(isset($_POST['submit'])){
$name = stripcslashes($_POST['txt']);
$email = stripcslashes($_POST['email']);
$pass = stripcslashes($_POST['pswd']);

$name = htmlentities(mysqli_real_escape_string($conn, $_POST['txt']));
$email = htmlentities(mysqli_real_escape_string($conn, $_POST['email']));
$pass = htmlentities(mysqli_real_escape_string($conn, $_POST['pswd']));
$md5_pswd = md5($pass);
if(empty($name)){
    $name_error = 'رجاء كتابة الاسم <br>';
}
if(empty($email)){
    $email_error = 'رجاء كتابة الايميل <br>';
}elseif(!filter_var($email,FILTER_VALIDATE_EMAIL)){
    $email_error = 'رجاء كتابة الايميل بشكل صحيح <br>';
}
if(empty($pass)){
    $pass_error = 'رجاء كتابة الباسورد <br>';
}elseif(strlen($pass) < 8){
    $pass_error = 'رجاء كتابة الباسورد اكبر من 8 حروف او ارقام <br>';
}
}
?>