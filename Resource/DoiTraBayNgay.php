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
    	<p>Chính sách đổi trả hàng</p>
        <strong>I. PHẠM VI ÁP DỤNG<br /></strong>
       &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;- Sản phẩm được yêu cầu đổi trả phải là sản phẩm không bị vỡ hỏng, còn nguyên tem, đầy đủ phụ kiện và hoá đơn mua hàng.<br />
       &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;- HTTT chỉ nhận đổi trả với các sản phẩm bị lỗi kĩ thuật do nhà sản xuất hoặc vỡ hỏng trong quá trình vận chuyển tới khách hàng.<br />
       &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;- HTTT có quyền từ chối đổi trả với các sản phẩm gặp lỗi do người dùng sử dụng sai (sử dụng sai chức năng, sai hướng dẫn..)<br />
 		<strong>II. QUY TRÌNH ĐỔI TRẢ HÀNG <br /></strong>
		 &nbsp;&nbsp;&nbsp;&nbsp;<b>A. SẢN PHẨM MUA TẠI CỬA HÀNG<br /></b>
       &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;- Quý khách vui lòng kiểm tra kĩ hàng hoá tại cửa hàng trước khi ra về.<br />
       &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;- Cửa hàng HTTT có quyền từ chối đổi trả với các sản phẩm quy định ở mục ĐIỀU KIỆN ÁP DỤNG.<br />
       &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;- Trong vòng 7 ngày kể từ ngày nhận hàng, nếu sản phẩm nằm trong diện có thể đổi trả, quý khách vui lòng mang sản phẩm kèm theo hoá đơn mua hàng đến cửa hàng. Nhân viên cửa hàng sẽ đổi trả cho quý khách. (Chú ý: với các sản phẩm có địa chỉ bảo hành, quý khách vui lòng mang sản phẩm tới cửa hàng, chúng tôi sẽ liên hệ với đơn vị bảo hành để bảo hàng cho quý khách)<br />
 
		&nbsp;&nbsp;&nbsp;&nbsp;<b>B. SẢN PHẨM VẬN CHUYỂN TỚI NHÀ</br></b>
Quý khách vui lòng kiểm tra kĩ hàng hoá ngay khi nhân viên giao hàng mang sản phẩm tới cho quý khách.</br>
       &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;- Nếu xảy ra tình trạng vỡ, hỏng sản phẩm hoặc không đúng sản phẩm quý khách yêu cầu, quý khách vui lòng trả lại ngay cho nhân viên vận chuyển và thông báo cho hotline của HTTT để được hỗ trợ. HTTT sẽ đổi trả sản phẩm khác đúng với yêu cầu khách hàng. </br>
       &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;- Nếu quý khách không kiểm tra hàng hoá, bộ phận vận chuyển mặc nhiên coi sản phẩm giao cho khách hàng đúng với những gì quý khách đặt.</br> 
Trong vòng 7 ngày kể từ ngày nhận hàng, nếu sản phẩm nằm trong diện có thể đổi trả (Xem tại mục PHẠM VI DANH MỤC và ĐIỀU KIỆN ÁP DỤNG), quý khách vui lòng gửi sản phẩm kèm hoá đơn mua hàng về trung tâm Bảo hành của HTTT tại 227 Nguyễn Văn Cừ TP.HCM để chúng tôi kiểm tra.</br>
       &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;- Nếu đúng là lỗi sản phẩm do nhà cung cấp, chúng tôi sẽ tiến hành gửi trả sản phẩm khác cho quý khách. Phí vận chuyển hàng về trung tâm Bảo hành HTTT hoàn toàn do HTTT chịu.</br>
       &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;- Nếu sản phẩm không bị lỗi mà do khách hàng không biết cách sử dụng, chúng tôi sẽ gửi trả lại đúng sản phẩm khách đã mua về cho quý khách. Khách hàng vui lòng thanh toán phí Vận Chuyển về Trung tâm Bảo Hành HTTT và phí chuyển ngược lại hàng cho quý khách.</br>
 
Trường hợp sản phẩm mà khách hàng không ưng ý hoặc không kiểm tra hàng khi nhân viên vận chuyển giao, HTTT có quyền từ chối đổi trả cho quý khách.</br>
HTTT xin chân thành cảm ơn quý khách.</br></br></br></br>

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