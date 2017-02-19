<?php
include_once("../../../config/database.php");

if (!isset($_SESSION['user_session'])){
	$_SESSION['user_session'] = round(microtime(true));
}

$view = (isset($_GET['view']) && $_GET['view'] != '') ? $_GET['view'] : '';

switch ($view) {
	
		
	default :
		$content 	= 'content.php';
		$template 	= '../../../include/app/template-main.php';
		$header 	= '../../../include/app/headerCustomer.php';
		$footer 	= '../../../include/app/footer.php';
}

require_once $template;


?>