<?php
include_once("../../../config/database.php");

$view = (isset($_GET['view']) && $_GET['view'] != '') ? $_GET['view'] : '';

switch ($view) {
	
	case 'add' :
		$content = 'add.php';
		$template = '../../../include/app/template-main.php';		
		$header 	= '../../../include/app/header.php';
		$footer 	= '../../../include/app/footer.php';
		break;
		
	case 'list' :
		$content 	= 'list.php';
		$template = '../../../include/app/template-main.php';		
		$header 	= '../../../include/app/header.php';
		$footer 	= '../../../include/app/footer.php';		
		break;
		
	case 'update' :
		$content 	= 'update.php';
		$template = '../../../include/app/template-main.php';		
		$header 	= '../../../include/app/header.php';
		$footer 	= '../../../include/app/footer.php';		
		break;
		
	case 'detail' :
		$content 	= 'detail.php';
		$template = '../../../include/app/template-main.php';		
		$header 	= '../../../include/app/header.php';
		$footer 	= '../../../include/app/footer.php';		
		break;
		
			
	default :
		$content 	= 'list.php';
		$template = '../../../include/app/template-main.php';		
		$header 	= '../../../include/app/header.php';
		$footer 	= '../../../include/app/footer.php';
}

require_once $template;

?>





