function correct(){	
				
			if($(window).width() < 800)
				$(".wrap").css({"width":"100%"});
			else
				$(".wrap").css({"width":"1024px"});
			
			
			if($(window).width() < 300){
				$(".article").css({"width":"100%","height": $(".article").width()+"px", "padding":"0"});
				
			}
			else{
				$(".article").css({"height":"200px","width":"200px"});
				
				
				var item = $(".article").width();
				var w = $("#central").width();
				
				var p =  Math.floor(w/item); //broj itema u jednom redu
				var p2 = Math.floor(w % item) -1 ; // ostatak pixela izmedju itema
				var c = Math.floor((w - (p*item) ) / (p+1)); // formula za margine
				
				$(".article").css({"marginLeft": c+"px", "marginTop": c+"px"});
				$("#central").css({"paddingBottom": c+"px"});
		
		}
}


$(document).ready(function(){
	correct();
	window.addEventListener("resize",correct,false);
	
});