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
	<title>Tin Tức</title>
	<style>
	<?php
		include('CSS/style.css');
		include('CSS/tintuc.css');
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
	<li><a href="#">Tin Tức</a></li>
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
	<div id="tintuc">
	<article class="tcot1">
		<?php
		include('PHP/FC_action.php');
		laybaibao("select*From prproduct where ID=1");
		?>
	</article>

	<article class="tcot2">
	<?php
		laybaibao("select ID,title,img From prproduct where ID=2");
	
		laybaibao("select ID,title From prproduct LIMIT 2,2");?>
	</article>

	<ariticle class="mainlist">
	<?php
		laybaibao("select *From prproduct");
	?>
	</ariticle>
	<footer>
	</footer>
	</div>	
</div>
</body>
</HTML>