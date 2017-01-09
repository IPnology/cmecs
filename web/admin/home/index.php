<?php
include_once("../../../config/database.php");

$view = (isset($_GET['view']) && $_GET['view'] != '') ? $_GET['view'] : '';

switch ($view) {
	
		
	default :
		$content 	= 'content.php';
<<<<<<< HEAD
		$template = '../../../include/web/template-main.php';
		$header 	= '../../../include/web/header.php';
		$footer 	= '../../../include/web/footer.php';
=======
		$template	= '../../../include/template-main.php';
		$header 	= '../../../include/header.php';
		$footer 	= '../../../include/footer.php';
>>>>>>> ip/master
}

require_once $template;


?>