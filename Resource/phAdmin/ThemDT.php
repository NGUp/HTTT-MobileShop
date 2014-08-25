<div id="frm">
	<div id="Show_frm" style="height:570px;">
    	<form action="DienThoai.php" method="post" enctype="multipart/form-data"  name="frmShow">
        	<div id="header_frm">
            	<div id="h5"><?php echo $name; ?></div>
            </div>
            <div id="main_frm" style="font-size:20px; padding:10px; height:70px;">
            	<input type="hidden" name="txtma" value="<?php echo $ma ?>"/>
            	<div id="Ten">
                        	Tên điện thoại:
                </div>
                <div id="Input">
                        	 <input type="text" name="txtTenDT" style="width:205px" value="<?php echo $ten; ?>"/>
                </div>
                <div id="Ten">
                        	Hệ điều hành:
                </div>
                <div id="Input">
                        	  <select name="cmbHDH" id="cmbHDH" style="width:205px" value="<?php echo $hdh; ?>"/>
								<?php 
                                include_once("../DataProvider.php");
                                $dsHDH = DataProvider::ExecuteQuery("Select * From hedieuhanh");
                                if($dsHDH != false)
                                {
                                    while ($row = mysql_fetch_array($dsHDH,MYSQL_ASSOC))
                                    {
                                        $maHDH = intval($row["ma"]);
                                        $tenHDH = $row["ten"];
                                        ?>
                                        <option value="<?php echo($maHDH); ?>">
                                            <?php echo($tenHDH);?>
                                        </option>
                                        <?php 
                                    }                		
                                }
                                ?>
                                </select>
 
               			 </div>
                <div id="Ten">
                        	Loại điện thoại
                </div>
                <div id="Input">
                        	 <select name="cmbLoai" id="cmbLoai" style="width:205px" value="<?php echo $loai; ?>"/>
            <?php 
            include_once("../DataProvider.php");
            $dsLoai = DataProvider::ExecuteQuery("Select * From loaidienthoai");
            if($dsLoai != false)
            {
                while ($row = mysql_fetch_array($dsLoai,MYSQL_ASSOC))
                {
                    $maLoai = intval($row["ma"]);
                    $tenLoai = $row["ten"];
                    ?>
                    <option value="<?php echo($maLoai); ?>">
                        <?php echo($tenLoai);?>
                    </option>
                    <?php 
                }                		
            }
            ?>
            </select>
                </div>
                <div id="Ten">
                        	Nhà Sản Xuất
                </div>
                <div id="Input">
                        	<select name="cmbNSX" id="cmbNSX" style="width:205px" value="<?php echo $nsx; ?>"/>
            <?php 
            include_once("../DataProvider.php");
            $dsNSX = DataProvider::ExecuteQuery("Select * From nhasanxuat");
            if($dsNSX != false)
            {
                while ($row = mysql_fetch_array($dsNSX,MYSQL_ASSOC))
                {
                    $maNSX = intval($row["ma"]);
                    $tenNSX = $row["ten"];
                    ?>
                    <option value="<?php echo($maNSX); ?>">
                        <?php echo($tenNSX);?>
                    </option>
                    <?php 
                }                		
            }
            ?>
            </select>
                </div>
                <div id="Ten">
                        	Tình trạng
                </div>
                <div id="Input">
                        	<select name="cmbTinhTrang" id="cmbTinhTrang" style="width:205px" value="<?php echo $tt; ?>"/>
            <?php 
            include_once("../DataProvider.php");
            $dsTT = DataProvider::ExecuteQuery("Select * From tinhtrang");
            if($dsTT != false)
            {
                while ($row = mysql_fetch_array($dsTT,MYSQL_ASSOC))
                {
                    $maTT = intval($row["ma"]);
                    $tenTT = $row["ten"];
                    ?>
                    <option value="<?php echo($maTT); ?>">
                        <?php echo($tenTT);?>
                    </option>
                    <?php 
                }                		
            }
            ?>
            </select>
            </div>
                <div id="Ten">
                        	Giá tiền
                </div>
                <div id="Input">
                        	<input type="text" name="txtGia" style="width:205px" value="<?php echo $gia; ?>"/>
                </div>
                <div id="Ten">
                        	Hình Ảnh:
                </div>
                <div id="Input">
                			
                        	<input type="file" name="fileHinhAnh" />
                </div>
                <div id="Ten">
                        	Ảnh bìa
                </div>
                <div id="Input">
                        	 <input type="file" name="fileHinhBia" />
                </div>
                <div id="Ten">
                        	Xuất xứ
                </div>
                <div id="Input">
                        	<input type="text" name="txtXuatXu" style="width:200px"value="<?php echo $xuatxu; ?>"/>
                </div>
                <div id="Ten">
                        	Số lượng
                </div>
                <div id="Input">
                        	<input type="text" name="txtSoLuong" style="width:200px" value="<?php echo $soluong; ?>"/>
                </div>
                <div id="Ten">
                        	Mô tả
                </div>
                <div id="Input">
                <textarea name="txtMoTa" style="width:200px;" rows="3"><?php echo $mota; ?></textarea>
                </div>
                <div id="btn">
            	<a href="DienThoai.php"><input type="button" name="btnExit" value="Thoát"/></a>
                <input type="submit" name="<?php echo $btn?>" value="Cập Nhật " id="" />
            </div>
            </div>
        </form>
    </div>
</div>