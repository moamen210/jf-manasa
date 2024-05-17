<?php
session_start();
include_once('../connection/dbConnection.php');
if(isset($_POST['email']) && isset($_POST['pswd'])){
$email = stripcslashes(htmlspecialchars(strtolower($_POST['email'])));
$pswd = stripcslashes(htmlspecialchars($_POST['pswd']));
$md5_pass = md5($pswd);
$keep = 1;
if($keep = 1){
    setcookie('email',$email,time()+3600,'/');
    setcookie('pswd',$pswd,time()+3600,'/');
}


// if(empty($username)){
//     $user_error = '<p id="error">Please insert username</p>';
//     $err_s = 1;
// }
// if(empty($password)){
//     $pass_error = '<p id="error">Please insert password</p>';
//     $err_s = 1;
//     include_once('index.php');
// }
if(!isset($err_s)){
    $sql = "SELECT * FROM users WHERE email='$email' AND password='$pswd' AND md5_pass='$md5_pass' limit 1";
    $result = mysqli_query($conn,$sql);
    $row = mysqli_fetch_assoc($result);
    $num_rows = mysqli_num_rows($result);
    if($num_rows != 0){
        $_SESSION['name']= $row['name'];
        $_SESSION['id']= $row['id'];
        header('Location:../profile.php');
        exit();

    }else{
        header('Location:../login.php');
        exit();
    }
}
}