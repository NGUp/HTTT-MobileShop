
<title> Loại điện thoại</title>
<?php include_once("include/header.inc.php") ?>
       <div id="contenta">    
        	<?php include_once("include/menu_left.inc.php") ?>
            <?php
	
	if(isset($_GET["btnThem"]))
	{
		$nameLDT=$_GET["btnThem"];
		$btnLDT="Them";
		$maLDT="";
		$tenLDT="";
		include_once("ThemLoaiDienThoai.php"); 
	}
	if(isset($_GET["del"]))
	{
		$nameLDT="Xóa loại điện thoại";
		$btnLDT="Xoa";
		$maLDT=$_GET["del"];
		$tenLDT=$_GET["ten"];
		include_once("ThemLoaiDienThoai.php"); 
	}
	if(isset($_GET["sua"]))
	{	
		$maLDT=$_GET["sua"];
		$tenLDT=$_GET["ten"];
		$nameLDT="Sửa Thông Tin";
		$btnLDT="Sua";
		include_once("ThemLoaiDienThoai.php"); 
	}
	if(isset($_POST["Them"]))
	{	
		$sql="insert into loaidienthoai (ma,ten) values ('".$_POST["txtMaLoai"]."','".$_POST["txtLoai"]."')";
		DataProvider::ExecuteQuery($sql);
	}
	if(isset($_POST["Sua"]))
	{
		$sql="update loaidienthoai set ten='".$_POST["txtLoai"]."' where ma='".$_POST["txtMaLoai"]."'";
		DataProvider::ExecuteQuery($sql);
	}
	if(isset($_POST["Xoa"]))
	{
		$sql="delete from loaidienthoai where ma='".$_POST["txtMaLoai"]."'";
		DataProvider::ExecuteQuery($sql);
	}	
?>
       		<div id="main-content">
             <h1 id="h1">
             	Danh Sách Loại Điện Thoại
             </h1>
             <form method="post">
             <table border="1" cellspacing="0" style="width:600px;">          
         	    <tr>
              		<th>Mã</th>
                	<th>Tên</th>
                	<th colspan="2">Thao tác</th>
           		</tr>	            
              	<?php
					
					$sql = "select * from loaidienthoai";
					$result = DataProvider::ExecuteQuery($sql);
					if(count($result)>0)
					{
						while($row = mysql_fetch_array($result))
						{
							echo "<tr>
									<td>".$row["ma"]."</td>
									<td>".$row["ten"]."</td>
									<td><a href='LoaiDienThoai.php?del=".$row["ma"]."&ten=".$row["ten"]."'><img class='table_img' src='images/remove_img.jpg'></a></td>
									<td><a href='LoaiDienThoai.php?sua=".$row["ma"]."&ten=".$row["ten"]."'><img class='table_img' src='images/edit_img.jpg'></a></td>	
								</tr>";
						}
					}
				?>               
             </table>
             </form>
              </div>
              <div id="Them">
              <form action="LoaiDienThoai.php" method="get">
              	<input type="submit" name="btnThem" value="Thêm loại điện thoại" id="" />
              </form>
              </div>
    </div>
</body></html>
