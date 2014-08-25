<title> Chi Tiết Đơn Hàng</title>
<?php include_once("include/header.inc.php") ?>
       <div id="contenta">    
        	<?php include_once("include/menu_left.inc.php") ?>
       		<div id="main-content">
            <div id="search">
            	 <form action="ChiTietDonHang.php" method="post">
                     <input type="text" name="ma"/>
                     <input type="submit" name="btnTim" value="Tìm"/>
                 </form>
            </div>
             <h1 id="h1">
             	Danh Sách Chi Tiết Đơn Hàng
             </h1>
             <form method="post">
             <table border="1" cellspacing="0" style="width:600px;">          
         	    <tr>
              	<th>
                	Mã
                </th>
                <th >
                	Tên sản phẩm
                </th>
                <th >
                	Số lượng
                </th>
                <th >
                	Đơn giá
                </th>
             	 </tr>             
              	<?php					
					if(isset($_REQUEST["ma"]))
					{
						$query = "select * from chitietdonhang where ma = ".$_REQUEST["ma"];
					}
					else
					{
						$query = "select * from chitietdonhang";
					}
					$kq = DataProvider::ExecuteQuery($query);
					if(mysql_num_rows($kq)!=0)
					{
						while($dong = mysql_fetch_array($kq))
						{
							?>
							<tr>
                                <td><?php echo $dong["ma"];?></td>
                                <td><?php echo $dong["tensp"];?></td>
                                <td><?php echo $dong["soluong"];?></td>
                                <td><?php echo number_format($dong["dongia"]);?> đ</td>
                            </tr>
                            <?php
						}
					}
				?>              
             </table>
             </form>
              </div>
    </div>
</body></html>
