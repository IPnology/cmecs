<?php
include_once("../../../config/database.php");

$view = (isset($_GET['view']) && $_GET['view'] != '') ? $_GET['view'] : '';

switch ($view) {
	
	case 'detail' :
		$content 	= 'detail.php';
		$template = '../../../include/app/template-main.php';		
		$header 	= '../../../include/app/headerCustomer.php';
		$footer 	= '../../../include/app/footer.php';
		break;
		
	default :
		$content 	= 'list.php';
		$template = '../../../include/app/template-main.php';
		$header 	= '../../../include/app/headerCustomer.php';
		$footer 	= '../../../include/app/footer.php';
}

require_once $template;

?>