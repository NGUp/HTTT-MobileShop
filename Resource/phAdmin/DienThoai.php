<title> Điện thoại</title>
<?php include_once("include/header.inc.php") ?>
       <div id="contenta">    
        	<?php include_once("include/menu_left.inc.php") ?>
            <?php 
	if(isset($_POST["btnThemDT"]))
	{
		$ma="";
		$name=$_POST["btnThemDT"];
		$btn="ThemDT";
		$ten="";
		$loai="";
		$hdh="";
		$nsx="";
		$gia="";
		$hinhanh="";
		$anhbia="";
		$xuatxu="";
		$soluong="";
		$mota="";
		include_once("ThemDT.php"); 
	}
	if(isset($_GET["XoaDT"]))
	{
		$ma=$_GET["XoaDT"];
		$name="Xóa Điện Thoại";
		$sql="select * from dienthoai where ma=".$ma;
		$result=DataProvider::ExecuteQuery($sql);
		$row=mysql_fetch_array($result);
		$ten=$row["ten"];
		$btn="XoaDT";
		include_once("include/frm_Xoa.php"); 
	}
	if(isset($_GET["SuaDT"]))
	{	
		$ma=$_GET["SuaDT"];
		$sql="select * from dienthoai where ma=".$ma;
		$result=DataProvider::ExecuteQuery($sql);
		$row=mysql_fetch_array($result);
		$ten=$row["ten"];
		$name="Sửa Thông Tin";
		$btn="SuaDT";
		$loai=$row["loai"];
		$nsx=$row["nsx"];
		$hdh=$row["hdh"];
		$gia=$row["gia"];
		$hinhanh=$row["icon"];
		$anhbia=$row["cover"];
		$xuatxu=$row["xuatxu"];
		$soluong=$row["soluong"];
		$mota=$row["mota"];
		include_once("ThemDT.php");  
	}
	if(isset($_POST["ThemDT"]))
	{
		$sql="insert into dienthoai (ten,hdh,loai,nsx,gia,soluong,xuatxu,mota) values ('".$_POST["txtTenDT"]."','".$_POST["cmbHDH"]."','".$_POST["cmbLoai"]."','".$_POST["cmbNSX"]."','".$_POST["txtGia"]."','".$_POST["txtSoLuong"]."','".$_POST["txtXuatXu"]."','".$_POST["txtMoTa"]."')" ;
		DataProvider::ExecuteQuery($sql);
		$ma = -1;
		$query = "Select max(ma) From dienthoai";
		$result = DataProvider::ExecuteQuery($query);
		if($result != false)
		{
			$row = mysql_fetch_array($result, MYSQL_ASSOC);
			$ma = $row["max(ma)"];
		}			
			$fileName = $_FILES['fileHinhAnh']['name'];
			$pos = strrpos($fileName, ".");
			$fileExtension = substr($fileName, $pos);
			$hinhAnh = "../images/icon/" .$ma.$fileExtension;
			$icon = "images/icon/" .$ma.$fileExtension;
			move_uploaded_file($_FILES['fileHinhAnh']['tmp_name'], $hinhAnh);
			$query = "Update dienthoai Set icon='"	. $icon . "' Where ma=" . $ma;
			DataProvider::ExecuteQuery($query);			
			$fileName = $_FILES['fileHinhBia']['name'];
			$pos = strrpos($fileName, ".");
			$fileExtension = substr($fileName, $pos);
			$hinhBia = "../images/cover/".$ma.$fileExtension;
			$cover = "images/cover/".$ma.$fileExtension;
			move_uploaded_file($_FILES['fileHinhBia']['tmp_name'], $hinhBia);
			$query = "Update dienthoai Set cover='"	. $cover . "' Where ma=" . $ma;
			DataProvider::ExecuteQuery($query);
	}
	if(isset($_POST["SuaDT"]))
	{
		$ma=$_POST["txtma"];
		$sql="update dienthoai set ma =".$ma.", ten='".$_POST["txtTenDT"]."',hdh='".$_POST["cmbHDH"]."',loai='".$_POST["cmbLoai"]."',nsx='".$_POST["cmbNSX"]."',gia='".$_POST["txtGia"]."',soluong='".$_POST["txtSoLuong"]."',xuatxu='".$_POST["txtXuatXu"]."',mota='".$_POST["txtMoTa"]. "'where ma=".$ma ;
		DataProvider::ExecuteQuery($sql);
		if(is_uploaded_file($_FILES['fileHinhAnh']['tmp_name']))
		{
			$fileName = $_FILES['fileHinhAnh']['name'];
			$pos = strrpos($fileName, ".");
			$fileExtension = substr($fileName, $pos);
			$hinhAnh = "../images/icon/" .$ma.$fileExtension;
			$icon = "images/icon/" .$ma.$fileExtension;
			move_uploaded_file($_FILES['fileHinhAnh']['tmp_name'], $hinhAnh);
			$query = "Update dienthoai Set icon='"	. $icon . "' Where ma=" . $ma;
			DataProvider::ExecuteQuery($query);		
		}
		if(is_uploaded_file($_FILES['fileHinhBia']['tmp_name']))
		{
			$fileName = $_FILES['fileHinhBia']['name'];
			$pos = strrpos($fileName, ".");
			$fileExtension = substr($fileName, $pos);
			$hinhBia = "../images/cover/".$ma.$fileExtension;
			$cover = "images/cover/".$ma.$fileExtension;
			move_uploaded_file($_FILES['fileHinhBia']['tmp_name'], $hinhBia);
			$query = "Update dienthoai Set cover='"	. $cover . "' Where ma=" . $ma;
			DataProvider::ExecuteQuery($query);
		}
	}
	if(isset($_POST["XoaDT"]))
	{ 
		$sql="select * from dienthoai where ma=".$_POST["ma"];
		$result=DataProvider::ExecuteQuery($sql);
		$row=mysql_fetch_array($result);
		unlink("../".$row["icon"]);
		unlink("../".$row["cover"]);
		$sql="delete from dienthoai where ma=".$_POST["ma"];
		DataProvider::ExecuteQuery($sql);
	}
?>
       		<div id="main-content">
            <div id="search">
            	 <form action="DienThoai.php" method="post">
                 	<input type="text" placeholder="Tìm kiếm theo tên" name="TimKiem" />
                 	<input type="submit" name="btnTim" value="Tìm" id="" />
                 </form>
            </div>
             <h1 id="h1"> Danh Sách Điện Thoại </h1>            
             <form method="post" action="DienThoai.php" >
             <?php 
				$trang=1;
				if(isset($_GET["trang"]))
				{
					$trang=$_GET["trang"];
				}
				$sodong=10;
				$vtri=($trang-1)*$sodong;					
				if(isset($_REQUEST["btnTim"]))
				{
					$query1 = "Select * from dienthoai where ten like '%".$_REQUEST["TimKiem"]."%' limit $vtri,$sodong";
					$sql = "Select count(*) from dienthoai where ten like '%".$_REQUEST["TimKiem"]."%'";
				}
				else
				{
					$query1 = "select * from dienthoai limit $vtri,$sodong";
					$sql = "select count(*) from dienthoai";
				}					
				$result1 = DataProvider::ExecuteQuery($sql);
				$row1=mysql_fetch_array($result1);
				$sosp=$row1[0];
				$tongsotrang=ceil($sosp/$sodong);				
			?>
             <table border="1" cellspacing="0" style=" width:1240px; margin-left:0;">          
         	    <tr>
              		<th>Mã</th>
                	<th>Tên</th>
                	<th>Loại</th>
                	<th>HĐH</th>
                	<th>Hãng</th>
                	<th>Icon</th>
                	<th>Cover</th>
                	<th>Xuất xứ</th>
                	<th>Số lượng</th>
                	<th>Số lượt xem</th>
                	<th>Đã bán</th>
                	<th>Mô tả</th>
                	<th>Tình trạng</th>
                	<th>Giá</th>
                	<th colspan="2">Thao tác</th>
      			</tr>
              	<?php		
					$result = DataProvider::ExecuteQuery($query1);
					if(count($result)>0)
					{
						while($row = mysql_fetch_array($result))
						{
							echo "<tr>
									<td>".$row["ma"]."</td>
									<td>".$row["ten"]."</td>
									<td>".$row["loai"]."</td>
									<td>".$row["hdh"]."</td>
									<td>".$row["nsx"]."</td>
									<td><img style=width:50px; height:50px;' src='../".$row["icon"]."'/></td>
									<td><img style=width:50px; height:50px;' src='../".$row["cover"]."'/></td>
									<td>".$row["xuatxu"]."</td>
									<td>".$row["soluong"]."</td>
									<td>".$row["soluotxem"]."</td>
									<td>".$row["soluotban"]."</td>
									<td>".$row["mota"]."</td>
									<td>".$row["tinhtrang"]."</td>
									<td>".$row["gia"]."</td>
									<td><a href='DienThoai.php?XoaDT=".$row["ma"]."'><img class='table_img' src='images/remove_img.jpg'></a></td>
									<td><a href='DienThoai.php?SuaDT=".$row["ma"]."'><img class='table_img' src='images/edit_img.jpg'></a></td>	
								</tr>";
						}
					}
				?>               
             </table>
             <div id="PhanTrang">
             	<?php 					
					for($i=1;$i<=$tongsotrang;$i++)
					{
						echo "<li class='phantrang1'><a href='DienThoai.php?trang=".$i."'>$i </a></li>";
					}
				?>
             </div>
             	 <div id="Them">
              	<input type="submit" name="btnThemDT" value="Thêm điện thoại" id="">
              </div>
             </div>
              </form>
    </div>
</body>
</html>