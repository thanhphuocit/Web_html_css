<?php
	require('class_csdl.php');
	require('class_pagination.php');

/*---------------------------------------------------ham tin tuc*/
	function laybaibao($sql)
	{
		$kn=new mysql;
		$kn->connect_sql();
		$kn->selectdata('baocao');
		$kn->setquery("$sql");
		foreach($kn->allrow() as $key => $value)
		{	
			
			echo "<a href='cttintuc.php?id=".$value['ID']."'>";
			if(isset($value['img']))
			{
			echo"<img src='".$value['img']."'/>";
			}
			echo"<h3>".$value['title']."</h3>";
			if(isset($value['summary']))
			{
			echo "<strong>".$value['summary']."</strong>";
			}
			echo"<p></p>";
		   echo "</a>";
		   
		}  
		$kn->close();
	}
	function docfiletxt($bien)
	{
		$kn=new mysql;
		$kn->connect_sql();
		$kn->selectdata('baocao');
		$kn->setquery("select * From prproduct where ID='".$bien."'");
		foreach ($kn->allrow() as $key => $value) {
			$duongdan=$value['link'];
		}
		$fp = @fopen($duongdan, "r");
		if (!$fp) {
    	echo 'Mở file không thành công';
		}
		else
		{
			while(!feof($fp))
			{
				echo fgets($fp)."<br/>";
			}
		}
		$kn->close();
	}
/*---------------------------------------------------ham tin tuc----END*/
	function laysp($sql)
	{
		$kn=new mysql;
		$kn->connect_sql();
		$kn->selectdata('baocao');
		$kn->setquery("$sql");
		foreach ($kn->allrow() as $key => $value)
		{
			echo"<article class='sanpham'>";
			echo "<a href='chitiet.php?idsp=".$value['IDSP']."'>";
			echo"<img src='".$value['image']."'/></a>";
			echo"<article class='tt'>"."<h3>".$value['TenSP']."</h3>";
			echo "<strong>".$value['Gia']."$</strong>"."</article>";
			echo"</article>";
		}
		$kn->close();		
	}
	function laysp2($sql)
	{
		$kn=new mysql;
		$kn->connect_sql();
		$kn->selectdata('baocao');
		$kn->setquery("$sql");
		foreach ($kn->allrow() as $key => $value)
		{
			echo"<article class='sanpham1'>";
			echo "<a href='chitiet.php?idsp=".$value['IDSP']."'>";
			echo"<img src='".$value['image']."'/></a>";
			echo"<article class='tt1'>"."<h3>".$value['TenSP']."</h3>";
			echo "<strong>".$value['Gia']."$</strong>"."</article>";
			echo"</article>";
		}
		$kn->close();		
	}
	function layctsp($sql,$field)
	{	$p='';
		$kn=new mysql;
		$kn->connect_sql();
		$kn->selectdata('baocao');
		$kn->setquery("$sql");
		foreach ($kn->allrow() as $key => $value) {
			$p=$value["$field"];
		}
		$kn->close();
		return $p;
		
	}
	function phantrang($sql,$url)
	{
		$kn=new mysql;
		$pt=new pagination;
		$kn->connect_sql();
		$kn->selectdata('baocao');
		$kn->setquery("$sql");
		$totalrecord=$kn->rows();
		$kn->close();
		$limit=$pt->limit;
		$start=$pt->start();
		$totalpage=$pt->totalpage($totalrecord);
		$sql.="LIMIT $start,$limit";
		laysp2($sql);
		echo"<div id='pt'>";
		echo $pt->listpage($url,$totalpage);
		echo"</div>";
	}
	function menu($bien)
	{
		$tp = new mysql;
		$tp->connect_sql();
		$tp->selectdata("baocao");
		$tp->setquery("select *FROM loai where idtb='".$bien."'");
		foreach ($tp->allrow()as $key =>$value) {

		echo"<li><a href='phanloai.php?tb=".$bien."&p=HangSX&ploai=".$value['IDHSX']."'>".$value['TenHSX']."</a></li>";

		}
		$tp->close();
	}
	function search()
	{
		if (isset($_REQUEST['ok']))
		{
    		$search = addslashes($_GET['tim']);
    		if (empty($search))
    		{
        	echo "Yeu cau nhap du lieu vao o trong";
    		} 
    		else
    		{
    		$sql="select*From sanpham where TenSP like '%$search%'";
			$url="tim=".$_GET['tim']."&ok=".$_GET['ok']."";
			echo "<p>Kết quả cho  cụm từ tìm kiếm".$search."</p>";
			phantrang($sql,$url);
			}	
		}
	}
?>
