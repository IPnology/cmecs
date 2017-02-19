<?php
include_once("../../../config/database.php");

$view = (isset($_GET['view']) && $_GET['view'] != '') ? $_GET['view'] : '';

switch ($view) {
	
	case 'searchOrderNumber' :
		$content 	= 'searchOrderNumber.php';
		$template 	= '../../../include/web/template-main.php';		
		$header 	= '../../../include/web/headerCustomer.php';
		$footer 	= '../../../include/web/footer.php';
		break;
	
	case 'detail' :
		$content 	= 'detail.php';
		$template 	= '../../../include/web/template-main.php';		
		$header 	= '../../../include/web/headerCustomer.php';
		$footer 	= '../../../include/web/footer.php';
		break;
		
	default :
		$content 	= 'list.php';
		$template	= '../../../include/web/template-main.php';
		$header 	= '../../../include/web/headerCustomer.php';
		$footer 	= '../../../include/web/footer.php';
}

require_once $template;

function getDeliveryStatus($orderNumber)
{
	$get = mysql_fetch_array(mysql_query("select status from delivery where orderNumber=$orderNumber"));
	return $get['status'];
}

function getProductName($productId)
{
	$get = mysql_fetch_array(mysql_query("select name from product where Id=$productId"));
	return $get['name'];
}

function getProductPrice($productId)
{
	$get = mysql_fetch_array(mysql_query("select price from product where Id=$productId"));
	return $get['price'];
}

?>