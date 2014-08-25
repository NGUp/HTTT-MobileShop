<?php 
	session_start();
	if(isset($_SESSION["Quyen"]) && $_SESSION["Quyen"]==0)
	{
		$_SESSION["Quyen"]=2;
	}
	if(isset($_COOKIE["ID"])&&isset($_COOKIE["Quyen"]))
	{
		$_SESSION["username"]=$_COOKIE["ID"];
		$_SESSION["Quyen"]=$_COOKIE["Quyen"];	
	}
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
                  <div id="CachTrang">
        				<img src="img/line border.png" style="width:300px; height:100px;"/>
        		  </div>
                  <div id="GioiThieu">
                  		<h2>GIỚI THIỆU VỀ SHOP </h2>
                        	Các thành viên của nhóm:<br />
                            Hoàng Ngọc Hiệp - 1265009<br />
                            Phạm Chung Tú - 1265037<br />
                            Tô Chính Tín - 1265033<br />
                            Nguyễn Thị Bích Thảo - 1265028<br />
                  </div>
                   <div id="CachTrang">
        				<img src="img/line border.png" style="width:300px; height:100px;"/>
        		  </div>
                  <div id="GioiThieu">
                  		<h2>HỆ THỐNG CỬA HÀNG </h2>
                        	Cửa hàng trung tâm tại:<br />
                            Lớp 12CK5<br />
                            Trường đại học Khoa Học Tự Nhiên<br />
                            227 Nguyễn Văn Cừ, Q5, Tp.HCM <br />
                            Các chi nhánh của cửa hàng đặt tại:<br />
                            Chi nhánh 1: 111 Lạc Long Quân,Q. Tân Phú. Tp.HCM<br />
                            Chi nhánh 2: 222 CMT8, Q.Tân Bình. TP. HCM<br />
                            Chi nhánh 3: 333 Chợ Bà Chiểu, Q3. TP.HCM<br />
                            Chi nhánh 4: 444 Nguyễn Oanh, P.7, Q.Gò Vấp. Tp.HCM <br />
                  </div>
                   <div id="CachTrang">
        				<img src="img/line border.png" style="width:300px; height:100px;"/>
        		  </div>
                  <div id="GioiThieu">
                  		<h2>LIÊN HỆ</h2>
                         Lớp 12CK5<br />
                         Trường đại học Khoa Học Tự Nhiên<br />
                         227 Nguyễn Văn Cừ, Q5, Tp.HCM <br />
                         Hotline: 1800 0000 :D<br />
                  </div>
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