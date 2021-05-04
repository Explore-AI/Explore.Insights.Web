//menu-slide"
$(".mobile-menu").on("click", function(){
	$(".navbar").addClass('sidenav');
	$(".main-header").addClass('mobile-nav');
});
$(".closebtn").on("click", function(){
	$(".main-header").removeClass('mobile-nav');
	$(".navbar").removeClass('sidenav');
});
$(".nav-drop span").on("click", function(){
	$(".mobile-nav .nav-drop .right-submenu").slideToggle();
});

function openNav() {
	document.getElementById("mySidenav").style.width = "100%";
  }
  
  function closeNav() {
	document.getElementById("mySidenav").style.width = "0";
  }

//scroll-header
$(window).scroll(function() {
	if ($(this).scrollTop() > 1){  
		$('.main-header').addClass("sticky");
		$(this).slideDown(200);
		}
		else{
			$('.main-header').removeClass("sticky");
			$(".main-header").css("top", "0");
		}
	});
	var $document = $(document),
	$element = $('.main-header');

	$document.scroll(function() {
		if ($document.scrollTop() >= 180) {
			$element.stop().css({
				top: '0px'
			});
		} else {
			$element.stop().css({
				top: '-200px'
			});
		}
	});

//testimonials

	$('.testimo-owl').owlCarousel({
		loop:true,
		margin: 0,
		nav:true,
		responsive:{
			0:{
				items:1
			},
			600:{
				items:1
			},
			768:{
				items:2
			}
		}
	});

	$('.owl-logos').owlCarousel({
		margin:10,
		loop:true,
		autoWidth:true,
		dots: true,
		items:1
	})

