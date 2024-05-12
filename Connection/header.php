<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        header{
    height: 70px;
    backdrop-filter: blur(50px);
    position: fixed;
    width: 100%;
    z-index: 99;
    display: flex;
    align-items: center;
    justify-content: space-between;
    overflow: hidden;
    padding-top: 20px;
    padding-bottom: 20px;
    .icon{
        padding-left: 30px;
        img{
            width: 150px;
            height: 50px;
        }
    }
    }
    </style>
</head>
<body>
    <header>
        <div id="icon" class="icon">
            <img src="img/26-11-2023_15_31_54_GomhuriaOnline_3911701005514.png" alt="منصة">
        </div>
        <div id="links" class="links">
            <ul>
                <li><a href="login.html">
                    <button>إشترك الأن</button>
                </a></li>
                <li><a href="subscriptions.php"><svg xmlns="http://www.w3.org/2000/svg" style="color: rgb(0, 0, 0);" width="25" height="25" fill="currentColor" class="bi bi-bookmark-fill" viewBox="0 0 16 16">
                    <path d="M2 2v13.5a.5.5 0 0 0 .74.439L8 13.069l5.26 2.87A.5.5 0 0 0 14 15.5V2a2 2 0 0 0-2-2H4a2 2 0 0 0-2 2"/>
                  </svg></a></li>
                <li><a href="category.php"><svg xmlns="http://www.w3.org/2000/svg" style="color: rgb(0, 0, 0);" width="25" height="25" fill="currentColor" class="bi bi-book-half" viewBox="0 0 16 16">
                    <path d="M8.5 2.687c.654-.689 1.782-.886 3.112-.752 1.234.124 2.503.523 3.388.893v9.923c-.918-.35-2.107-.692-3.287-.81-1.094-.111-2.278-.039-3.213.492zM8 1.783C7.015.936 5.587.81 4.287.94c-1.514.153-3.042.672-3.994 1.105A.5.5 0 0 0 0 2.5v11a.5.5 0 0 0 .707.455c.882-.4 2.303-.881 3.68-1.02 1.409-.142 2.59.087 3.223.877a.5.5 0 0 0 .78 0c.633-.79 1.814-1.019 3.222-.877 1.378.139 2.8.62 3.681 1.02A.5.5 0 0 0 16 13.5v-11a.5.5 0 0 0-.293-.455c-.952-.433-2.48-.952-3.994-1.105C10.413.809 8.985.936 8 1.783"/>
                  </svg></a></li>
                <li><a href="profile.php"><svg xmlns="http://www.w3.org/2000/svg" style="color: rgb(0, 0, 0);" width="25" height="25" fill="currentColor" class="bi bi-person-circle" viewBox="0 0 16 16">
                    <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0"/>
                    <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8m8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1"/>
                  </svg></a></li>
            </ul>
        </div>
    </header>
</body>
</html>
