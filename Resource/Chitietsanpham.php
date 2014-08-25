<?php
	session_start();
	include("DataProvider.php");
	if(isset($_SESSION["Quyen"]) && $_SESSION["Quyen"]==0)
	{
		$_SESSION["Quyen"]=2;
	}
	if(isset($_COOKIE["ID"])&&isset($_COOKIE["Quyen"]))
	{
		$_SESSION["username"]=$_COOKIE["ID"];
		$_SESSION["Quyen"]=$_COOKIE["Quyen"];	
	}
	if(isset($_REQUEST["mathem"]))
	{
		$id=$_REQUEST["mathem"];
		if(isset($_SESSION['cart'][$id]))
		{
			$query = "Select soluong from dienthoai where ma = ".$id;
			$kq = DataProvider::ExecuteQuery($query);
			$dong = mysql_fetch_array($kq);
			if($dong["soluong"] > $_SESSION['cart'][$id])
			{
				$qty = $_SESSION['cart'][$id] + 1;
				include_once("addcart.php");
			}
			else
			{
				$qty = $_SESSION['cart'][$id];
				include_once("addcartfail.php");
			}
		}
		else
		{
			$qty=1;
			include_once("addcart.php");
		}
		$_SESSION['cart'][$id]=$qty;
	}
?>
<html><!-- InstanceBegin template="/Templates/Mobile.dwt.php" codeOutsideHTMLIsLocked="false" -->
<script type="text/javascript" src="Java%20Script/jquery-1.4.1.js"></script>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<!-- InstanceBeginEditable name="doctitle" -->
<title>HTTT Mobile shop</title>
<link rel="stylesheet" type="text/css" href="Css/Scroll.css"/>
<script type="text/javascript" src="Java Script/Scroll.js"></script>
<script type="text/javascript" src="Java Script/jquery-1.4.1.js"></script>
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
     <div id="QuangCaoL">
    	<a target="new" href="http://www.hotdeal.vn/ho-chi-minh/"><img src="img/2962410082077573214.jpg"/></a>
     </div>
          	<?php
				$query = "SELECT * FROM dienthoai WHERE ma = ".$_REQUEST["ma"];
				$kq = DataProvider::ExecuteQuery($query);
				if(mysql_num_rows($kq) != 0)
				{
					$dong = mysql_fetch_array($kq);
					$sql = "Update dienthoai set soluotxem = ".($dong["soluotxem"]+1)." where ma = ".$dong["ma"];
					DataProvider::ExecuteQuery($sql);
					$nsx = $dong["nsx"];
					$loai = $dong["loai"];       
            ?>
            <div id="wrapChiTiet">
            	<div id="CoverChiTiet">
                	<img src="<?php echo $dong["cover"];?>" />
                </div>
                <div id="TenSanPham">
                	<?php echo $dong["ten"];?>
                </div>
             <div class="ChiTietSanPham">
             	<div class="HinhAnhChiTiet">
                	<img src="<?php echo $dong["icon"];?>" />
                </div>
                <div class="Thongtinchitiet">
                    <h1 style="color:#00F; font-size:30px;"> THÔNG TIN CHI TIẾT </h1> <br/>
                    <h4>Giá: <?php echo number_format($dong["gia"]);?>đ</h4> <br/>
                    -&nbsp;<strong>Xuất xứ: </strong>
                    <?php echo $dong["xuatxu"];?><br/>
                    -&nbsp;<strong>Nhà sản xuất:</strong>
                    <?php $s="select * from nhasanxuat where ma=".$dong["nsx"];
					$row=mysql_fetch_array(DataProvider::ExecuteQuery($s)) ?>
                    <?php echo $row["ten"];?><br/>
                    -&nbsp;<strong>Mô tả:<br/></strong>
                    <?php echo $dong["mota"];?><br/>  
                    -&nbsp;<strong>Số lượt xem:</strong>
                    <?php echo $dong["soluotxem"];?><br/> 
                    -&nbsp;<strong>Còn lại:</strong>
                    <?php echo $dong["soluong"];?><br/>                   
                </div> 
                <div id="btnMuaHang">
                	<?php
					if($dong["soluong"] > 0)
					{
						?>
                        <form action="Chitietsanpham.php?ma=<?php echo $_REQUEST["ma"];?>" method="post">
                            <input type="submit" name="btnThem" value="Thêm vào giỏ hàng" />
                            <input type="hidden" name="mathem" value="<?php echo $dong["ma"];?>" />
                        </form>
						<?php
					}
					else echo "<input type='button' value='Tạm thời hết hàng' />";
					?>
                </div>              
             </div>
    </div>
             <div>
             	<p>Sản phẩm tương tự</p>
             </div>
             <div id="Cungloai">
             	<div class="Product-list-wrapper2">
            	<ul class="Product Homepage">
                	<?php
                        $query = "SELECT * FROM dienthoai WHERE ma != ".$_REQUEST["ma"]." and nsx = ".$nsx." and loai = ".$loai;
                        $kq = DataProvider::ExecuteQuery($query);
						$dem = 0;
                        while($dong = mysql_fetch_array($kq))
                        {	
                            $dem++;
							?>
                            <li>
                                <a href="Chitietsanpham.php?ma=<?php echo $dong["ma"];?>">
                                    <img src="<?php echo $dong["icon"];?>"/>
                                    <h3><?php echo $dong["ten"];?></h3>
                                    <h4><?php echo number_format($dong["gia"]);?>đ</h4>
                                </a>
                                <?php
								if($dong["soluong"] > 0)
								{
									?>
                                    <form action="Chitietsanpham.php?ma=<?php echo $_REQUEST["ma"];?>" method="post">
                                        <input type="submit" name="btnThem" value="Thêm vào giỏ hàng" />
                                        <input type="hidden" name="mathem" value="<?php echo $dong["ma"];?>" />
                                    </form>
                                    <?php
								}
								else echo "<input type='button' value='Tạm thời hết hàng' />";
							?>
                            </li>
                            <?php
							if($dem == 4) break;
                        }		
				}
				else echo "<h3> Không có trang này !!! </h3>";		
					?>
                </ul>
            </div>
             </div>
              <div id="QuangCaoR">
    			<a target="new" href="http://www.hotdeal.vn/ho-chi-minh/"><img src="img/6962763515218629246.jpg"/></a>
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