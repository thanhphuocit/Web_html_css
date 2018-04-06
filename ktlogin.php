<!DOCTYPE html>
<html>
<head>
	<title>Kiem Tra</title>
</head>
<body>
<?php
	include("PHP/class_csdl.php");
	session_start();
	$_SESSION["user"]=$_POST["user"];
	$_SESSION["pass"]=$_POST["pass"];
	$kn=new mysql;
	$kn->connect_sql();
	$kn->selectdata("baocao");
	$kn->setquery("select * FROM login where username='".$_SESSION["user"]."'");
	$dem=$kn->rows();
	if($dem =='')
	{
		echo"Bạn nhập sai mật khẩu or password!!";
		exit();
	}
	else
	{
		foreach($kn->allrow()as $key => $value)
		{
			$ten=$value['ten'];
			$ho=$value['ho'];
			$tam=$value['password'];
		}
		$kn->close();
		if($_SESSION["pass"]!=$tam)
		{	
			echo"Bạn nhập sai mật khẩu or password!!";
			
			@mysql_free_result($tam);
			exit();

		}
		$_SESSION["dung"]=1;
		echo"Chào bạn:".$ho." ".$ten."<br/>";
		echo"<a href='index.php'>Click vào đây để chuyển hướng!</a>";
		$_SESSION["ten"]=$ten;
		$_SESSION["ho"]=$ho;
	}


?>
</body>
</html>
