
$(function() {

	$(".hamburger").click(function(){
		$(this).toggleClass("is-active");

		if($(this).hasClass('is-active')){
			$('.mnu_top').slideDown(300);
		}else{
			$('.mnu_top').slideUp(300);
		}
	});

});

function slowScroll(id) { 
	var offset = 0;
	$('html, body').animate({ 
		scrollTop: $(id).offset().top - offset 
	}, 700);
	
} 
import '../css/adaptive.css';
import '../css/main.css';