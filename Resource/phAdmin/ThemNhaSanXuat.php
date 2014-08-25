<div id="frm">
	<div id="Show_frm">
    	<form action="HangSanXuat.php" method="post" name="frmShow" enctype="multipart/form-data" >
        	<div id="header_frm">
            	<div id="h5"><?php echo $name; ?></div>
            </div>
            	<input type="hidden" name="txtMa" value="<?php echo $ma; ?>"/>
            <div id="main_frm" style="font-size:20px; padding:10px; height:70px;">
                <div id="Ten">
                        	Tên nhà sản xuất:
                </div>
                <div id="Input">
                        	<input style="width:270px;" type="text" name="txtNSX" value="<?php echo $ten; ?>"/>
                </div>
                 <div id="Ten">
                        	Logo nhà sản xuất:
                </div>
                <div id="Input">
                <?php if(isset($_GET["delNSX"]))
				{
					echo $logo;
				}
					else
					{
					?>
                        	<input style="width:270px;" type="file" name="filelogo"/>
                 <?php }?>
                </div>
                <div id="btn">
            	<a href="HangSanXuat.php"><input type="button" name="btnExit" value="Thoát"/></a>
                <input type="submit" name="<?php echo $btn?>" value="Cập Nhật " id="" />
            </div>
            </div>
        </form>
    </div>
</div>