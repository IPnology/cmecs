<?php
include_once("../config/database.php");

$view = (isset($_GET['view']) && $_GET['view'] != '') ? $_GET['view'] : '';

switch ($view) {
		
	case 'list' :
		$content 	= 'list.php';
		$template = '../include/template-main.php';		
		break;
		
	case 'create' :
		$content 	= 'create.php';
		$template = '../include/template-main.php';		
		break;
		
	case 'update' :
		$content 	= 'update.php';
		$template = '../include/template-main.php';		
		break;
		
	case 'login' :
		$content 	= 'login.php';
		$template = '../include/template-main.php';		
		break;
			
		
	default :
		$login 	= 'login.php';
		$template = '../include/template-login.php';
}

require_once $template;

?>





