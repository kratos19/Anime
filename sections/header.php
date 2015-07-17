<!DOCTYPE html>
<html>
<head>
	<title>AnimeFan</title>
	<link rel="shortcut icon" href="<?php echo URI; ?>mask.ico" type="image/x-icon" />
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" type="text/css" href="fonts/stylesheet.css">
	<link rel="stylesheet" href="css/font-awesome.min.css">
	<script src="js/jquery.min.js" type="text/javascript"></script>
	<script src="js/slider.js" type="text/javascript"></script>
	<script src="js/jquery.min.js" type="text/javascript"></script>
	<script src="js/jquery.cycle.all.js" type="text/javascript"></script>
	<script type="text/javascript">
	$(document).ready(function (){
		$('#slider').cycle({
			fx:         'scrollHorz',
			next:       '#next',
			prev:       '#prev',
			timeout:    3000,
			pause:      1,
			width: 		860
		});
	});

	</script>
</head>
	<body>
		<div id="header">
			<a href="index.php">
				<img src="images/animefan-logo2.png">
			</a>
		</div>
		
			<div id="menu">
				<div id="menu-containar">
					<?php createMenuItem(0, '<i class="fa fa-home"></i> Acasa'); ?>
					<?php createMenuItem(1, '<i class="fa fa-picture-o"></i> Galerie'); ?>
					<?php createMenuItem(2, '<i class="fa fa-star"></i> Anime'); ?>
					<?php createMenuItem(3, '<i class="fa fa-phone-square"></i> Contact'); ?>
				</div>
				
			</div>
