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
	include("DataProvider.php");
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
<script type="text/javascript" src="Java Script/Scroll.js"></script>
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
    	<a class="vedautrang" href="#">Về đầu trang</a>
    	<div id="slide_wrap">
    	<div id="QC">
        	<img src="img/2019036328LEFT_ALCATEL.jpg" style="width:150px; height:300px;"/>
		</div>	
            <?php include_once("Template/slide.inc.php")?> 	
        <div id="QC">
        	<img src="img/print-ad-01[6]-72708.jpg" style="width:150px; height:300px;"/>
        </div>    
    	</div>
        <div id="KetQuaTimKiem">
        	<div class="Product-list-wrapper">
                <ul class="Product Homepage">
                    <?php
						$sosp=0;
                        if(isset($_REQUEST["search"])) 
							$query = "Select * from dienthoai where ten like '%".$_REQUEST["search"]."%'";
						else $query = "";
                        $kq = DataProvider::ExecuteQuery($query);
                        if($kq != false && mysql_num_rows($kq) != 0)
                        {
                            while($dong = mysql_fetch_array($kq))
                            {	
								$sosp++;
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
                                            <form action="" method="post">
                                                <input type="submit" name="btnThem" value="Thêm vào giỏ hàng" />
                                                <input type="hidden" name="mathem" value="<?php echo $dong["ma"];?>" />
                                            </form>  
                                            <?php
                                        }
                                        else echo "<input type='button' value='Hết hàng tạm thời' />";
                                    ?>                      
                                </li>
                                <?php
                            }
                        }
                        else echo "<h3> Xin lỗi chúng tôi không tìm thấy sản phẩm nào, vui lòng thử lại !!! </h3>";
						$max_height=ceil($sosp/12)*1168;
                    ?>                  
                </ul>               
    		</div><!--close product-->
             <input type="button" name="XemThem" id="XemThem" value="Xem Thêm" onClick="XemThem();"/>
        </div>
        <script type="text/javascript">
	 var max_height=<?php echo $max_height; ?>;
	 if(max_height<=1168)
	 {
		 $("#XemThem").hide();
	}
    function XemThem()
	{
		 var height=$(".Product-list-wrapper").height()+1168;
			if(height<max_height)
			{
				$(".Product-list-wrapper").animate({'height':height});										
			}
			else
			{
				$(".Product-list-wrapper").animate({'height':height});
				$("#XemThem").hide();
			}
		}
    </script>
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