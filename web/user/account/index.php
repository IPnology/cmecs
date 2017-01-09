<?php
include_once("../../../config/database.php");

$view = (isset($_GET['view']) && $_GET['view'] != '') ? $_GET['view'] : '';

switch ($view) {
	
	case 'register' :
		$content 	= 'register.php';
		$template 	= '../../../include/web/template-login.php';
		$header 	= '../../../include/web/headerCustomer.php';
		$footer 	= '../../../include/web/footer.php';
		break;
		
	case 'detail' :
		$content 	= 'detail.php';
		$template 	= '../../../include/web/template-main.php';		
		$header 	= '../../../include/web/headerCustomer.php';
		$footer 	= '../../../include/web/footer.php';
		break;
		
	case 'update' :
		$content 	= 'update.php';
		$template 	= '../../../include/web/template-main.php';		
		$header 	= '../../../include/web/headerCustomer.php';
		$footer 	= '../../../include/web/footer.php';		
		break;
		
			
	default :
		$content 	= 'login.php';
		$template 	= '../../../include/web/template-login.php';
}

require_once $template;

?>





