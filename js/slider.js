jQuery(document).ready(function()
{
	jQuery('.image-wrapper-small img') 
		.on('click', abcd);
	
	function abcd()
	{
		var currentElement= jQuery(this);
		var src= currentElement.attr('src');
		jQuery('#big-image-wrapper img').attr('src', src);
	}
});