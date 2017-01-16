<?php
include_once("../../../config/database.php");

$view = (isset($_GET['view']) && $_GET['view'] != '') ? $_GET['view'] : '';

switch ($view) {
	
	case 'register' :
		$content = 'register.php';
		$template = '../../../include/app/template-login.php';
		$header 	= '../../../include/app/headerCustomer.php';
		$footer 	= '../../../include/app/footer.php';
		break;
		
	case 'detail' :
		$content 	= 'detail.php';
		$template = '../../../include/app/template-main.php';
		$header 	= '../../../include/app/headerCustomer.php';
		$footer 	= '../../../include/app/footer.php';
		break;
		
	case 'update' :
		$content 	= 'update.php';
		$template = '../../../include/app/template-main.php';
		$header 	= '../../../include/app/headerCustomer.php';
		$footer 	= '../../../include/app/footer.php';
		break;
		
			
	default :
		$content 	= 'login.php';
		$template = '../../../include/app/template-main.php';
}

require_once $template;

?>





