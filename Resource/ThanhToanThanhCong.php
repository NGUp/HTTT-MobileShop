<?php	
	include("DataProvider.php");
	session_start();
	if(!isset($_SESSION['cart'])||!isset($_SESSION['Quyen'])||$_SESSION['Quyen']==2)
	{
		echo "<script> alert('Vui lòng đăng nhập để mua hàng !!!');</script>";
		echo '<script> window.location="GioHang.php";</script>'; 
	}
	else
	{
		foreach($_SESSION['cart'] as $key=>$value)
		{
			$item[]=$key;
		}
		$str=implode(",",$item);	
			
		$query = "select * from dienthoai where ma in ($str)";
		$kq = DataProvider::ExecuteQuery($query);	
		if(mysql_num_rows($kq) != 0)
		{		
			$total = 0;
			$now = getdate(); 
			$currentDate = $now["mday"] . "-" . $now["mon"] . "-" . $now["year"]; 
			$sql = "Insert into dondathang (ngaydat, mauser) values ('".$currentDate."','".$_SESSION["username"]."')";
			DataProvider::ExecuteQuery($sql);
			
			$sql = "select max(ma) From dondathang";
			$kq1 = DataProvider::ExecuteQuery($sql);
			$dong1 = mysql_fetch_array($kq1);
			$ma = $dong1["max(ma)"];
					
			while($dong = mysql_fetch_array($kq))		
			{	
				$sql = "Insert into chitietdonhang (ma, tensp, soluong, dongia) values (";
				$sql .= "'".$ma."',";
				$sql .= "'".$dong["ten"]."',";
				$sql .= $_SESSION['cart'][$dong["ma"]].",";
				$sql .= $dong["gia"].")";		
				DataProvider::ExecuteQuery($sql);
				$sql = "Update dienthoai SET soluong = '".($dong["soluong"] - $_SESSION["cart"][$dong["ma"]])."', soluotban = '".($dong["soluotban"] + $_SESSION["cart"][$dong["ma"]])."' where ma = ".$dong["ma"];
				DataProvider::ExecuteQuery($sql);
				$total += $_SESSION['cart'][$dong["ma"]]*$dong["gia"];
			}		
			$sql = "Update dondathang SET tongtien = '".$total."' where ma = ".$ma;			
			DataProvider::ExecuteQuery($sql);
			unset($_SESSION['cart']);				
		}
	}

?>
<html><!-- InstanceBegin template="/Templates/Mobile.dwt.php" codeOutsideHTMLIsLocked="false" -->
<script type="text/javascript" src="Java%20Script/jquery-1.4.1.js"></script>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<!-- InstanceBeginEditable name="doctitle" -->
<title>HTTT Mobile shop</title>
<meta http-equiv="refresh" content="3; url = TrangChu.php" />
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
			<div id="Congratulation">
             	<div id="Congratulation1">
                Đơn đặt hàng của bạn đã được đặt thành công<br />
                <h1>Cảm ơn!</h1><br />
                <table>
                	<tr>
                 		<td><img src="img/imagesTK.jpg" /></td>
                		<td align="justify" valign="top">Cám ơn bạn đã đặt hàng, sẽ có nhân viên của HTTT liên hệ và giao sản phẩm tận nơi cho bạn trong vòng 24 đến 72 tiếng sau khi đơn hàng được xác nhận.<br />
                <i>Lưu ý:</i> Nếu bạn đã mua ít nhất một lần tại HTTT bạn đã trở thành khách hàng quen thuộc, chúng tôi sẽ bỏ qua bước xác nhận đơn hàng và sẽ tiến hành giao hàng cho bạn trong thời gian sớm nhất.
                		</td>
                	</tr>
                </table>
                </div>
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