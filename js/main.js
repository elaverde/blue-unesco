jQuery(document).ready(function($) {
	var menu = $('#unesco_menu'); // Reemplaza "#primary-menu" con el ID del menú principal
	console.log(menu);
	$(window).scroll(function() {
		console.log($(this).scrollTop());
	  if ($(this).scrollTop() > 100) {
		menu.removeClass('bg_menu');
		menu.addClass('scroll-menu');
	  } else {
		menu.removeClass('scroll-menu');
		menu.addClass('bg_menu');
	  }
	});
	
  });
