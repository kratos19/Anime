jQuery(document).ready(function() {

	jQuery('.image-wrapper-small img') 
		.on('click', function () {
			var currentElement= jQuery(this);
			var src= currentElement.attr('src');
			jQuery('#big-image-wrapper img').attr('src', src);
		});

	jQuery(".button-lista-anime")
		.on('click touchstart', function (event) {
			jQuery('#sideBar').toggleClass('arata'); 
		});

	jQuery('#slider').cycle({
		fx:         'scrollHorz',
		next:       '#next',
		prev:       '#prev',
		timeout:    3000,
		pause:      1,
		width: 		860,
		fit:        1
	});

});