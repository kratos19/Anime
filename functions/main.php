<?php
	function get_page()
	{
		$pagini_permise =array(
				'page_0', 'page_1', 'page_2', 'page_3',
				'page_4', 'page_5', 'page_6', 'page_7', 
				'page_8', 'page_9', 'page_10', 'page_11', 
				'page_12', 'page_13', 'page_14', 'page_15', 
				'page_16', 'page_17', 'page_18', 'page_19'
			);

		$pagina_temporara = isset($_GET['page']) ? $_GET['page'] : 'page_0';

		if(in_array($pagina_temporara, $pagini_permise))
			return $pagina_temporara;
		else
			return 'page_0';
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

	function trimite_mail() 
	{
		$name = isset($_POST['name']) ? $_POST['name'] : "";
		$email = isset($_POST['email']) && filter_var($_POST['email'], FILTER_VALIDATE_EMAIL) ? $_POST['email'] : ""; 
		$telephone = isset($_POST['telephone']) ? (int)$_POST['telephone'] : 0;
		$enquiry = $_POST['enquiry'];
		$message = $_POST['message'];

		$headers = "From: info@example.com" . "\r\n";
		$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
		$emailbody = "<p>Incercam sa trimitem un mail, ia sa vedem daca merge</p>
					  <p><strong>Name: </strong> {$name} </p>
					  <p><strong>Email Address: </strong> {$email} </p>
					  <p><strong>Telephone: </strong> {$telephone} </p>
					  <p><strong>Enquiry: </strong> {$enquiry} </p>
					  <p><strong>Message: </strong> {$message} </p>";
		 
		if( mail("s.sergiu96@gmail.com","Asta este subiectul emailului", $emailbody, $headers) ) {
			$_POST['sa-trimis-mailul'] = true;
		} else {
			$_POST['sa-trimis-mailul'] = false;
		}
	}

	// verific daca s-a trimis formularul de mail
	if( isset($_POST['trimite-mail']) ) {
		trimite_mail();
	}

?>