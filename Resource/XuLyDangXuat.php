<?php
	
	session_start();
	if($_SESSION["Quyen"]==0)
	{
		$_SESSION["Quyen"]=2;
		echo '<script> window.location="TrangChu.php"; </script>';
	}
	else
	{
		setcookie("ID",$_SESSION["username"],time()-60);
		setcookie("Quyen",$_SESSION["Quyen"],time()-60);
		$_SESSION["Quyen"]=2;  
		$link = $_SERVER['HTTP_REFERER'];
		if($link == "http://localhost:8080/MobileShop/ThanhToanThanhCong.php")
		header ("location:TrangChu.php");  
		else
		header ("location:".$_SERVER['HTTP_REFERER']);  
	}
?>