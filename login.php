<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>manasa-login and signup</title>
	
    <link rel="stylesheet" href="css/style-login.css">
    <link rel="stylesheet" href="css/fonts.css">
    <link rel="stylesheet" href="css/fixed.css">

</head>
<body>
	<div class="main">  	
	<input type="checkbox" id="chk" aria-hidden="true">
			<div class="signup">
				<form action="./action/action-register.php" method="POST">
					<label for="chk" aria-hidden="true">إنشاء حساب</label>
					<input type="text" name="txt" placeholder="الاسم">
					<input type="email" name="email" placeholder="الإيميل">
					<input type="password" name="pswd" placeholder="باسورد">
					<input type="submit" name="submit" class="button" id="submit">
				</form>
			</div>

			<div class="login">
				<form action="./action/action-login.php" method="POST">
					<label for="chk" aria-hidden="true">تسجيل دخول</label>
					<input type="email" name="email" placeholder="الإيميل" value="<?php if(isset($_COOKIE['email'])) echo $_COOKIE['email'] ; ?>" required="">
					<input type="password" name="pswd" placeholder="الباسورد" value="<?php if(isset($_COOKIE['pswd'])) echo $_COOKIE['pswd'] ; ?>" required="">
					<input type="submit" name="submit_login" class="button">
				</form>
			</div>
	</div>
</body>
</html>