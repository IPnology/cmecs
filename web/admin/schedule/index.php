<?php
include_once("../../../config/database.php");

$view = (isset($_GET['view']) && $_GET['view'] != '') ? $_GET['view'] : '';

switch ($view) {
	
	case 'list' :
		$content 	= 'list.php';
		$template 	= '../../../include/web/template-main.php';		
		$header 	= '../../../include/web/header.php';
		$footer 	= '../../../include/web/footer.php';		
		break;
		
	case 'detail' :
		$content 	= 'detail.php';
		$template 	= '../../../include/web/template-main.php';		
		$header 	= '../../../include/web/header.php';
		$footer 	= '../../../include/web/footer.php';	
		break;
		
			
	default :
		$content 	= 'list.php';
		$template 	= '../../../include/web/template-main.php';		
		$header 	= '../../../include/web/header.php';
		$footer 	= '../../../include/web/footer.php';
}

require_once $template;

?>





