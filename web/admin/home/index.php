<?php
include_once("../../../config/database.php");

$view = (isset($_GET['view']) && $_GET['view'] != '') ? $_GET['view'] : '';

switch ($view) {
	
		
	default :
		$content 	= 'content.php';
		$template = '../../../include/web/template-main.php';
		$header 	= '../../../include/web/header.php';
		$footer 	= '../../../include/web/footer.php';
}

require_once $template;


?>