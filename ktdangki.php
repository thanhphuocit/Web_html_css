<?php
	if(empty($_POST['fname'])||empty($_POST['lname'])||empty($_POST['user'])||empty($_POST['pass'])||
		empty($_POST['rpass'])||$_POST["ngaysinh"]=='ngay'||$_POST["thangsinh"]=='thang'||$_POST["namsinh"]=='nam')
	{
		echo"Điền thiếu thông tin!!!";
		exit();
	}
	else
	{
		if($_POST['rpass']!=$_POST['pass'])
		{
			echo"Mật khẩu không trùng khớp";
			exit();
		}
	}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Đăng kí</title>
</head>
<body>
<?php
	include("PHP/class_csdl.php");
	$fname=$_POST['fname'];
	$lname=$_POST['lname'];
	$user=$_POST['user'];
	$pass=$_POST['pass'];
	$ngaysinh=$_POST["ngaysinh"];
	$thangsinh=$_POST["thangsinh"];
	$namsinh=$_POST["namsinh"];
	$gt=$_POST["gt"];
	$ntn=$namsinh.'-'.$thangsinh."-".$ngaysinh;
	//echo $user.":".$pass.":".$ntn.":".$gt;
	$kn=new mysql;
	$kn->connect_sql();
	$kn->selectdata('baocao');
	$kn->setquery("select * From login where username='".$user."'");
	if($kn->rows()<=0)
	{	
		
		$kn->setquery("INSERT INTO login(username,password, ho, ten, ngaysinh, gioitinh)
		 VALUES ('$user','$pass','$lname','$fname','$ntn','$gt')");
		if($kn->query()==TRUE)
		{
			echo"Chúc mừng bạn <b>".$lname." ".$fname."</b>đã đăng kí thành công!";
			echo"<a href='dangnhap.php'>Click để đăng nhập</a>";
		exit();
		}
		else{
			echo" insert thất bại";
			exit();
		}
	}
	else
	{
		echo"Tên tài khoản tồn tại";
		exit();
	}	

?>
</body>
</html>
