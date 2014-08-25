<div id="frm">
	<div id="Show_frm" style="height:170px;">
    	<form action="DienThoai.php" method="post" name="frmShow">
        	<div id="header_frm">
            	<div id="h5">Xóa Điện Thoại</div>
            </div>
            <input type="hidden" name="ma" value="<?php echo $ma?>"/>
            <div id="main_frm" style="font-size:20px; padding:10px;text-align:center">
            	Xóa điện thoại <strong> <?php echo $ten ?></strong>
            </div>
            <div id="btn">
            	<a href="DienThoai.php"><input type="button" name="btnExit" value="Thoát"/></a>
                <input type="submit" name="<?php echo $btn?>" value="Cập Nhật " id="" />
            </div>
            </div>
        </form>
    </div>
</div>