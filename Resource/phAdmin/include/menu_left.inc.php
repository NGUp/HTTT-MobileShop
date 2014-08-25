<?php
	include_once("../DataProvider.php");
	$query = "select * from user where loai = 1";
	$kq = DataProvider::ExecuteQuery($query);
	$sothanhvien = mysql_num_rows($kq);
	
	$query = "select sum(tongtien) from hoadon";
	$kq = DataProvider::ExecuteQuery($query);
	$dong = mysql_fetch_array($kq);
	$doanhthu = $dong["sum(tongtien)"];
?>
<div id="lsidebar">
                <p class="info"><a href="">
                <img src="images/office_girl_100482.jpg" style="width:150px; height:150px;" alt=""></a><span>Xin chào Admin</span><a href="#" class="usr"></a></p>
            <div class="clr"></div>
            <h1 class="gd">Quản Lý</h1>
            <ul>
                <li>Điện thoại
                    <ul>
                        <li><a href="DienThoai.php">Danh sách điện thoại</a></li>
                        <li><a href="LoaiDienThoai.php">Loại điện thoại</a></li>
                        <li><a href="HeDieuHanh.php">Hệ điều hành</a></li>
                        <li><a href="HangSanXuat.php">Nhà sản xuất</a></li>
                    </ul>
                </li>
                <li><a href="DonDatHang.php">Đơn đặt hàng</a></li>
                <li><a href="HoaDon.php">Hóa đơn</a></li>                
                <li><a href="NguoiDung.php">Thành viên</a>
                </li>
            </ul>
            <h1 class="gd">Thống Kê</h1>
            <h4>Số Lượng Thành viên: <?php echo $sothanhvien;?></h4>
        	<h4>Doanh thu: <?php echo number_format($doanhthu);?> đ</h4>
        </div>