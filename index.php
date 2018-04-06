<?php
	session_start();
	if(isset($_SESSION["dung"]))
	{
		if($_SESSION["dung"]==1)
		{
		echo"Chào bạn:".$_SESSION["ho"]." ".$_SESSION["ten"]."<br/>";
		echo"<a href='dangnhap.php'>Out</a>";
		}
		else{
		echo"Bạn chưa đăng nhập?";
		echo"<a href='dangnhap.php'>Click</a>";
		
		}
	}
	else{
	echo"Bạn chưa đăng nhập?";
	echo"<a href='dangnhap.php'>Click</a>";
	}
?>
<!DOCTYPE HTML>
<HTML>
<head>
	<title>Home</title>
	<style>
	<?php
		include('CSS/style.css');
	?>
	</style>
	<script type="text/javascript">
		<?php
			include('JS/slideshow.js'); 
		?>
	</script>
	</head>
<body>
<div id="page">
	<header>
	<div id="menu">
	<ul id="vs" >
	<li><a href="index.php">Home</a></li>
	<li><a href="phanloai.php?ploai=1&p=IDLoai&tb=1">ĐiệnThoại</a>
		
	</li>
	<li><a href="phanloai.php?ploai=2&p=IDLoai&tb=2">Laptop</a></li>
	<li><a href="tintuc.php">Tin Tức</a></li>
	<li><a href="#">Trả Góp</a></li>
	</ul>
	</div>
	<div id='banner'>
		<img src="imgtk/1.jpg" name="slideshow"/>
	</div>
	</header>
	<div class="lichsu">
	 <a href="index.php" title="Trang Chủ"><i class="icon"></i></a>
	  	<form id="seach"action="timkiem.php" method="GET">
		<input type="text" name="tim">
		<input type="submit" name ="ok" value="seach">
		</form>
		
	</div>
	<div id="nd">
	<div class="loai">
 	<label>Điện Thoại</label>
 	
	</div>
	<?php
	 	require('PHP/FC_action.php');
	 	laysp("select * From sanpham where HangSX=1 LIMIT 0,1");
	 	laysp("select * From sanpham where HangSX=8 LIMIT 0,1");
	 	laysp("select * From sanpham where HangSX=3 LIMIT 0,1");
	 	laysp("select * From sanpham where HangSX=4 LIMIT 0,1");
	?>

	<div class="loai">
 	<label>Laptop</label>
	</div>
	<?php
	laysp("select * From sanpham where HangSX=8 LIMIT 0,1");
	laysp("select * From sanpham where HangSX=9 LIMIT 0,1");
	laysp("select * From sanpham where HangSX=10 LIMIT 0,1");
	laysp("select * From sanpham where HangSX=11 LIMIT 0,1");
	?>
	<div class="loai">
 	<label>SamSung</label>
	</div>
	<?php
	laysp("select * From sanpham where HangSX=3 LIMIT 0,4");
	?>
	<div class="loai">
 	<label>HTC</label>
	</div>
	
	<?php
	laysp("select * From sanpham where HangSX=4 LIMIT 0,4");
	?>

	<footer>
	</footer>
	</div>	
</div>
</body>
</HTML>