<?php
include_once("../../../config/database.php");

$view = (isset($_GET['view']) && $_GET['view'] != '') ? $_GET['view'] : '';

switch ($view) {
	
	case 'add' :
		$content 	= 'add.php';
		$template 	= '../../../include/web/template-main.php';		
		$header 	= '../../../include/web/headerCustomer.php';
		$footer 	= '../../../include/web/footer.php';
		break;
		
	case 'list' :
		$content 	= 'list.php';
		$template 	= '../../../include/web/template-main.php';		
		$header 	= '../../../include/web/headerCustomer.php';
		$footer 	= '../../../include/web/footer.php';		
		break;
		
	case 'update' :
		$content 	= 'update.php';
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
		
	case 'searchList' :
		$content 	= 'searchList.php';
		$template 	= '../../../include/web/template-main.php';		
		$header 	= '../../../include/web/headerCustomer.php';
		$footer 	= '../../../include/web/footer.php';		
		break;
		
	case 'temp-cart' :
		$content 	= 'tempCart.php';
		$template 	= '../../../include/web/template-main.php';		
		$header 	= '../../../include/web/headerCustomer.php';
		$footer 	= '../../../include/web/footer.php';	
		break;
		
	case 'checkout' :
		$content 	= 'checkout.php';
		$template 	= '../../../include/web/template-main.php';		
		$header 	= '../../../include/web/headerCustomer.php';
		$footer 	= '../../../include/web/footer.php';		
		break;
		
	case 'shipping-address' :
		$content 	= 'shippingAddress.php';
		$template 	= '../../../include/web/template-main.php';		
		$header 	= '../../../include/web/headerCustomer.php';
		$footer 	= '../../../include/web/footer.php';	
		break;
		
	case 'success' :
		$content 	= 'success.php';
		$template 	= '../../../include/web/template-main.php';		
		$header 	= '../../../include/web/headerCustomer.php';
		$footer 	= '../../../include/web/footer.php';	
		break;
		
	case 'payment-method' :
		$content 	= 'paymentMethod.php';
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

function getProductName($productId, $type)
{
	if($type == 'PE'){
		return "personalize";
	}
	else{
		$get = mysql_fetch_array(mysql_query("select name from product where Id=$productId"));
		return $get['name'];
	}
}

?>





