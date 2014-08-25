<link rel="stylesheet" type="text/css" href="Css/slide.css"/>
<script type="text/javascript" src="Java Script/jquery-1.4.1.js"></script>
<script type="text/javascript" src="Java Script/slide.js"></script>
<div class ="slider">
    <div id="bigPic">
    <?php
        $query = "SELECT link, madt FROM slideshow";
        $kq = DataProvider::ExecuteQuery($query);
        while($dong = mysql_fetch_array($kq))
        {	
            ?>
            <a href="Chitietsanpham.php?ma=<?php echo $dong["madt"];?>">
                <img src="<?php echo $dong["link"];?>"/> 
            </a>                           		
            <?php
        }	
    ?>                
    <input  type="image" name="next" id="next" src="../MobileShop/img/next.ico">
    <input type="image" name="back" id="back" src="../MobileShop/img/next.ico">
    </div>
</div>