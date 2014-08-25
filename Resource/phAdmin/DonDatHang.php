<title> Đơn hàng</title>
<?php
	include_once("include/header.inc.php");
	if(isset($_REQUEST["btnTim"]))
	{
		$query1 = "select * from dondathang where ma = ".$_REQUEST["TimKiem"];
	}
	else
	{
		$query1 = "select * from dondathang";
	}
	if(isset($_REQUEST["magiao"]))
	{
		$query = "Update dondathang set tinhtrang = 1 where ma = ".$_REQUEST["magiao"];
		DataProvider::ExecuteQuery($query);
		
		$now = getdate(); 
		$currentDate = $now["mday"] . "-" . $now["mon"] . "-" . $now["year"]; 
		$query = "select * from dondathang where ma = ".$_REQUEST["magiao"];
		$kq = DataProvider::ExecuteQuery($query);
		$dong = mysql_fetch_array($kq);
		
		$sql = "Insert into hoadon values(".$dong["ma"].",'".$dong["mauser"]."','".$currentDate."',".$dong["tongtien"].")";
		DataProvider::ExecuteQuery($sql);
	}
?>
       <div id="contenta">    
        	<?php include_once("include/menu_left.inc.php") ?>
       		<div id="main-content">
            <div id="search">
            	 <form action="DonDatHang.php" method="post">
                     <input type="text" name="TimKiem" placeholder="Tìm theo mã"/>
                     <input type="submit" name="btnTim" value="Tìm"/>
                 </form>
            </div>
             <h1 id="h1">
             	Danh sách đơn hàng
             </h1>
             <form method="post">
             <table border="1" cellspacing="0" style="width:1000px;">          
                <tr>
                    <th>
                        Mã
                    </th>
                    <th >
                        Khách hàng
                    </th>
                    <th >
                        Ngày đặt
                    </th>
                    <th >
                        Tổng tiền
                    </th>
                    <th >             	
                        Tình trạng
                    </th>
                    <th>
                        Xem chi tiết
                    </th>
             	</tr>             
              	<?php					
					$kq = DataProvider::ExecuteQuery($query1);
					while($dong = mysql_fetch_array($kq))
					{
						?>
						<tr>
							<td><?php echo $dong["ma"];?></td>
							<td><?php echo $dong["mauser"];?></td>
							<td><?php echo $dong["ngaydat"];?></td>
							<td><?php echo number_format($dong["tongtien"]);?> đ</td>
							<td>
								<?php
									if($dong["tinhtrang"]==0)
									{
									?>
										<form action="DonDatHang.php" method="post">
											<input type="submit" name="btnGiaoHang" value="Giao hàng"/>                                            <input type="hidden" name="magiao" value="<?php echo $dong["ma"];?>"/>
										</form>
									<?php
									}
									else
									{
										echo "Đã giao";
									}
								?>
							</td>
							<td style="color:#00F"><a href='ChiTietDonHang.php?ma=<?php echo $dong["ma"];?>'>Chi tiết</a></td>
						</tr>
						<?php
					}
				?>               
             </table>
             </form>
              </div>
    </div>
</body></html>
