<?php
	session_start();
	if($_SESSION["dung"]!=1)
	{
		echo"Bạn chưa đăng nhập?";
		echo"<a href='dangnhap.php'>Click</a>";
		exit();
	}
	echo"Chào bạn:".$_SESSION["ho"]." ".$_SESSION["ten"]."<br/>";
	echo"<a href='dangnhap.php'>Out</a>";
?>
<!DOCTYPE HTML>
<HTML>
<head>
	<title>Go GO
		
	</title>
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
	<form id="seach"action="timkiem.php" method="get">
	<input type="text" name="tim">
	<input type="submit" name ="ok" value="seach">
		</form>
	</div>		
	<div id="cot1">
		<div id="nav1">
		<ul>
			<?php 
			include('PHP/FC_action.php');	
			menu($_GET['tb']);
			?>
		</ul>
		</div>
	</div>
	<div id="cot2">
	<?php
		
		$sql="select*FROM sanpham where ".$_GET['p']."='".$_GET['ploai']."'";
		$url="ploai=".$_GET['ploai']."&p=".$_GET['p']."";
		phantrang($sql,$url);

		?>
	</div>
	</div>
	<footer>
	</footer>
</div>
</body>
</HTML>