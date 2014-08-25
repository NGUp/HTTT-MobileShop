<?php
	session_start();
	$cart=$_SESSION['cart'];
	$id=$_REQUEST["ma"];
	if($id == 0)
	{
		unset($_SESSION['cart']);
	}
	else
	{
		unset($_SESSION['cart'][$id]);
	}
	header("location:GioHang.php");
	exit();
?>