<?php
include_once("../../../config/database.php");

$view = (isset($_GET['view']) && $_GET['view'] != '') ? $_GET['view'] : '';

switch ($view) {
	
	case 'detail' :
		$content 	= 'detail.php';
		$template 	= '../../../include/web/template-main.php';		
		$header 	= '../../../include/web/header.php';
		$footer 	= '../../../include/web/footer.php';		
		break;
		
	case 'truck-schedule' :
		$content 	= 'truckSchedule.php';
		$template 	= '../../../include/web/template-main.php';		
		$header 	= '../../../include/web/header.php';
		$footer 	= '../../../include/web/footer.php';		
		break;
			
	default :
		$content 	= 'list.php';
		$template 	= '../../../include/web/template-main.php';		
		$header 	= '../../../include/web/header.php';
		$footer 	= '../../../include/web/footer.php';
}

require_once $template;

function getTruckName($truckId)
{
	$get = mysql_fetch_array(mysql_query("select name from truck where Id=$truckId"));
	return $get['name'];
}

function getShippingAddress($orderNumber)
{
	$get = mysql_fetch_array(mysql_query("select * from checkout where orderNumber=$orderNumber"));
	$address = $get['street']. ", " .$get['brgy']. ", " .$get['city']. ", " .$get['province']. ", " .$get['postal']; 
	return $address;
}

function getProductName($productId)
{
	$get = mysql_fetch_array(mysql_query("select name from product where Id=$productId"));
	return $get['name'];
}

?>



