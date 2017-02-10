$(window).scroll(function(){

	var st = $(this).scrollTop() / 10;
	
	//console.log(st);

	$(".site-heading").css({
		"transform" : "translate(0%, " + st + "%, .01px)",
		"-webkit-transform" : "translate3d(0px, " + st  + "%, .01px)"
	});

});