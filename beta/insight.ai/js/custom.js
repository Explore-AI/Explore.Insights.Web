jQuery(document).ready(function($){
	    $(".right-menu > ul > li.menu-item-has-children > a").after('<span class="submenu-close"></span>');
	    $('span.submenu-close').click(function() {
	    $(this).next().slideToggle();
		});
		
		$('.mobile-menu-icon').click(function() {
			$("body").toggleClass("menu-show");
			$(this).toggleClass("menu-icon-active");
		});
		
		$('.analytics-officers-select > ul > li > a').click(function() {
			$(this).toggleClass("select-item-show");
			$(this).next().slideToggle()
		});
		
		$('.analytics-officers-items li a').click(function() {
			var get_value = $(this).html();
			$(".analytics-officers-select > ul > li > a").html(get_value);
			$(".analytics-officers-select > ul > li > a").toggleClass("select-item-show");
			$("ul.analytics-officers-items").slideToggle()
		});
		
		
	});


