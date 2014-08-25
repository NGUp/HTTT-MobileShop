<?php  
    session_start();
    //tao mot khung hình chu nhat co chieu dai 200 chieu rong 200
    $capsccha = imagecreate(200,200);
    
    //lay hình làm background
   // $capsccha = imagecreatefrompng('images/a.png');
	$capsccha = imagecreatefromjpeg('images/catp.jpg');
    //thi?t l?p thu?c tính
    $black = imagecolorallocate($capsccha,0,0,0);//thiet lap màu voi tên capsccha, chuan màu GBR
    $white = imagecolorallocate($capsccha,255,255,255);
    $red = imagecolorallocate($capsccha,255,0,0);
    $font = 'GiddyupStd.otf';//thiet lap font


    //mã hóa md5 tinh theo thoi gian
    $string = md5(microtime()*mktime(rand(0,11),rand(1,59),rand(1,59),rand(1,12),rand(1,28),rand(1980,2014)));
    //l?y chu?i mã hóa
    $text = substr($string,0,6);
    $_SESSION['code'] = $text;
    
    
    //tao hình chu nhat ben trong capsccha theo t?a d? (10,10) (90,90) voi màu trang duoc thiet lap o trên
    //imagerectangle($capsccha,10,10,90,90,$white);
    //tao line mô ta nhu trên
    //imageline($capsccha,50,50,100,100,$red);
    
    //dien text vua random o trên vào capsccha voi size: 20, do nghiêng 0, toa do bat dau(25,25), màu là red, font lay ten file, và text là doan vua random o tren
    imagettftext($capsccha,30,0,25,35,$white,$font,$text);
    
    
    //tao image png
    header('content-type: image/png');
    imagepng($capsccha);
    
    //xoa image
    imagedestroy($capsccha)
    
    

?>