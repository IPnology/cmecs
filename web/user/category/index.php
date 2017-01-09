<?php
include_once("../../../config/database.php");

$view = (isset($_GET['view']) && $_GET['view'] != '') ? $_GET['view'] : '';

switch ($view) {
	
	case 'add' :
		$content 	= 'add.php';
		$template 	= '../../../include/template-main.php';		
		$header 	= '../../../include/headerCustomer.php';
		$footer 	= '../../../include/footer.php';
		break;
		
	case 'list' :
		$content 	= 'list.php';
		$template 	= '../../../include/template-main.php';		
		$header 	= '../../../include/headerCustomer.php';
		$footer 	= '../../../include/footer.php';		
		break;
		
	case 'update' :
		$content 	= 'update.php';
		$template 	= '../../../include/template-main.php';		
		$header 	= '../../../include/headerCustomer.php';
		$footer 	= '../../../include/footer.php';		
		break;
		
	case 'detail' :
		$content 	= 'detail.php';
		$template 	= '../../../include/template-main.php';		
		$header 	= '../../../include/headerCustomer.php';
		$footer 	= '../../../include/footer.php';		
		break;
		
			
	default :
		$content 	= 'list.php';
		$template 	= '../../../include/template-main.php';		
		$header 	= '../../../include/headerCustomer.php';
		$footer 	= '../../../include/footer.php';
}

require_once $template;

?>





