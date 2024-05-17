<?php
session_start();
include_once('../connection/dbConnection.php');
// if(empty($_POST['file'])){
//     $error = 'please choose photo to upload!';
//     include_once('home.php');
// }else{
    
// }
if(isset($_SESSION['id']) && isset($_SESSION['name'])){
    $id = $_SESSION['id'];
   

if(isset($_POST['submit'])){

    $file = $_FILES['file'];
    $file_name = $_FILES['file']['name'];
    $file_size = $_FILES['file']['size'];
    $file_error = $_FILES['file']['error'];
    $file_type = $_FILES['file']['type'];
    $file_tmp = $_FILES['file']['tmp_name'];  // hello . png

    $file_ext = explode('.',$file_name);
    $file_actual_ext = strtolower(end($file_ext));
    $allowed  = array('jpg','jpge','png','svg');
    if(in_array($file_actual_ext,$allowed)){
        if($file_error === 0){ // 1000000 = 1mb
            if($file_size < 3000000){
                $file_new_name =  uniqid('',true).'.'.$file_actual_ext;
                $target = '../img/img_profile/'. $file_new_name;
                $sql = "UPDATE users SET pic='$file_new_name' WHERE id='$id'";
                mysqli_query($conn,$sql);
                move_uploaded_file($file_tmp,$target);
                header('location:../profile.php');


            }else{
                header('location:../profile.php');
            }

        }else{
            header('location:../profile.php');
            
        }

    }else{
        header('location:../profile');
    }
}
}
