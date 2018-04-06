<?php
session_start();
$_SESSION["dung"]=0;
?>
<!DOCTYPE html>
<html>
<head>
	<title>LOGIN</title>
	<style type="text/css">
		<?php 
			include("CSS/login.css");
		 ?>
	</style>
</head>
<body>
	<fieldset>
	<legend>Đăng Nhập</legend>
	<form action="ktlogin.php" method="post">
	<input type="text" name="user" placeholder="Nhập tên tài khoản..." />
	<input type="password" name="pass" placeholder="Nhập mật khẩu... " />
	<input type="submit" name="login" value="Login" />
	</form>
	<span id="create"><a href="dangki.php">Đăng kí</a></span>
	</fieldset>
</body>
</html>