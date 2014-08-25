<title> Hóa Đơn</title>
<?php 
if(isset($_REQUEST["btnTim"]))
{
	$query1 = "select * from hoadon where ma = ".$_REQUEST["TimKiem"];
}
else
{
	$query1 = "select * from hoadon";
}
include_once("include/header.inc.php") ?>
       <div id="contenta">    
        	<?php include_once("include/menu_left.inc.php") ?>
       		<div id="main-content">
            <div id="search">
            	<form action="HoaDon.php" method="post">
                     <input type="text" name="TimKiem" placeholder="Tìm theo mã"/>
                     <input type="submit" name="btnTim" value="Tìm"/>
                 </form>
            </div>
             <h1 id="h1">
             	Danh Sách Hóa Đơn
             </h1>
             <form method="post">
             <table border="1" cellspacing="0" style="width:600px;">          
         	    <tr>
              	<th>
                	Mã
                </th>
                <th >
                	Khách hàng
                </th>
                <th >
                	Ngày nhận
                </th>
                <th >
                	Tổng tiền
                </th>
                 <th >
                	Xem chi tiết
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
                                <td><?php echo $dong["ma"];?></td>
                                <td><?php echo $dong["mauser"];?></td>
                                <td><?php echo $dong["ngaynhan"];?></td>
                                <td><?php echo number_format($dong["tongtien"]);?> đ</td>
                                <td style="color:#00F"><a href='ChiTietDonHang.php?ma=<?php echo $dong["ma"];?>'>Chi tiết</a></td>
                            </tr>
                            <?php
						}
					}
				?>                           
             </table>
             </form>
              </div>
    </div>
</body>
</html>