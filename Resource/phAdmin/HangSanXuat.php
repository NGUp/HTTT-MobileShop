<title> Hãng Sản Xuất</title>
<?php include_once("include/header.inc.php") ?>

       <div id="contenta">    
        	<?php include_once("include/menu_left.inc.php") ?>
       		<div id="main-content">
            <?php
				if(isset($_GET["btnThemNSX"]))
				{
					$name=$_GET["btnThemNSX"];
					$btn="ThemNSX";
					$ma="";
					$ten="";
					$logo="";
					include_once("ThemNhaSanXuat.php"); 
				} 
				if(isset($_GET["SuaNSX"]))
				{
					$ma=$_GET["SuaNSX"];
					$ten=$_GET["ten"];
					$name="Sửa Thông Tin";
					$btn="SuaNSX";
					$logo="";
					include_once("ThemNhaSanXuat.php"); 
				}
				if(isset($_GET["delNSX"]))
				{
					$name="Xóa Nhà Sản Xuất";
					$btn="XoaNSX";
					$ma=$_GET["delNSX"];
					$ten=$_GET["ten"];
					$logo=$_GET["logo"];
					include_once("ThemNhaSanXuat.php"); 
				}
				
				if(isset($_POST["ThemNSX"]))
				{
					$sql="insert into nhasanxuat (ten) values ('".$_POST["txtNSX"]."')" ;
					DataProvider::ExecuteQuery($sql);
					$ma = -1;
					$query = "Select max(ma) From nhasanxuat";
					$result = DataProvider::ExecuteQuery($query);
					if($result != false)
					{
						$row = mysql_fetch_array($result, MYSQL_ASSOC);
						$ma = $row["max(ma)"];
					}					
					$fileName = $_FILES['filelogo']['name'];
					$pos = strrpos($fileName, ".");
					$fileExtension = substr($fileName, $pos);
					echo $fileName;
					$hinhAnh = "../images/nsx/" .$ma.$fileExtension;
					$logo = "images/nsx/" .$ma.$fileExtension;
					move_uploaded_file($_FILES['filelogo']['tmp_name'], $hinhAnh);
					$query = "Update nhasanxuat Set logo='"	. $logo . "' Where ma=" . $ma;
					DataProvider::ExecuteQuery($query);	
				}
				if(isset($_POST["SuaNSX"]))
				{
					$sql="update nhasanxuat set ten='".$_POST["txtNSX"]."' where ma='".$_POST["txtMa"]."'";
					DataProvider::ExecuteQuery($sql);
					$ma = $_POST["txtMa"];
					$fileName = $_FILES['filelogo']['name'];
					$pos = strrpos($fileName, ".");
					$fileExtension = substr($fileName, $pos);
					echo $fileName;
					$hinhAnh = "../images/nsx/" .$ma.$fileExtension;
					$logo = "images/nsx/" .$ma.$fileExtension;
					move_uploaded_file($_FILES['filelogo']['tmp_name'], $hinhAnh);
					$query = "Update nhasanxuat Set logo='"	. $logo . "' Where ma=" . $ma;
					DataProvider::ExecuteQuery($query);	
				}
				if(isset($_POST["XoaNSX"]))
				{
					$sql="select * from nhasanxuat where ma='".$_POST["txtMa"]."'"; 
					$result=DataProvider::ExecuteQuery($sql);
					$row=mysql_fetch_array($result);
					unlink("../".$row["logo"]);
					$sql="delete from nhasanxuat where ma='".$_POST["txtMa"]."'"; 
					DataProvider::ExecuteQuery($sql);
				}
			?>
             <h1 id="h1">
             	Danh Sách Nhà Sản Xuất:
             </h1>
             <form method="post">
             <table border="1" cellspacing="0">          
         	    <tr>
              	<th>
                	Mã Nhà Sản Xuất
                </th>
                <th >
                	Tên Nhà Sản Xuất
                </th>
                <th>
                	Logo Nhà Sản Xuất
                </th>
                <th colspan="2">
                	Thao tác
                </th>
             	 </tr>             
              	<?php
					
					$sql = "select * from nhasanxuat";
					$result = DataProvider::ExecuteQuery($sql);
					if(count($result)>0)
					{
						while($row = mysql_fetch_array($result))
						{
							echo "<tr>
									<td>".$row["ma"]."</td>
									<td>".$row["ten"]."</td>
									<td><img style='width:200px; height:40px;' src='../".$row["logo"]."'/></td>
									<td><a href=HangSanXuat.php?delNSX=".$row["ma"]."&ten=".$row["ten"]."&logo=".$row["logo"]."><img class='table_img' src='images/remove_img.jpg'></a></td>
									<td><a href=HangSanXuat.php?SuaNSX=".$row["ma"]."&ten=".$row["ten"]."&logo=".$row["logo"]."><img class='table_img' src='images/edit_img.jpg'></a></td>	
								</tr>";
						}
					}
				?>              
             </table>
             </form>
              </div>
              <div id="Them">
              <form action="HangSanXuat.php" method="get">
              	<input type="submit" name="btnThemNSX" value="Thêm hãng sản xuất" id="">
                </form>
              </div>
    </div>
</body></html>
