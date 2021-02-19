$(document).ready(function() {
	$( function() {
   		$( "#tabs" ).tabs();
  	});	
	$(".todo-list ul li").click(function(){
        $(this).toggleClass("active");
    });
    $(".menu_bar_small .menu-bar-open a").click(function(){
        $("body").addClass("show-menubar");
    });
    $(".menu_bar_big a").click(function(){
        $("body").removeClass("show-menubar");
    });
    $(".course-menu .dropdown").click(function(){
        $(this).toggleClass("current");
    });
    $(".course-menu .dropdown .main-submenu").click(function(){
        $(this).toggleClass("current");
    });

});