// Foundation JavaScript
// Documentation can be found at: http://foundation.zurb.com/docs
$(document).foundation();

$(function () {
	// ie9 fix for placeholder text to show, also adds a class placeholder for styling
	$('input, textarea').placeholder()

	$('.menu').click(function(e) {
		e.preventDefault();
		$('.nav-wrapper').toggleClass('opened');
	})

	$('.mobile-close').click(function(closeMenu) {
		closeMenu.preventDefault();
		$('.nav-wrapper').toggleClass('opened');
	})

	//Initialize fancybox
	//$('.fancybox').fancybox();


})


// Function Change Header Background On Scroll. HOME PAGE.

function HeaderBackground() {

	if ($("#slides").length <= 0) {
		$("header").addClass("hbg");
	} else {
		$("header").removeClass("hbg");
		$(".logo img").attr('src', 'images/logo-white.svg');
	};

	$(window).scroll(function() {    
		var scroll = $(window).scrollTop();

		if (scroll >= $("#slides").height() - 100) {
			$("header").addClass("hbg");
			$(".logo img").attr('src', 'images/logo.svg');
		} else {
			$("header").removeClass("hbg");
		}
	});

  }//End HeaderBackground


// Function Slider Background Change Logo. HOME PAGE.
function SliderBg() {
	$(window).scroll(function() {    
		var scroll = $(window).scrollTop();
		if (scroll >= $("#slides").height() - 100) {
			$(".logo img").attr('src', 'images/logo.svg');
		} else {
			$(".logo img").attr('src', 'images/logo-white.svg');
		}
	});
  }//End SliderBg 


// TODO: Get Directions. 
function btnGo_Click() {
	var txtAddr = document.getElementById('txtAddr');
	if (txtAddr.value.length == 0) {
		alert('Please enter a starting address.');
	}
	else {
		var url = "http://maps.google.com/maps?saddr=" +
		txtAddr.value.replace(" ", "+") +
		"&daddr=1234+Address+Ave.+City,+ST+000000"; 
		window.open(url);
	}
}