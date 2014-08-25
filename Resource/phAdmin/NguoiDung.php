<title> Quản Lý Khách Hàng</title>
<?php include_once("include/header.inc.php") ?>
       <div id="contenta">    
        	<?php include_once("include/menu_left.inc.php") ?>
       		<div id="main-content">
            <?php 			
				if(isset($_REQUEST["XoaND"]))
				{				
					$sql="delete from user where username='".$_REQUEST["XoaND"]."'"; 
					DataProvider::ExecuteQuery($sql);
					header("location:NguoiDung.php");
				}				
			?>
            <div id="search">
            	<form action="NguoiDung.php" method="post">
                 	<input type="text" placeholder="Tìm kiếm theo username" name="TimKiem" />
                 	<input type="submit" name="btnTim" value="Tìm" id="" />
                </form>
            </div>
             <h1 id="h1">
             	Danh sách thành viên
             </h1>
             <form method="post">
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
					$query1 = "Select * from user where loai = 1 and username like '%".$_REQUEST["TimKiem"]."%' limit $vtri,$sodong";
					$sql = "Select count(*) from user where loai = 1 and username like '%".$_REQUEST["TimKiem"]."%'";
				}
				else
				{
					$query1 = "select * from user where loai = 1 limit $vtri,$sodong";
					$sql = "select count(*) from user where loai = 1";
				}					
				$result1 = DataProvider::ExecuteQuery($sql);
				$row1=mysql_fetch_array($result1);
				$sosp=$row1[0];
				$tongsotrang=ceil($sosp/$sodong);				
			?>
             <table border="1" cellspacing="0" style="width:600px;">          
         	    <tr>
              	<th>
                	Username
                </th>
                <th >
                	Họ và tên
                </th>
                <th >
                	Ngày sinh
                </th>
                <th >
                	Địa chỉ
                </th>
                <th>
                	Xóa
                </th>
             	 </tr>             
              	<?php					
					$kq = DataProvider::ExecuteQuery($query1);
					if(mysql_num_rows($kq)!=0)
					{
						while($dong = mysql_fetch_array($kq))
						{
							?>
							<tr>
                                <td><?php echo $dong["username"];?></td>
                                <td><?php echo $dong["hoten"];?></td>
                                <td><?php echo $dong["ngaysinh"];?></td>
                                <td><?php echo $dong["noio"];?></td>
                                <td><a href="NguoiDung.php?XoaND=<?php echo $dong["username"];?>"><img src="images/remove_img.jpg" style="width:30px; height:30px;"></a></td>
                            </tr>
                            <?php
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
             </form>
              </div>
    </div>
</body>
</html>