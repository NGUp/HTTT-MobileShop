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
	if(!isset($_SESSION["Quyen"]))
		$_SESSION["Quyen"]=2;
	include("DataProvider.php");
	if(isset($_REQUEST["mathem"]))
	{
		$id=$_REQUEST["mathem"];
		if(isset($_SESSION['cart'][$id]))
		{
			$query = "Select soluong, tinhtrang from dienthoai where ma = ".$id;
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
            
           <div id="mid">
        <div id="main_left">
            <div class="menu1">
                <div class="nav-container">
                    <li>Hãng sản xuất</li>
                </div>
                     <div class="menu">
                        <ul>                    
                        <?php
                            $query = "SELECT ma, logo FROM nhasanxuat";
                            $kq = DataProvider::ExecuteQuery($query);
                            while($dong = mysql_fetch_array($kq))
                            {	
                            ?>
                                <li>
                                    <a href="DienThoai.php?mansx=<?php echo $dong["ma"];?>">
                                        <img src="<?php echo $dong["logo"];?>"/>
                                    </a>
                                </li>
                            <?php
                            }		
                        ?> 
                        </ul>
                    </div>
          	</div>
            <div class="menu1">
                <div class="nav-container">
                    <li>Loại điện thoại</li>
                </div>
                     <div class="menu">
                        <ul>                    
                        <?php
                            $query = "SELECT * FROM loaidienthoai";
                            $kq = DataProvider::ExecuteQuery($query);
                            while($dong = mysql_fetch_array($kq))
                            {	
                            ?>
                                <li> <a href="DienThoai.php?mal=<?php echo $dong["ma"];?>"><?php echo $dong["ten"]; ?> </a> </li>
                            <?php
                            }		
                        ?> 
                        </ul>
                    </div>
          	</div>
          	<div id="QC1" style="height:205px;">
         	<a target="new" href="http://www.axem.vn/event/world-cup-2014"><img src="img/65ed15fbfb9109.gif" style="width:250px;" /></a>
         	</div>  
            <div id="QC1" style="height:200px;">
         	<a target="new" href="http://yame.vn/"><img src="img/19830843f4c708.gif" style="width:250px;" /></a>
         	</div>   
            <div id="QC1" style="height:200px;">
         	<a  target="new" href="http://baza.vn/"><img src="img/5a67572e473e64.gif" style="width:250px;" /></a>
         	</div>  
            <div id="QC1" style="height:200px;">
         	<a target="new" href="http://baza.vn/"><img src="img/d41eefe473.gif" style="width:250px;" /></a>
         	</div>   
        </div><!--menu left-->
       <div id="main_right">
       <div id="div_p">
            <p>Mẫu điện thoại HOT</p>
       </div>
            <div class="Product-list-wrapper1">
            	<ul class="Product Homepage">
					<?php
                        $query = "SELECT * FROM dienthoai WHERE tinhtrang = 2";
                        $kq = DataProvider::ExecuteQuery($query);
                        while($dong = mysql_fetch_array($kq))
                        {	
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
									<form action="TrangChu.php" method="post">
										<input type="submit" name="btnThem" value="Thêm vào giỏ hàng" />
										<input type="hidden" name="mathem" value="<?php echo $dong["ma"];?>" />
									</form>
                                    <?php
								}
								else echo "<input type='button' value='Tạm thời hết hàng' />";
								?>
                            </li>
                            <?php
                        }		
                    ?>   
                </ul>
            </div> <!--San pham ban chay nhat-->
       <div id="div_p">
            <p>Mẫu điện thoại bán chạy</p>
       </div>
            <div class="Product-list-wrapper1">
            	<ul class="Product Homepage">
      				<?php
                        $query = "SELECT * FROM dienthoai WHERE tinhtrang = 3";
                        $kq = DataProvider::ExecuteQuery($query);
                        while($dong = mysql_fetch_array($kq))
                        {	
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
									<form action="TrangChu.php" method="post">
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
                    ?>   
                </ul>
            </div> <!--San pham moi nhat-->
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