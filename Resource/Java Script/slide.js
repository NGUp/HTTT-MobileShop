// JavaScript Document
	var currentImage;
    var currentIndex = -1;
    var interval;
    function showImage(index){
        if(index < $('#bigPic img').length){
        	var indexImage = $('#bigPic img')[index]
            if(currentImage){  
                    clearTimeout(myTimer);
                    $(currentImage).fadeOut(250, function() {
					    myTimer = setTimeout("showNext()", 3000);
					    $(this).css({'display':'none','z-index':1});
					});
            }
			
            $(indexImage).css({'display':'block'});
            currentImage = indexImage;
            currentIndex = index;
          
        }
    }
    
    function showNext(){
        var len = $('#bigPic img').length;
        var next = currentIndex < (len-1) ? currentIndex + 1 : 0;
        showImage(next);
    }
	function showBack(){
        var len = $('#bigPic img').length;
        var back = currentIndex >0? currentIndex - 1 : (len-1);
        showImage(back);
    }
    
    var myTimer;
    
    $(document).ready(function() {
	    myTimer = setTimeout("showNext()", 3000);
		showNext(); //loads first image
       
		$("#next").bind('click',function(e){showNext();});
		$("#next").bind('mouseover',function(e){$(this).css({'opacity':1 })});
		$("#next").bind('mouseout',function(e){$(this).css({'opacity':0.3 })});
		$("#back").bind('click',function(e){showBack();});
		$("#back").bind('mouseover',function(e){$(this).css({'opacity':1 })});
		$("#back").bind('mouseout',function(e){$(this).css({'opacity':0.3 })});
		$("#bigPic").bind('mouseover',function(e){clearTimeout(myTimer);});
		$("#bigPic").bind('mouseout',function(e){myTimer = setTimeout("showNext()", 3000);});
		
		
	});   
	