<?php
	session_start();
	$_SESSION["dung"];
	if($_SESSION["dung"]!=1)
	{
		echo"Bạn chưa đăng nhập?";
		echo"<a href='dangnhap.php'>Click</a>";
		exit();
	}
	echo"Chào bạn:".$_SESSION["ho"]." ".$_SESSION["ten"]."<br/>";
	echo"<a href='dangnhap.php'>Out</a>";
?>
<!DOCTYPE html>
<html>
<head>
	<title>Thông Tin</title>
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
		<input type="submit" name="ok" value="seach">
		</form>
		
	</div>
	<div class="loai">
 	<label>Chi Tiết</label>
	</div>
	<div class='title'>
	 <?php
	 	require('PHP/FC_action.php');
		$sql="select*From sanpham where IDSP='".$_GET['idsp']."'";
		layctsp($sql,'TenSP');
	  ?>
	</div>
	<div class="ctsp">
		<img src="<?php echo layctsp($sql,'image');?>"/>	

	</div>
	<fieldset>
	<legend>Cấu Hình</legend>
	<p>Giá: <?php echo layctsp($sql,'Gia');?> $</p>
	<p>Sản Xuất: <?php  $d=(layctsp($sql,'HangSX'));
						$tsql="select*From loai where IDHSX='".$d."'";
						echo layctsp($tsql,'Quocgia');
		?></p>
	<p>Tình Trạng: <?php  echo layctsp($sql,'TinhTrang');?></p>
	<p>Khuyến Mãi: <?php echo layctsp($sql,'KM');?></p>
	<p>Thông Tin: <?php echo layctsp($sql,'ThongTin');?></p>
	</fieldset>
	<footer>
		
	</footer>
</body>
</html>