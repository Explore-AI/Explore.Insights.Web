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
	$(this).parent().parent().find('.right-submenu').slideToggle();
});
$(".pricing-nav-item li a").on("click", function(){
	$(".pricing-nav-item li").removeClass('active');
	$(this).parent().addClass('active');
});
$(".yearly-plan a").on("click", function(){
	$(".pricing-plan-content").removeClass('active');
	$(".yearly-pricing").addClass('active');
});
$(".monthly-plan a").on("click", function(){
	$(".pricing-plan-content").removeClass('active');
	$(".monthly-pricing").addClass('active');
});
$(".nav-drop .right-submenu li").hover(function () {
	$(".nav-drop:hover .right-submenu li").removeClass("menu-active");
    $(this).addClass("menu-active");
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
		autoHeight : true,
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
		margin:0,
		loop:true,
		autoWidth:false,
		autoplay:true,
		dots: true,
		responsive:{
			0:{
				items:1
			},
			600:{
				items:2
			},
			768:{
				items:3
			},
			992:{
				items:4
			}
		}
	})
	$(document).ready(function(){
    $(".check-all").click(function(){
        $(".simple-checkbox-table").attr("checked", "checked");
    });
	});

