<?php
include_once("../config/database.php");

$view = (isset($_GET['view']) && $_GET['view'] != '') ? $_GET['view'] : '';

switch ($view) {
		
	case 'signup' :
		$content 	= 'signup.php';
		$template = '../include/template-login.php';		
		break;
			
	default :
		$content 	= 'login.php';
		$template = '../include/template-login.php';
}

require_once $template;

?>





