<?php

require_once '../../config/database.php';

$action = $_GET['action'];	
	
switch ($action) {
    
	case 'login' :
		login();
		break;
	
	case 'add-to-cart' :
		addToCart();
		break;
	
	default :
}


function login()
{
	// if we found an error save the error message in this variable
	
	$userName = $_POST['username'];
	$password = $_POST['password'];
	
	$query = mysql_query("select * from user where username = '".$userName."' and password = '".$password."'");
	
	if (mysql_num_rows($query) != 0)
	{

		$_SESSION['user_session'] = $userName;
		header('Location: ../home/');

			
	}
	else
	{
		header('Location: index.php?error=User not found in the Database');
	}
	
}

function addToCart()
{
	$username = $_POST['username'];
	$productId = $_POST['productId'];
	$quantity = $_POST['quantity'];
	$price = $_POST['price'];
	
	mysql_query("insert into temp_cart set username='".$username."',
											productId='".$productId."',
											quantity='".$quantity."',
											price='".$price."'");
											
	header('Location: ../product/?view=detail&id='.$productId);
}

?>