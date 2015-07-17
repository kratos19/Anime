<?php
	ini_set('display_startup_errors',1);
	ini_set('display_errors',1);
	error_reporting(-1);

	define('URI', 'http://localhost:8080/atestat/');
	define('APP', true);

	function check_page()
	{
		$allowed_pages=array(
				'page_0',
				'page_1',
				'page_2',
				'page_3',
				'page_4',
				'page_5',
				'page_6',
				'page_7',
				'page_8',
				'page_9',
				'page_10',
				'page_11',
				'page_12',
				'page_13',
				'page_14',
				'page_15',
				'page_16',
				'page_17',
				'page_18',
				'page_19',
				'page_20',
				'page_21',
			);

		$temp_page=isset($_GET['page']) ? $_GET['page'] : 'home';

		if(in_array($temp_page, $allowed_pages))
			return $temp_page;
		else
			return 'home';
	}

	function createMenuItem($pageNumber, $title)
	{
		$isActiveClass = isset($_GET['page']) && $_GET['page'] == 'page_'.$pageNumber ? ' current-menu-item ': '';
		$currentUrl = createUrl($pageNumber);
		$menuItem = '<div class="menu-item '.$isActiveClass.'">';
			$menuItem .='<a href="'.$currentUrl.'" class="menu-anchor">'.$title.'</a>';
		$menuItem .='</div>';	
		echo $menuItem;
	}

	function createUrl($pageNumber)
	{
		$pageNumber = (int)$pageNumber;
		$pageUrl = $_SERVER['PHP_SELF'].'?page=page_'.$pageNumber;
		return $pageUrl;
	}

?>