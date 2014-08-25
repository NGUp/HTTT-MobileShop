<div id="frm">
	<div id="Show_frm">
    	<form action="LoaiDienThoai.php" method="post" name="frmShow">
        	<div id="header_frm">
            	<div id="h5"><?php echo $nameLDT; ?></div>
            </div>
            <div id="main_frm" style="font-size:20px; padding:10px; height:70px;">
                <div id="Ten">
                        	Loại điện thoại:
                </div>
                <div id="Input">
                        	<input style="width:270px;" type="text" name="txtLoai" value="<?php echo $tenLDT; ?>"/>
                </div>
                <div id="btn">
            	<a href="LoaiDienThoai.php"><input type="button" name="btnExit" value="Thoát"/></a>
                <input type="submit" name="<?php echo $btnLDT?>" value="Cập Nhật " id="" />
            </div>
            </div>
        </form>
    </div>
</div>