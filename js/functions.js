jQuery(document).ready(function() {

	jQuery('.image-wrapper-small img') 
		.on('click', function () {
			var currentElement= jQuery(this);
			var src= currentElement.attr('src');
			jQuery('#big-image-wrapper img').attr('src', src);
		});

	jQuery(".button-lista-anime")
		.on('click touchstart', function (event) {
			$('#sideBar').toggleClass('arata'); 
		});

});