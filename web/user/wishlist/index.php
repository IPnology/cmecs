<?php
include_once("../../../config/database.php");

$view = (isset($_GET['view']) && $_GET['view'] != '') ? $_GET['view'] : '';

switch ($view) {
	
	case 'list' :
		$content 	= 'list.php';
		$template 	= '../../../include/web/template-main.php';		
		$header 	= '../../../include/web/headerCustomer.php';
		$footer 	= '../../../include/web/footer.php';		
		break;
	
	default :
		$content 	= 'list.php';
		$template 	= '../../../include/web/template-main.php';		
		$header 	= '../../../include/web/headerCustomer.php';
		$footer 	= '../../../include/web/footer.php';
}

require_once $template;

#this is to get the values

function getProductName($productId)
{
	$get = mysql_fetch_array(mysql_query("select name from product where Id=$productId"));
	return $get['name'];
}

#this is to get the image
function getProductImage($productId)
{
	$get = mysql_fetch_array(mysql_query("select image from product where Id=$productId"));
	return $get['image'];
}

?>





