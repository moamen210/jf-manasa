<?php 
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>manasa-profile</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"/>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@200..1000&family=Tajawal&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/fixed.css">
    <link rel="stylesheet" href="css/fonts.css">
    <link rel="stylesheet" href="css/style-profile.css">
</head>
<body>
    <?php include('./connection/header.php') ?>  
    <!-- <header>
        <div id="icon" class="icon">
            <img src="img/26-11-2023_15_31_54_GomhuriaOnline_3911701005514.png" alt="منصة">
        </div>
        <div id="links" class="links">
            <ul>
                <li><a href="">
                    <button>إشترك الأن</button>
                </a></li>
                <li><a href=""><svg xmlns="http://www.w3.org/2000/svg" style="color: rgb(0, 0, 0);" width="25" height="25" fill="currentColor" class="bi bi-bookmark-fill" viewBox="0 0 16 16">
                    <path d="M2 2v13.5a.5.5 0 0 0 .74.439L8 13.069l5.26 2.87A.5.5 0 0 0 14 15.5V2a2 2 0 0 0-2-2H4a2 2 0 0 0-2 2"/>
                  </svg></a></li>
                <li><a href=""><svg xmlns="http://www.w3.org/2000/svg" style="color: rgb(0, 0, 0);" width="25" height="25" fill="currentColor" class="bi bi-book-half" viewBox="0 0 16 16">
                    <path d="M8.5 2.687c.654-.689 1.782-.886 3.112-.752 1.234.124 2.503.523 3.388.893v9.923c-.918-.35-2.107-.692-3.287-.81-1.094-.111-2.278-.039-3.213.492zM8 1.783C7.015.936 5.587.81 4.287.94c-1.514.153-3.042.672-3.994 1.105A.5.5 0 0 0 0 2.5v11a.5.5 0 0 0 .707.455c.882-.4 2.303-.881 3.68-1.02 1.409-.142 2.59.087 3.223.877a.5.5 0 0 0 .78 0c.633-.79 1.814-1.019 3.222-.877 1.378.139 2.8.62 3.681 1.02A.5.5 0 0 0 16 13.5v-11a.5.5 0 0 0-.293-.455c-.952-.433-2.48-.952-3.994-1.105C10.413.809 8.985.936 8 1.783"/>
                  </svg></a></li>
                <li><a href=""><svg xmlns="http://www.w3.org/2000/svg" style="color: rgb(0, 0, 0);" width="25" height="25" fill="currentColor" class="bi bi-person-circle" viewBox="0 0 16 16">
                    <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0"/>
                    <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8m8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1"/>
                  </svg></a></li>
            </ul>
        </div>
    </header> -->
    <section class="section-1">
            <div class="sec-1-1">
                
                <div class="sec-1-1-1">
                    <ul>
                        <li id="button-1">معلومات</li>
                        
                        <li id="button-2">تغيير الباسورد</li>
                        
                        <li id="button-3">الإشتراكات</li>
                        
                    </ul>
                </div>
                <hr>
                <div id="sec-1-2-0" class="sec-1-2-0">
<?php
include('./connection/dbConnection.php');
if(isset($_SESSION['id']) && isset($_SESSION['name'])){
    $id = $_SESSION['id'];
    $user = $_SESSION['name'];
}
$info = mysqli_query($conn,"SELECT * FROM users where name='$user'");
while($data = mysqli_fetch_array($info)){




?>
                    <div id="sec-1-2-1" class="sec-1-2-1">
                       <?php echo "<img src='./img/img_profile/".$data['pic']."' alt='profile picture not found'>";?>
                        <form action="./action/action-upload.php" method="POST" enctype="multipart/form-data">
<input type="file" name="file" id="file">
<input type="submit" name="submit" value="UPLOAD">
</form>
                        <hr>
                        <h3>الاسم :  <?php echo $data['name'] ?></h3>
                        <h3>الباسورد:************</h3>
                    </div>
                    
                    <div id="sec-1-2-2" class="sec-1-2-2">
                        <form action="">
                            <input type="password" placeholder="الباسورد الجديد">
                            <input type="password" placeholder="إعادة الباسورد الجديد">
                            <input type="submit" value="تغيير">
                        </form>
                    </div>
                    <div id="sec-1-2-3" class="sec-1-2-3">
                        <div>
                            <h5 class="h5-1">علوم</h5>
                            <h5 class="h5-2">الثاني الإعدادي</h5>
                            <h5 class="h5-3">مفعل</h5>
                        </div>
                        <hr>
                        <div>
                            <h5 class="h5-1">عhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhلوم</h5>
                            <h5 class="h5-2">الثاني الإعدادي</h5>
                            <h5 class="h5-3">منتظر</h5>
                        </div>
                        <hr>
                        <div>
                            <h5 class="h5-1">علوم</h5>
                            <h5 class="h5-2">الثاني الإعدادي</h5>
                            <h5 class="h5-3">ملغي</h5>
                        </div>
                    </div>
                </div>
                <hr>
            </div>
        
            <?php } ?>
    </section>
    <script src="js/profile.js"></script>
</body>
</html>