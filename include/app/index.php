<?php
$view = (isset($_GET['view']) && $_GET['view'] != '') ? $_GET['view'] : '';

switch ($view) {
			
	default :
		$header 	= 'header.php';
		$content 	= 'content.php';
		$footer 	= 'footer.php';
		$template = 'web/template.php';
}

require_once $template;

?>





