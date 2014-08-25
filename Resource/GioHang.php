<?php
include("DataProvider.php");
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
if(isset($_REQUEST["CapNhat"]))
{
	foreach($_REQUEST["qty"] as $key=>$value)
	{
		if( ($value == 0) and (is_numeric($value)))
		{
			unset ($_SESSION['cart'][$key]);
		}
		elseif(($value > 0) and (is_numeric($value)))
		{
			$_SESSION['cart'][$key]=$value;
		}
	}
	header("location:GioHang.php");
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
                   <p>THÔNG TIN GIỎ HÀNG CỦA BẠN</p>
             <form action='GioHang.php' method='post'>
             <div class="content">
             	<div>
                    <br class="clean" />                   
                    <table class="shopping_cart_detail_big" border="0" cellspacing="0" cellpadding="0">
                    	<tbody>                        	
							<?php
								$ok=1;
								if(isset($_SESSION['cart']))
								{
									foreach($_SESSION['cart'] as $k => $v)
									{
										if(isset($k))
										{
											$ok=2;
										}
									}
								}
								if($ok == 2)
								{
									foreach($_SESSION['cart'] as $key=>$value)
									{
										$item[]=$key;
									}
									$str=implode(",",$item);
									$total = 0;
									$query="select ma, ten, nsx, gia, icon, soluong from dienthoai where ma in ($str)";
									$kq=DataProvider::ExecuteQuery($query);
									if(mysql_num_rows($kq)!=0)
									{									
									?>
									<tr>
										<th width="5%">
										</th>
										<th width="46%">
											Điện thoại
										</th>
										<th width="14%">
											Đơn giá
										</th>
										<th width="15%">
											Số lượng
										</th>
										<th width="16%">
											Thành tiền
										</th>
										 <th width="15%">
										</th>
									</tr>                                   
  									<?php
									}
									while($dong = mysql_fetch_array($kq))		
									{
									?>
                                    <tr>
                                        <td width="40%">
                                            <img src="<?php echo $dong["icon"];?> " style="width:50px; height:50px;" />
                                        </td>
                                        <td>
                                            <?php echo $dong["ten"];?>
                                        </td>
                                        <td align="center" width="30px">
                                            <?php echo number_format($dong["gia"])."đ";?>
                                        </td>
                                        <td align="center" width="20%">
                                            <input type="number" max="<?php echo $dong["soluong"];?>" min="0" name="<?php echo 'qty['.$dong["ma"].']';?>" value="<?php echo $_SESSION['cart'][$dong["ma"]];?>" style="width:100px;"/>
                                        </td>
                                        <td align="center" overflow:hidden;="overflow:hidden;">
                                            <?php echo number_format($_SESSION['cart'][$dong["ma"]]*$dong["gia"])."đ";?>
                                        </td>
                                        <td align="center">
                                            <a href='delcart.php?ma=<?php echo $dong["ma"];?>'>Xóa</a>
                                        </td>
                                    </tr>
                                        <?php
										$total+=$_SESSION['cart'][$dong["ma"]]*$dong["gia"];
									}
							?>
                            <tr>
                            	<td colspan="6" align="right" style="border-right:1px solid #666;" bgcolor="#66CC99">
                                <div class="form_sum_big1">
                                </div>
                                <div class="form_sum_big">
                                    <div class="row">
                                        <span class="row_L">Tổng cộng:</span>
                                        <span class="row_R sum" style="padding-right:20px;"><?php echo number_format($total)."đ";?></span>
                                        <br class="clean" />
                                    </div>
                                </div>
                                </td>
                            </tr>
                            
                        </tbody>
                    </table>
                </div>
             </div>
             <div id="button_ThanhToan">
                <div id="button_ThanhToan2">
             		<a href="delcart.php?ma=0"><input style="margin-left:250px;" type="button" name="btnXoa" value="Xóa giỏ hàng" /></a>
                </div>
                <div id="button_ThanhToan1">
             		<a href="GioHang.php"><input type="submit" name="CapNhat" value="Cập nhật giỏ hàng" /></a>
                </div>
                <div id="button_ThanhToan2">
             		<a href="ThanhToanThanhCong.php"><input type="button" name="btnThanhToan" value="Tiến hành thanh toán" /></a>
                </div>
             </div>
         </div>
     </form>
			<?php
                }
                else
                {
                    echo "<div class='pro'>";
                    echo "<h3>Bạn không có món hàng nào trong giỏ hàng !!!</h3>";
                    echo "</div>";
                }
            ?>
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