<?php

	ini_set('display_startup_errors',1);
	ini_set('display_errors',1);
	error_reporting(-1);

	define('URI', 'http://anim3fan.96.lt/');
	define('APP', true);

	// includerea functionalitatii
	require_once('functions/main.php');

	//crearea paginii
	require_once('template/sections/header.php'); 
	require_once('template/pages/'.get_page(). '.php'); 
	require_once('template/sections/footer.php'); 
?>
