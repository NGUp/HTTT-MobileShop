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
    	<div id="GioiThieu" style="text-align:left;">
        	<h2>ĐẶT CÂU HỎI</h2><br /><br /><br /><br />
            Nội dung câu hỏi:<input type="text" name="txtDatCH" value="" style="width:500px; height:30px;" /> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <input type="submit" name="btnGuiCH" value="Gửi câu hỏi" style="width:100px; height:30px; color:#FFF; background-color:#6C9;" /><br />
            (vui lòng đăng ký hoặc đăng nhập trước khi gửi câu hỏi thắc mắc, xin cảm ơn)
        </div>
    	<div id="CachTrang">
        	<img src="img/line border.png" style="width:300px; height:100px;"/>
        </div>
    	<div id="GioiThieu" style="text-align:left;">
        	<h2>CÁC CÂU HỎI THƯỜNG GẶP</h2>
          <b>&nbsp;&nbsp;&nbsp; 1. Hàng được giao đến như thế nào?<br /></b>
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;HTTT Shop giao hàng trong vòng 48 giờ tính từ thời điểm đặt hàng và tính theo thời gian làm việc hành chính trong phạm vi các tỉnh thành: Thành Phố Hồ Chí Minh, Hà Nội, Đà Nẵng, Hải Phòng, Bình Dương, Cần Thơ, Huế, Đắk Lắk, Vinh, Hải Dương, Gia Lai, Thái Bình, Bắc Ninh, Thái Nguyên, Bình Thuận. Đối với địa phương khác, chúng tôi sẽ giao hàng nhanh nhất có thể tùy theo dịch vụ vận chuyển mà quý khách chọn sử dụng và các điều kiện khách quan khác.<br />

		    <b>&nbsp;&nbsp;&nbsp;2. Nếu phát hiện lỗi sản phẩm trong thời hạn bảo hành thì xử lý thế nào?<br /></b>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Quý khách có thể liên hệ trực tiếp với trung tâm hỗ trợ khách hàng của nhà sản xuất. Những thông tin này thường có trong hướng dẫn sử dụng đính kèm theo sản phẩm. Trung tâm sẽ nhanh chóng cho Quý khách biết nguyên nhân gây lỗi sản phẩm của bạn và đề xuất hướng xử lý. Trường hợp không thể liên hệ được với nhà sản xuất, quý khách có thể đến các cửa hàng của chúng tôi để được hỗ trợ trực tiếp.<br />

***Lưu ý: nếu các hư hỏng không thuộc phạm vi bảo hành của nhà sản xuất, khách hàng sẽ phải chịu chi phí cho việc vận chuyển nêu trên.<br />

			<b>&nbsp;&nbsp;&nbsp;3. Làm sao khi hàng bị hư hỏng trong trường hợp quá thời hạn bảo hành?<br /></b>

&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Nếu thời hạn bảo hành đã hết, Quý khách sẽ phải chịu mọi chi phí dịch vụ phát sinh trong quá trình xử lý.

Chúng tôi khuyên Quý khách nên sửa chữa tại những trung tâm dịch vụ được chứng nhận của nhà sản xuất. Quý khách có thể liên hệ trực tiếp các Shop của chúng tôi để được hỗ trợ mang đến trung tâm bảo hành hoặc liên hệ trực tiếp đến các trung tâm bản hành do nhà sản xuất chỉ định. Quý khách có thể tham khảo thêm chính sách bảo hành của chúng tôi tại đây.<br />

<b>&nbsp;&nbsp;&nbsp;4. Làm sao để biết thời hạn bảo hành của sản phẩm?<br /></b>

&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Quý khách sẽ tìm thấy thời hạn bảo hành trong thẻ bảo hành đính kèm sản phẩm của nhà sản xuất hoặc liên hệ với bộ phận chăm sóc khách hàng của chúng tôi qua số đường dây nóng 1800 0000 (từ 08:00 đến 22:00 tất cả các ngày kể cả ngày lễ) để được hướng dẫn kiểm tra hoặc vào đây để tra cứu danh sách cửa hàng của chúng tôi để liên hệ với cửa hàng gần nhất.
            
            
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