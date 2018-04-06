<?php
class mysql
{
	var $connection='';
	var $sql='';
	var $cursor=null;

	public function connect_sql()
	{
		$this->connection=mysql_connect("localhost","root","") or die('error connect mysql');
		mysql_set_charset('utf8',$this->connection);

	}
	public function selectdata($db)
	{
		mysql_select_db($db,$this->connection);
	}
	public function setquery($sql)
	{
		$this->sql=$sql;
	}
	public function query()
	{
		$this->cursor=mysql_query($this->sql,$this->connection);
		return $this->cursor; 
	}
	public function rows()
	{
		if(!($cur=$this->query()))
			return null;
		return mysql_num_rows($cur);
	}
	public function allrow()
	{
		if(!($cur=$this->query()))
			return null;
		$array=array();	
		while($row=mysql_fetch_assoc($cur))
		{
			$array[]=$row;
		}
		mysql_free_result($cur);
		return $array;
	}
	public function close()
	{
		mysql_close($this->connection);
	}

}
?>