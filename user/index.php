<?php
include_once("../config/database.php");

$view = (isset($_GET['view']) && $_GET['view'] != '') ? $_GET['view'] : '';

switch ($view) {
		
	case 'login' :
		$content 	= 'list.php';
		$template = '../include/template-main.php';		
		break;
			
	default :
		$content 	= 'login.php';
		$template = '../include/template-login.php';
}

require_once $template;

?>





