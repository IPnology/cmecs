<?php
include_once("../../../config/database.php");

$view = (isset($_GET['view']) && $_GET['view'] != '') ? $_GET['view'] : '';

switch ($view) {
	
	case 'add' :
		$content = 'add.php';
		$template = '../../../include/web/template-main.php';		
		$header 	= '../../../include/web/header.php';
		$footer 	= '../../../include/web/footer.php';
		break;
		
	case 'list' :
		$content 	= 'list.php';
		$template = '../../../include/web/template-main.php';		
		$header 	= '../../../include/web/header.php';
		$footer 	= '../../../include/web/footer.php';	
		break;
		
	case 'update' :
		$content 	= 'update.php';
		$template = '../../../include/web/template-main.php';		
		$header 	= '../../../include/web/header.php';
		$footer 	= '../../../include/web/footer.php';	
		break;
		
	case 'detail' :
		$content 	= 'detail.php';
		$template = '../../../include/web/template-main.php';		
		$header 	= '../../../include/web/header.php';
		$footer 	= '../../../include/web/footer.php';	
		break;
		
	case 'searchList' :
		$content 	= 'searchList.php';
		$template = '../../../include/web/template-main.php';		
		$header 	= '../../../include/web/header.php';
		$footer 	= '../../../include/web/footer.php';
		break;
		
			
	default :
		$content 	= 'list.php';
		$template = '../../../include/web/template-main.php';		
		$header 	= '../../../include/web/header.php';
		$footer 	= '../../../include/web/footer.php';
}

require_once $template;

#get values

function getCategoryName($catId)
{
	$get = mysql_fetch_array(mysql_query("select name from category where Id=$catId"));
	return $get['name'];
}

?>





