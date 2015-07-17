<?php
	require_once('functions/main.php');
	$page=check_page();

	require_once('sections/header.php'); 
	require_once('pages/'.$page. '.php'); ?>	
	<footer>
		<?php require_once('sections/footer.php'); ?>
	</footer>
</body>
</html>