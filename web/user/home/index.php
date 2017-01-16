<?php
include_once("../../../config/database.php");

if (!isset($_SESSION['user_session'])){
	$_SESSION['user_session'] = round(microtime(true));
}

$view = (isset($_GET['view']) && $_GET['view'] != '') ? $_GET['view'] : '';

switch ($view) {
	
		
	default :
		$content 	= 'content.php';
		$template	= '../../../include/web/template-main.php';
		$header 	= '../../../include/web/headerCustomer.php';
		$footer 	= '../../../include/web/footer.php';
}

require_once $template;


?>