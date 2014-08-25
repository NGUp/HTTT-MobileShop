<?php 
	session_start();
?>
<html>
<script type="text/javascript" src="../MobileShop/Java Script/jquery-1.4.1.js"></script>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<!-- TemplateBeginEditable name="doctitle" -->
<title>HTTT Mobile shop</title>
<!-- TemplateEndEditable -->
<link rel="stylesheet" type="text/css" href="../MobileShop/Css/style.css"/>
<link rel="stylesheet" type="text/css" href="../MobileShop/Css/MenuNav.css"/>
<link rel="stylesheet" type="text/css" href="../MobileShop/Css/Menu.css"/>
<!-- TemplateBeginEditable name="head" -->
<!-- TemplateEndEditable -->
</head>
<body>
<div id="main_wrap">
    <div id="header">  	
        <div id="DangNhap">
        	<div id="header-DN" style="color:#FFF; font-size:20px;">
                <?php
					if(!isset($_SESSION["Quyen"])||$_SESSION["Quyen"]==2)
					include_once("../Mobileshop/DangNhap.php");
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
        	<a href="../MobileShop/TrangChu.php"><img src="../MobileShop/img/Logo_Poste_Mobile.png" /></a>
         </div>
             <div class="giohang">
                	<a href="../MobileShop/GioHang.php"><input type="image" name="btnGioHang" src="../MobileShop/img/card.png" style="width:40px; height:40px;" />Giỏ hàng</a>				
                    <a href="../MobileShop/ThanhToan.php"><input type="image" name="btnThanhToan" src="../MobileShop/img/Thanh toan.png" style="width:40px; height:40px;" />Thanh toán</a>
                    <a href="../MobileShop/GiaoHang.php"><input type="image" name="btnGiaoHang" src="../MobileShop/img/giaohang.png" style="width:40px; height:40px;" />Giao hàng</a>
                    <a href="../MobileShop/DoiTraBayNgay.php"><input type="image" name="btnDoiTra" src="../MobileShop/img/refresh.png" style="width:40px; height:40px;" />Đổi trả</a>
        </div>
        </div>
        <div id="Menu">
        	<header>
        <nav role="navigation">
            <ul>
                <li> <a href="../MobileShop/TrangChu.php"> <div>TRANG CHỦ</div> </a> </li>                
                <li> <a href="../MobileShop/DienThoai.php"> <div>TẤT CẢ ĐIỆN THOẠI</div> </a> </li>
                <li> <a href="../MobileShop/GioiThieu.php"> <div>GIỚI THIỆU VỀ SHOP</div> </a> </li>             
                <li> <a href="../MobileShop/CauHoi.php"> <div>TRỢ GIÚP</div> </a> </li>
                <div id="div_search">
                <form name="frmSearch" method="get" action="../MobileShop/TimKiem.php">
                            <input type="text" name="search" placeholder="Tìm kiếm" id="Search"/>
                            <input type="submit" value=""/>
                </form>
                </div>
            </ul>
        </nav>
		</header>
        </div>
    </div><!--header-->
    <div id="mid"><!-- TemplateBeginEditable name="Noi Dung" -->Noi Dung<!-- TemplateEndEditable -->
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
</html>