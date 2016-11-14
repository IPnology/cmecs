<?php
include_once("../../config/database.php");

$view = (isset($_GET['view']) && $_GET['view'] != '') ? $_GET['view'] : '';

switch ($view) {
	
	case 'create' :
		$content 	= 'create.php';
		$template = '../../include/template-main.php';		
		break;
		
	default :
		$content 	= 'homepage.php';
		$template = '../../include/template-main.php';
}

require_once $template;


?>