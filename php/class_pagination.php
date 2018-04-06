
<?php
class pagination
{
	public $limit=8;
	protected $_baseurl;

	public function __construct() 
	{
		$this->_baseurl=$_SERVER['PHP_SELF'];
	}

	//tim vi tri start
	public function start()
	{
		if(isset($_GET['start']))
		{
			$start=$_GET['start'];
		}
		else
		{
			$start=0;
		}
		return $start;
	}
	//tim tong so trang
	public function totalpage($totalrecord)
	{
		if(isset($_GET['page']))
		{
			$totalpage=$_GET['page'];
		}
		else
		{
			$totalpage=ceil($totalrecord/$this->limit);
		}	
		return $totalpage;
	}

	public function listpage($url,$totalpage)
	{
		
		if($totalpage>=1) //khong phai tu 2 tro len
		{	$start=$this->start();
			$limit=$this->limit;
			$listpage='';
			$current=($start/$limit)+1;//tinh trang hien tai
		
			if($current!=1) //tao nut ve dau trang
			{
				$newstart=$start-$limit;
				$listpage.="<a href='".$this->_baseurl."?".$url."&page=$totalpage&start=$newstart'>Pre</a>";	
			}

			for($i=1;$i<= $totalpage;$i++)
			{
				$newstart=($i-1)*$limit;
				if($i==$current){
					$listpage.="<span class='pageht'>".$i."</span>";
				}
				else
				{
				$listpage.="<a href='".$this->_baseurl."?".$url."&page=$totalpage&start=$newstart'>".$i."</a>";
				}
			}
			if($current!=$totalpage)
			{
				$newstart=$start+$limit;
				$listpage.="<a href='".$this->_baseurl."?".$url."&page=$totalpage&start=$newstart'>Next</a>";
			}
		return $listpage;
		
		}
	}
}
?>
