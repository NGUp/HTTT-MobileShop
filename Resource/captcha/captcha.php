<?php  
    session_start();
    //tao mot khung h�nh chu nhat co chieu dai 200 chieu rong 200
    $capsccha = imagecreate(200,200);
    
    //lay h�nh l�m background
   // $capsccha = imagecreatefrompng('images/a.png');
	$capsccha = imagecreatefromjpeg('images/catp.jpg');
    //thi?t l?p thu?c t�nh
    $black = imagecolorallocate($capsccha,0,0,0);//thiet lap m�u voi t�n capsccha, chuan m�u GBR
    $white = imagecolorallocate($capsccha,255,255,255);
    $red = imagecolorallocate($capsccha,255,0,0);
    $font = 'GiddyupStd.otf';//thiet lap font


    //m� h�a md5 tinh theo thoi gian
    $string = md5(microtime()*mktime(rand(0,11),rand(1,59),rand(1,59),rand(1,12),rand(1,28),rand(1980,2014)));
    //l?y chu?i m� h�a
    $text = substr($string,0,6);
    $_SESSION['code'] = $text;
    
    
    //tao h�nh chu nhat ben trong capsccha theo t?a d? (10,10) (90,90) voi m�u trang duoc thiet lap o tr�n
    //imagerectangle($capsccha,10,10,90,90,$white);
    //tao line m� ta nhu tr�n
    //imageline($capsccha,50,50,100,100,$red);
    
    //dien text vua random o tr�n v�o capsccha voi size: 20, do nghi�ng 0, toa do bat dau(25,25), m�u l� red, font lay ten file, v� text l� doan vua random o tren
    imagettftext($capsccha,30,0,25,35,$white,$font,$text);
    
    
    //tao image png
    header('content-type: image/png');
    imagepng($capsccha);
    
    //xoa image
    imagedestroy($capsccha)
    
    

?>