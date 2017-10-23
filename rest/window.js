function resize(){ 
 
	$("#central").css({"minHeight":$(window).height()});
	
 };

$(document).ready(function(){
	
	
	
	window.addEventListener("resize",resize, false);
	window.addEventListener("scroll",resize, false);
	resize();
}); 