<?php 
	session_start();
?>
<html><!-- InstanceBegin template="/Templates/Mobile.dwt.php" codeOutsideHTMLIsLocked="false" -->
<script type="text/javascript" src="Java%20Script/jquery-1.4.1.js"></script>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<!-- InstanceBeginEditable name="doctitle" -->
<title>HTTT Mobile shop</title>
<script src="Java Script/jquery-1.4.1.js"></script>
<script type="text/javascript" src="Java Script/jquery-latest.js"></script>
<script src="Java Script/xuLyTrangDangKy.js"></script>
<?php
if(isset($_POST['submit']))
{
    if($_POST['txtMaKT'] == $_SESSION['code'])
    {
        $accept = "Mật mã khớp!!!";        
    }
    else
    {
        $error = "<span class='error'><img src='img/icon_error.gif' width='15' height='15'> Mật mã không khớp!!!</span>";
    }
    
}
?>

<?php
if(!empty($accept)) 
{ 
	$URL = "DangKyThanhCong.php"; 
	header ("Location: $URL");
	
	include_once("DataProvider.php");
	
	$sql = "Insert into user ( username, password, hoten, ngaysinh, noio) values (";
	$sql .= "'" . $_REQUEST["txtTenDangNhap"] ."',";
	$sql .= "'" . MD5($_REQUEST["txtPassword"]) ."',";
	$sql .= "'" . $_REQUEST["txtHoTen"] . "',";
	$sql .= "'" . $_REQUEST["ddlNgay"]."-".$_REQUEST["ddlThang"]."-".$_REQUEST["ddlNam"]."',";
	$sql .= "'"	. $_REQUEST["txtNoiO"] . "')";
	
	DataProvider::ExecuteQuery($sql);
	
} 
?>

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
             <div style="margin-left:75px; margin-top:50px; margin-bottom:20px;">
             <!--<form name="frmDK" method="post" action="DangKyThanhCong.php" onsubmit="return checkempty()"/>-->
             <form name="frmDK" method="post"> <!--action="DangKyThanhCong.php" onsubmit="return checkempty();"-->
             <!--
             <fieldset style="width: 600px;">
			 <legend>Đăng ký thành viên</legend>
             -->
             <table style="margin-left:60px; width:900px;">
             	<tr>
                	<td colspan="3" class="dangky">.: ĐĂNG KÝ THÀNH VIÊN :.</td>
                </tr>
                 <tr>
                 	<td colspan="3">
                    	<h3>THÔNG TIN TÀI KHOẢN</h3>
                    </td>
                </tr>
                <form method="post" action="">
                <tr>
                    <td id="dt1">
                        Tên đăng nhập <span style="color:red">*</span>:
                    </td>
                    <td>
                         <input type="text" name="txtTenDangNhap" id="tenDangNhap"/>                     
                    </td>
                    <td>&nbsp;<span class="thongbao" id="tenDangNhap_msg"></span>
					</td>
                </tr>
                </form>
                <tr>
                	<td id="dt1">
                    	Mật khẩu <span style="color:red">*</span>:
                    </td>
                    <td>
              			<input type="password" name="txtPassword" id="password"/>
                    </td>
                    <td>&nbsp;<span id="password_msg"></span></td>
                </tr>
                <tr>
                	<td id="dt1">
                    	Xác nhận mật khẩu <span style="color:red">*</span>:
                    </td>
                    <td>
                    	<input type="password" name="txtXacNhanPassword" id="xacNhanPassword"/>
                    </td>
                    <td>&nbsp;<span id="xacNhanPassword_msg"></span></td>
                </tr>
                <tr>
                	<td colspan="3">
                    	<h3>THÔNG TIN CÁ NHÂN</h3>
                    </td>
                </tr>
                <tr>
                    <td width="325" id="dt1">
                    	Họ và tên:
                    </td>
                    <td width="241">
                    	<input type="text" name="txtHoTen"/>
                    </td>
                    <td width="318">&nbsp;</td>
                    
                </tr>
                <tr>
                	<td id="dt1">
                    	Ngày sinh:
                    </td>
                    <td>
                   &nbsp;&nbsp;&nbsp;
                    <select name="ddlNgay" id="ddlNgay">
                    </select>
                    <select name="ddlThang" id="ddlThang">                    	
                    </select>                   
                     <select name="ddlNam" id="ddlNam">   
                     </select>
                     <script type="text/javascript" src="Java Script/NgayThangNam.js"></script>
                    </td>
                    <td>&nbsp;</td>
                </tr>
                <tr>
                    <td id="dt1">
                    	Bạn sống tại:
                    </td>
                    <td>
                    	<input type="text" name="txtNoiO"/>
                    </td>
                    <td></td>
                </tr>
                <tr>
                	<td colspan="3">
                    	
                		<h3>MÃ KIỂM TRA</h3>
                    </td>
                </tr>
                <tr>
                	<td id="dt1">
                    	Mã kiểm tra:
                    </td>
                    <td>
                    	<!--<form action="" method="post">-->
    							<img style="margin-left:10px;" src="captcha/captcha.php" alt="captcha" /><br />
						<!--</form>-->
                    </td>
                    <td>&nbsp;</td>
                </tr>
                <tr>
                	<td id="dt1">
                    	Nhập mã kiểm tra <span style="color:red">*</span>:
                    </td>
                    <td>
                    	<input type="text" name="txtMaKT" id="maKT"/>
                    </td>
                    <td>&nbsp;<span id="maKT_msg"></span><?php if(!empty($error)) echo $error; ?></td>
                </tr>
                <tr>
                	<td align="right">
                    	<input type="button" name="submit" id="submit" value="Đăng ký"/>
                    </td>
                    <td>
                    	<a href="TrangChu.php"><input type="button" name="btnDangKy" value="Trở về trang chủ" /></a>
                    </td>
                    <td>&nbsp;</td>
                </tr>
             </table>
             <!--
             </fieldset>
             -->
             </form>
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