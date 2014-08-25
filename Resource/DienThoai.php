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
	
	$querydt = "SELECT * FROM dienthoai ";
	
	if(isset($_REQUEST["btnTimKiem"]))
	{		
		$s1 = "";
		$s2 = "";
		$s3 = "";
		$s4 = "";
		$s5 = "";
		
		if($_REQUEST["mansx"] != 0) $s1 .= "nsx = ".$_REQUEST["mansx"];
		if($_REQUEST["mahdh"] != 0) $s2 .= "hdh = ".$_REQUEST["mahdh"];
		if($_REQUEST["mal"] != 0) $s3 .= "loai = ".$_REQUEST["mal"];
		if($_REQUEST["mag"] != 0) 
		{
			switch($_REQUEST["mag"])
			{
				case 1: $s4 .= "gia < 1000000";break;
				case 2: $s4 .= "gia < 2000000";break;
				case 3: $s4 .= "gia < 3000000";break;
				case 4: $s4 .= "gia < 5000000";break;
				case 5: $s4 .= "gia < 8000000";break;
				case 6: $s4 .= "gia < 10000000";break;
				case 7: $s4 .= "gia >= 10000000";break;
			}
		}	
		if($_REQUEST["masx"] != 0)
		{
			switch($_REQUEST["masx"])
			{
				case 1: $s5 .= "ORDER BY gia DESC";break;
				case 2: $s5 .= "ORDER BY gia";break;
			}
		}
		if($s1 != "" || $s2 != "" || $s3 != "" || $s4 != "") $querydt .= "where ";
		if($s1 != "")
		{
			$querydt .= $s1;
			if($s2 != "" || $s3 != "" || $s4 != "") $querydt .= " and ";
		}
		if($s2 != "")
		{
			$querydt .= $s2;
			if($s3 != "" || $s4 != "") $querydt .= " and ";
		}
		if($s3 != "")
		{
			$querydt .= $s3;
			if($s4 != "") $querydt .= " and ";
		}
		if($s4 != "")
		{
			$querydt .= $s4;
		}
		if($s5 != "") 
		{
			$querydt .= " ".$s5;
		}
	}
	else if(isset($_REQUEST["mansx"])) $querydt .= "where nsx = ".$_REQUEST["mansx"];
	$action = "DienThoai.php?";
	if(isset($_REQUEST["mansx"])) $action .="mansx = ".$_REQUEST["mansx"]."&";
	if(isset($_REQUEST["mahdh"])) $action .="mahdh = ".$_REQUEST["mahdh"]."&";
	if(isset($_REQUEST["mal"])) $action .="mal = ".$_REQUEST["mal"]."&";
	if(isset($_REQUEST["mag"])) $action .="mag = ".$_REQUEST["mag"]."&";
	if(isset($_REQUEST["masx"])) $action .="masx = ".$_REQUEST["masx"]."&";
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
    <a href="#" class="vedautrang">Về đầu trang</a>
    <div id="mid">
    <div id="slide_wrap">
    	<div id="QC">
 				<img src="img/THỂ_LỆ_CHƯƠNG_TRÌNH_KHUYẾN_MÃI_THẺ_CÀO_ĐIỆN_THOẠI_DI_ĐỘNG_SONY._-03.jpg" style="width:170px; height:300px;"/>
		</div>	
             <?php include_once("Template/slide.inc.php"); ?>  	
        <div id="QC">
        		<img src="img/khuyen-mai-nguyen-kim-voi-qua-tang-gia-tri-khi-mua-dien-thoai-htc.jpg" style="width:160px; height:300px;"/>
        </div>    
    </div><!--Close Slide-->
    <div id="timkiemnangcao">          
              <div id="TIM">
                  <li>
                    Tìm theo
                  </li>
              </div> 
              <div id="TimKiem">
              	<form action="DienThoai.php" method="get" name="frmTimKiem" id="frmTimKiem">
                    <div id="Non_Drop">Hãng sản xuất
                    </div>
                    <div id="Non_Drop">
                    <select name="mansx" style="width:auto;">
                        <option value="0">[Tất cả]</option>
						<?php
							$query = "SELECT ma, ten FROM nhasanxuat";
							$kq = DataProvider::ExecuteQuery($query);
							while($dong = mysql_fetch_array($kq))
							{	
							?>
								<option value="<?php echo $dong["ma"];?>"
								<?php if(isset($_REQUEST["mansx"]) && $dong["ma"] == $_REQUEST["mansx"]) echo " selected";?>
                                ><?php echo $dong["ten"];?></option>                                   
							<?php
							}				
						?>
                		</optgroup>
             		</select>
                    </div>
                    <div id="Non_Drop">
                    Hệ điều hành
                   	</div>
                    <div id="Non_Drop">
                    <select name="mahdh" style="width:auto;">
                        <option value="0">[Tất cả]</option>
						<?php
							$query = "SELECT ma, ten FROM hedieuhanh";
							$kq = DataProvider::ExecuteQuery($query);
							while($dong = mysql_fetch_array($kq))
							{	
							?>
								<option value="<?php echo $dong["ma"];?>"
								<?php if(isset($_REQUEST["mahdh"]) && $dong["ma"] == $_REQUEST["mahdh"]) echo " selected";?>
                                ><?php echo $dong["ten"];?></option>                                   
							<?php
							}		
						?>
                		</optgroup>
             		</select>
                    </div>
                    <div id="Non_Drop">
                    Loại điện thoại
                    </div>
                    <div id="Non_Drop">
                     <select name="mal">
                        <option value="0">[Tất cả]</option>
						<?php
							$query = "SELECT ma, ten FROM loaidienthoai";
							$kq = DataProvider::ExecuteQuery($query);
							while($dong = mysql_fetch_array($kq))
							{	
							?>
								<option value="<?php echo $dong["ma"];?>"
								<?php if(isset($_REQUEST["mal"]) && $dong["ma"] == $_REQUEST["mal"]) echo " selected";?>
                                ><?php echo $dong["ten"];?></option>                                   
							<?php
							}		
						?>
                		</optgroup>
             		</select>
                    </div>
                    <div id="Non_Drop">
                    Mức giá
                    </div>
                    <div id="Non_Drop">
                    <select name="mag">
                        <option value="0"<?php if(isset($_REQUEST["mag"]) && $_REQUEST["mag"] == 0) echo " selected";?>>[Tất cả]</option>
                        <option value="1"<?php if(isset($_REQUEST["mag"]) && $_REQUEST["mag"] == 1) echo " selected";?>>Dưới 1 triệu</option>
                        <option value="2"<?php if(isset($_REQUEST["mag"]) && $_REQUEST["mag"] == 2) echo " selected";?>>Dưới 2 triệu</option>
                        <option value="3"<?php if(isset($_REQUEST["mag"]) && $_REQUEST["mag"] == 3) echo " selected";?>>Dưới 3 triệu</option>
                        <option value="4"<?php if(isset($_REQUEST["mag"]) && $_REQUEST["mag"] == 4) echo " selected";?>>Dưới 5 triệu</option>
                        <option value="5"<?php if(isset($_REQUEST["mag"]) && $_REQUEST["mag"] == 5) echo " selected";?>>Dưới 8 triệu</option>
                        <option value="6"<?php if(isset($_REQUEST["mag"]) && $_REQUEST["mag"] == 6) echo " selected";?>>Dưới 10 triệu</option>
                        <option value="7"<?php if(isset($_REQUEST["mag"]) && $_REQUEST["mag"] == 7) echo " selected";?>>Trên 10 triệu</option>
                		</optgroup>
             		</select>
                    </div>
                    <div id="Non_Drop">
                    Sắp xếp
                    </div>
                    <div id="Non_Drop">
                    <select name="masx">
                        <option value="0"<?php if(isset($_REQUEST["masx"]) && $_REQUEST["masx"] == 0) echo " selected";?>>[Mặc định]</option>
                        <option value="1"<?php if(isset($_REQUEST["masx"]) && $_REQUEST["masx"] == 1) echo " selected";?>>Giá cao đến thấp</option>
                        <option value="2"<?php if(isset($_REQUEST["masx"]) && $_REQUEST["masx"] == 2) echo " selected";?>>Giá thấp đến cao</option>
                		</optgroup>
             		</select>
                    </div>
                    <div id="Non_Drop">
                    <input style="background-color:#FFF;" type="submit" name="btnTimKiem" value="Tìm" />
                    </div>
                </form>  
              </div> 
    </div> <!--Tim kiem nang cao-->
    <div class="Product-list-wrapper">
        <ul class="Product Homepage">
            <?php
				$sosp=0;
                $query = $querydt;
                $kq = DataProvider::ExecuteQuery($query);
                if(mysql_num_rows($kq) != 0)
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
                                    <form action="<?php $action; ?>" method="post">
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