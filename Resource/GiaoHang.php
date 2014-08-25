<?php 
	session_start();
?>

<html><!-- InstanceBegin template="/Templates/Mobile.dwt.php" codeOutsideHTMLIsLocked="false" -->
<script type="text/javascript" src="Java%20Script/jquery-1.4.1.js"></script>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<!-- InstanceBeginEditable name="doctitle" -->
<title>HTTT Mobile shop</title>
<!-- InstanceEndEditable -->
<link rel="stylesheet" type="text/css" href="Css/style.css"/>
<link rel="stylesheet" type="text/css" href="Css/MenuNav.css"/>
<link rel="stylesheet" type="text/css" href="Css/Menu.css"/>
<!-- InstanceBeginEditable name="head" -->
<!-- InstanceEndEditable -->
</head>
<body>
<div id="main_wrap">
    <div id="header">  	
        <div id="DangNhap">
        	<div id="header-DN" style="color:#FFF; font-size:20px;">
                <?php
					if(!isset($_SESSION["Quyen"])||$_SESSION["Quyen"]==2)
					include_once("DangNhap.php");
					else
					{
						echo "Xin chào ".$_SESSION["username"]."     ";
						echo" <a style='color:#FFF;' href='XuLyDangXuat.php'>Đăng xuất</a>";
					}
				?>              
            </div>
        </div>
        <div id="header_mid">
        <div id="header-logo">
        	<a href="TrangChu.php"><img src="img/Logo_Poste_Mobile.png" /></a>
         </div>
             <div class="giohang">
                	<a href="GioHang.php"><input type="image" name="btnGioHang" src="img/card.png" style="width:40px; height:40px;" />Giỏ hàng</a>				
                    <a href="ThanhToan.php"><input type="image" name="btnThanhToan" src="img/Thanh%20toan.png" style="width:40px; height:40px;" />Thanh toán</a>
                    <a href="GiaoHang.php"><input type="image" name="btnGiaoHang" src="img/giaohang.png" style="width:40px; height:40px;" />Giao hàng</a>
                    <a href="DoiTraBayNgay.php"><input type="image" name="btnDoiTra" src="img/refresh.png" style="width:40px; height:40px;" />Đổi trả</a>
        </div>
        </div>
        <div id="Menu">
        	<header>
        <nav role="navigation">
            <ul>
                <li> <a href="TrangChu.php"> <div>TRANG CHỦ</div> </a> </li>                
                <li> <a href="DienThoai.php"> <div>TẤT CẢ ĐIỆN THOẠI</div> </a> </li>
                <li> <a href="GioiThieu.php"> <div>GIỚI THIỆU VỀ SHOP</div> </a> </li>             
                <li> <a href="CauHoi.php"> <div>TRỢ GIÚP</div> </a> </li>
                <div id="div_search">
                <form name="frmSearch" method="get" action="TimKiem.php">
                            <input type="text" name="search" placeholder="Tìm kiếm" id="Search"/>
                            <input type="submit" value=""/>
                </form>
                </div>
            </ul>
        </nav>
		</header>
        </div>
    </div><!--header-->
    <div id="mid"><!-- InstanceBeginEditable name="Noi Dung" -->
    	<table id="ThanhToan" border="1">
        	<tr>
            	<th width="70%">
                	Phương thức giao hàng
                </th>
                <th width="15%">
                	Thời gian giao hàng
                </th>
                <th width="15%">
                	Phí vận chuyển
                </th>
            </tr>
            <tr>
            	<td>
                	Đến trực tiếp tại showroom của HTTT
                </td>
                <td>
                	Từ 7h - 22h
                </td>
                <td>
                	Miễn phí
                </td>
            </tr>
            <tr>
            	<td>
                <strong>Gửi qua đường bưu điện</strong><br />
                    Chi phí vận chuyển qua bưu điện:<br />
                    • 150,000 đối với các mặt hàng điện thoại có giá trên 1 triệu đồng<br />
                    • 100,000 đối với các mặt hàng điện thoại có giá dưới 1 triệu đồng<br />
                    Đối tác liên kết vận chuyển:<br />
                    - Công ty cổ phần chuyển pháp nhanh BƯU ĐIỆN (www.ems.com.vn)<br />
                    - Công ty cổ phần chuyển pháp nhanh TÍN THÀNH VN (www.ttcvina.com)<br />
                </td>
                <td>
                	Từ 2 đến 3 ngày
                </td>
                <td>
                	Tùy thuộc vào loại sản phẩm
                </td>
            </tr>
            <tr>
            	<td>
                Giao tận nhà theo yêu cầu (Áp dụng cho khu vực TP.HCM)
                </td>
                <td>
                	Từ 2-4 tiếng
                </td>
                <td>
                	Miễn phí
                </td>
            </tr>
        </table>
	<!-- InstanceEndEditable -->
    </div><!--mid-->
    <div id="footer">
    	<div style="color:#FFF; text-align:center">
        	&copy;
        	ĐẠI HỌC KHOA HỌC TỰ NHIÊN<br>
            Địa chỉ: 227 Nguyễn Văn Cừ, P4, Q5, TPHCM<br>
            Lớp: 12CK5<br>
            Môn: Lập trình web1<br>
            Giáo viên: Trần Văn Quý<br>
            Nhóm: HTTT<br>
            Đồ án cuối kỳ<br>
        </div>
    </div>
</div><!--end wrap-->
</body>
<!-- InstanceEnd --></html>