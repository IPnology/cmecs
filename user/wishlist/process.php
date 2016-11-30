<?php

require_once '../../config/database.php';

$action = $_GET['action'];	
	
switch ($action) {
    
	case 'add-to-wishlist' :
		addToWishlist();
		break;
	
	default :
}

function addToWishlist()
{
	$username = $_POST['username'];
	$productId = $_POST['productId'];
	
	mysql_query("insert into wishlist set username='".$username."',
											productId='".$productId."'");
											
	header('Location: ../product/?view=detail&id='.$productId);
}
?>