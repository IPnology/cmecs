<?php
include_once("../../../config/database.php");

$view = (isset($_GET['view']) && $_GET['view'] != '') ? $_GET['view'] : '';

switch ($view) {
	
		
	default :
		$content 	= 'content.php';
		$template = '../../../include/app/template-main.php';
		$header 	= '../../../include/app/header.php';
		$footer 	= '../../../include/app/footer.php';
}

require_once $template;


?>