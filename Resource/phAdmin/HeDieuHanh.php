<title> Hệ điều hành</title>

<?php include_once("include/header.inc.php") ?>
       <div id="contenta">    
        	<?php include_once("include/menu_left.inc.php") ?>
       		<div id="main-content">
            <?php 
	if(isset($_GET["btnThemHDH"]))
	{
		$name=$_GET["btnThemHDH"];
		$btn="ThemHDH";
		$ma="";
		$ten="";
		include_once("ThemHDH.php"); 
	}
	if(isset($_GET["delHDH"]))
	{
		$name="Xóa Hệ Điều Hành";
		$btn="XoaHDH";
		$ma=$_GET["delHDH"];
		$ten=$_GET["ten"];
		include_once("ThemHDH.php"); 
	}
	if(isset($_GET["suaHDH"]))
	{	
		$ma=$_GET["suaHDH"];
		$ten=$_GET["ten"];
		$name="Sửa Thông Tin";
		$btn="SuaHDH";
		include_once("ThemHDH.php"); 
	}
	if(isset($_POST["ThemHDH"]))
	{
		$sql="insert into hedieuhanh (ma,ten) values ('".$_POST["txtMaHDH"]."','".$_POST["txtHDH"]."')" ;
		DataProvider::ExecuteQuery($sql);
	}
	if(isset($_POST["SuaHDH"]))
	{
		$sql="update hedieuhanh set ten='".$_POST["txtHDH"]."' where ma='".$_POST["txtMaHDH"]."'";
		DataProvider::ExecuteQuery($sql);
	}
	if(isset($_POST["XoaHDH"]))
	{
	
		$sql="delete from hedieuhanh where ma='".$_POST["txtMaHDH"]."'"; 
		DataProvider::ExecuteQuery($sql);
	}
?>
             <h1 id="h1">
             	Danh Sách Hệ Điều Hành
             </h1>
             <form method="post">
             <table border="1" cellspacing="0" style="width:600px;">          
         	    <tr>
              	<th>
                	Mã Hệ Điều Hành
                </th>
                <th >
                	Tên Hệ Điều Hành
                </th>
                <th colspan="2">
                	Thao tác
                </th>
             	 </tr>             
              	<?php
					
					$sql = "select * from hedieuhanh";
					$result = DataProvider::ExecuteQuery($sql);
					if(count($result)>0)
					{
						while($row = mysql_fetch_array($result))
						{
							echo "<tr>
									<td>".$row["ma"]."</td>
									<td>".$row["ten"]."</td>
									<td><a href='HeDieuHanh.php?delHDH=".$row["ma"]."&ten=".$row["ten"]."'><img class='table_img' src='images/remove_img.jpg'></a></td>
									<td><a href='HeDieuHanh.php?suaHDH=".$row["ma"]."&ten=".$row["ten"]."'><img class='table_img' src='images/edit_img.jpg'></a></td>	
								</tr>";
						}
					}
				?>               
             </table>
             </form>
              </div>
              <div id="Them">
              <form action="HeDieuHanh.php" method="get">
              	<input type="submit" name="btnThemHDH" value="Thêm hệ điều hành" id="">
                </form>
              </div>
    </div>
</body></html>
