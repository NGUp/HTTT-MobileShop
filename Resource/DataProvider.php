<?php
class DataProvider 
{
	public static function ExecuteQuery($sql)
	{
		$connection = mysql_connect("localhost","root","") or die ("couldn't connect to localhost");
		mysql_select_db("mobileshop",$connection);				
		mysql_query("set names 'utf8'");		
		$result = mysql_query($sql,$connection);		
		mysql_close($connection);		
		return $result;
	}
}
?>