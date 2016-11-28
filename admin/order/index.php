<?php
include_once("../../config/database.php");

$view = (isset($_GET['view']) && $_GET['view'] != '') ? $_GET['view'] : '';

switch ($view) {
	
	case 'list' :
		$content 	= 'list.php';
		$template = '../../include/template-main.php';		
		$header 	= '../../include/header.php';
		$footer 	= '../../include/footer.php';
		break;
		
	default :
		$content 	= 'list.php';
		$template = '../../include/template-main.php';
		$header 	= '../../include/header.php';
		$footer 	= '../../include/footer.php';
}

require_once $template;

?>