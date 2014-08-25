<div id="frm">
	<div id="Show_frm">
    	<form action="HeDieuHanh.php" method="post" name="frmShow">
        	<div id="header_frm">
            	<div id="h5"><?php echo $name; ?></div>
            </div>
            <div id="main_frm" style="font-size:20px; padding:10px; height:70px;">
                <div id="Ten">
                        	Tên hệ điều hành:
                </div>
                <div id="Input">
                        	<input style="width:270px;" type="text" name="txtHDH" value="<?php echo $ten; ?>"/>
                </div>
                <div id="btn">
            	<a href="HeDieuHanh.php"><input type="button" name="btnExit" value="Thoát"/></a>
                <input type="submit" name="<?php echo $btn?>" value="Cập Nhật " id="" />
            </div>
            </div>
        </form>
    </div>
</div>