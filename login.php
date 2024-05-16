<?php 
include('./Connection/dbConnection.php');

?>
<!DOCTYPE html>
<html>
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
				<form method="POST" action="./action/action-register.php">
					<label for="chk" aria-hidden="true">إنشاء حساب</label>
					<input type="text" name="txt" placeholder="الاسم" required="">
					<?php if(isset($name_error)){
					echo $name_error;
				} ?>
					<input type="email" name="email" placeholder="الإيميل" required="">
					<?php if(isset($emali_error)){
					echo $email_error;
				} ?>
					<input type="password" name="pswd" placeholder="باسورد" required="">
					<?php if(isset($pass_error)){
					echo $pass_error;
				} ?>
					<input type="submit" name="submit" class="button">
				</form>
			</div>

			<div class="login">
				<form>
					<label for="chk" aria-hidden="true">تسجيل دخول</label>
					<input type="email" name="email" placeholder="الإيميل" required="">
					<input type="password" name="pswd" placeholder="الباسورد" required="">
					<input type="submit" name="submit_login" class="button">
				</form>
			</div>
	</div>
</body>
</html>