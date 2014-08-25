<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<?php
	session_start();
	include ("DataProvider.php");
	$query = "Select * from user";
	$kq = DataProvider::ExecuteQuery($query);
	$ID= $_POST["txtDN"];
	$PW= $_POST["txtPW"];
	while($dong = mysql_fetch_array($kq))
	{
		if($ID==$dong["username"] && md5($PW)==$dong["password"])			
		{
			if($PQ=$dong["loai"]==0)
			{					
				$_SESSION["Quyen"]=0;
				$_SESSION["username"] = $ID;
				echo '<script> window.location="phAdmin/main.php"; </script>';
			}
			else
			{
				$_SESSION["Quyen"]=1;
				$_SESSION["username"] = $ID;
				if($_POST["chbox"])
				{
					setcookie("ID",$_SESSION["username"],time()+60);
					setcookie("Quyen",$_SESSION["Quyen"],time()+60);
				}
				header ("location:".$_SERVER['HTTP_REFERER']); 
			}
		}   
	}
	echo "<script> alert('Login failed');</script>";
	echo '<script> window.location="'.$_SERVER['HTTP_REFERER'].'"; </script>';
?>