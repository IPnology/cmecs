<?php
include_once("../../../config/database.php");

$view = (isset($_GET['view']) && $_GET['view'] != '') ? $_GET['view'] : '';

switch ($view) {
	
	case 'add' :
		$content = 'add.php';
		$template = '../../../web/include/template-main.php';		
		$header 	= '../../../web/include/header.php';
		$footer 	= '../../../web/include/footer.php';
		break;
		
	case 'list' :
		$content 	= 'list.php';
		$template = '../../../web/include/template-main.php';		
		$header 	= '../../../web/include/header.php';
		$footer 	= '../../../web/include/footer.php';		
		break;
		
	case 'update' :
		$content 	= 'update.php';
		$template = '../../../web/include/template-main.php';		
		$header 	= '../../../web/include/header.php';
		$footer 	= '../../../web/include/footer.php';	
		break;
		
	case 'detail' :
		$content 	= 'detail.php';
		$template = '../../../web/include/template-main.php';		
		$header 	= '../../../web/include/header.php';
		$footer 	= '../../../web/include/footer.php';	
		break;
		
			
	default :
		$content 	= 'list.php';
		$template = '../../../web/include/template-main.php';		
		$header 	= '../../../web/include/header.php';
		$footer 	= '../../../web/include/footer.php';
}

require_once $template;

?>





