<?php 
include('./Connection/dbConnection.php');

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>manasa-admin</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"/>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@200..1000&family=Tajawal&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/fonts.css">
    <link rel="stylesheet" href="css/fixed.css">
    <link rel="stylesheet" href="css/style-admin.css">
</head>
<body>
<?php include('./Connection/header.php') ?>    
<!--
    <header>
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
    </header>-->

    <section class="section-1">
        <div class="sec-1">
            <div class="sec-1-1">
                <ul>
                    <li id="button-1">المستخدمين</li>
                    <li id="button-2">رفع مادة</li>
                    <li id="button-3">رفع ترم</li>
                    <li id="button-4">رفع وحدة</li>
                    <li id="button-5">رفع درس</li>
                    <li id="button-6">الدروس</li>
                    <li id="button-7">قبول طلب</li>
                    
                </ul>
            </div>
            <div class="sec-1-2">
                <div id="sec-1-2-1" class="sec-1-2-1">
                    <h3>جميع المستخدمين</h3>
                <br>
                <div>
                    <h4>مؤمن</h4>
                    <h4>مستخدم</h4>
                    <button>تغيير لإدمين</button>
                </div>
                <div>
                    <h4>مؤمن</h4>
                    <h4>مستخدم</h4>
                    <button>تغيير لإدمين</button>
                </div>
                <div>
                    <h4>مؤمن</h4>
                    <h4>مستخدم</h4>
                    <button>تغيير لإدمين</button>
                </div>
                <div>
                    <h4>مؤمن</h4>
                    <h4>مستخدم</h4>
                    <button>تغيير لإدمين</button>
                </div>
                </div>
                <div id="sec-1-2-2" class="sec-1-2-6">
                    <h3>رفع مادة</h3>
                    <br>
                    <form action="">
                        <h5>اختر اسم المادة</h5>
                        <input type="text" placeholder="اسم المادة">
                    </form>
                </div>
                <div id="sec-1-2-3" class="sec-1-2-5">
                    <h3>رفع ترم</h3>
                    <form action="">
                        <br>
                        <h5>اختر المادة</h5>
                        <select id="">
                            
                            <option value="">hhhhhhh</option>
                            <option value="">hhhhhhh</option>
                            <option value="">hhhhhhh</option>
                        </select>
                        <br><br>
                        <h5>اختر اسم الترم</h5>
                        <input type="text" placeholder="اسم الترم">
                    </form>
                </div>
                <div id="sec-1-2-4" class="sec-1-2-4">
                    <h3>رفع وحدة</h3>
                    <br>
                    <form action="">
                        <h5>اختر المادة</h5>
                        <select id="">
                            
                            <option value="">hhhhhhh</option>
                            <option value="">hhhhhhh</option>
                            <option value="">hhhhhhh</option>
                        </select>
                        <h5>اختر الترم</h5>
                        <select id="">
                            
                            <option value="">hhhhhhh</option>
                            <option value="">hhhhhhh</option>
                            <option value="">hhhhhhh</option>
                        </select>
                        <br><br>
                        <h5>اختر اسم الوحدة</h5>
                        <input type="text" placeholder="اسم الوحدة">
                    </form>
                </div>
                <div id="sec-1-2-5" class="sec-1-2-3">
                    <h3>
                        رفع درس
                    </h3>
                    <br>
                    <form action="">
                        <h5>اختر المادة</h5>
                        <select id="">
                            
                            <option value="">hhhhhhh</option>
                            <option value="">hhhhhhh</option>
                            <option value="">hhhhhhh</option>
                        </select>
                        <h5>اختر الترم</h5>
                        <select id="">
                            
                            <option value="">hhhhhhh</option>
                            <option value="">hhhhhhh</option>
                            <option value="">hhhhhhh</option>
                        </select>
                        <h5>اختر الوحدة</h5>
                        <select id="">
                            
                            <option value="">hhhhhhh</option>
                            <option value="">hhhhhhh</option>
                            <option value="">hhhhhhh</option>
                        </select>
                        <br><br>
                        <h5>رفع الفيديو</h5>
                        <label for="video">اضغط هنا</label>
                        <input type="file" id="video" accept="video/mp4">
                    </form>
                </div>
                <div id="sec-1-2-6" class="sec-1-2-2">
                    <h3>جميع الدروس</h3>
                    <br>
                    <div>
                        <h4>علوم</h4>
                        <h4>الدرس الأول</h4>
                        <h4>الوحدة الإولى</h4>
                        <h4>الصف الأول الإعدادي</h4>
                        <h4>الترم الثاني</h4>
                        <br>
                        <hr>
                        <br>
                    </div>
                    <div>
                        <h4>علوم</h4>
                        <h4>الدرس الأول</h4>
                        <h4>الوحدة الإولى</h4>
                        <h4>الصف الأول الإعدادي</h4>
                        <h4>الترم الثاني</h4>
                        <br>
                        <hr>
                        <br>
                    </div>
                    <div>
                        <h4>علوم</h4>
                        <h4>الدرس الأول</h4>
                        <h4>الوحدة الإولى</h4>
                        <h4>الصف الأول الإعدادي</h4>
                        <h4>الترم الثاني</h4>
                        <br>
                        <hr>
                        <br>
                    </div>
                    <div>
                        <h4>علوم</h4>
                        <h4>الدرس الأول</h4>
                        <h4>الوحدة الإولى</h4>
                        <h4>الصف الأول الإعدادي</h4>
                        <h4>الترم الثاني</h4>
                        <br>
                        <hr>
                        <br>
                    </div>
                </div>
                <div id="sec-1-2-7" class="sec-1-2-7">
                    <h3>جميع الطلبات</h3>
                    <br>
                    <div class="sec-1-2-7-1">
                        <div>
                            <h4>طلب قبول</h4>
                            <h5>الإسم : مؤمن ربيع محمد</h5>
                            <h5> المادة : علوم </h5>
                            <h5> الترم : الأول </h5>
                            <h5> الوحدة : الثانية </h5>
                            <h5> الدرس : الأول </h5>
                            <h5>الصورة:</h5>
                            <img src="img/images (1).jfif" alt="">
                            <br>
                            <button>قيول</button>
                            <button>رفض</button>
                            <br><br>
                            <hr>
                            <br><br>
                        </div>
                        
                        <div>
                            <h4>طلب قبول</h4>
                            <h5>الإسم : مؤمن ربيع محمد</h5>
                            <h5> المادة : علوم </h5>
                            <h5> الترم : الأول </h5>
                            <h5> الوحدة : الثانية </h5>
                            <h5> الدرس : الأول </h5>
                            <h5>الصورة:</h5>
                            <img src="img/images (1).jfif" alt="">
                            <br>
                            <button>قيول</button>
                            <button>رفض</button>
                            <br><br>
                            <hr>
                            <br><br>
                        </div>
                        <div>
                            <h4>طلب قبول</h4>
                            <h5>الإسم : مؤمن ربيع محمد</h5>
                            <h5> المادة : علوم </h5>
                            <h5> الترم : الأول </h5>
                            <h5> الوحدة : الثانية </h5>
                            <h5> الدرس : الأول </h5>
                            <h5>الصورة:</h5>
                            <img src="img/images (1).jfif" alt="">
                            <br>
                            <button>قيول</button>
                            <button>رفض</button>
                            <br><br>
                            <hr>
                            <br><br>
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>
    </section>
    <noscript>
        <h1>hhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhh</h1>
    </noscript>
    <script src="js/admin.js"></script>
</body>
</html>