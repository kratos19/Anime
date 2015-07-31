<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<title>AnimeFan</title>
	<link rel="shortcut icon" href="<?php echo URI; ?>mask.ico" type="image/x-icon" />
	<link rel="stylesheet" type="text/css" href="assets/css/style.css">
	<link rel="stylesheet" type="text/css" href="assets/fonts/stylesheet.css">
	<link rel="stylesheet" href="assets/css/font-awesome.min.css">
	<script src="assets/js/jquery.min.js" type="text/javascript"></script>
	<script src="assets/js/functions.js" type="text/javascript"></script>
	<script src="assets/js/jquery.cycle.all.js" type="text/javascript"></script>
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
