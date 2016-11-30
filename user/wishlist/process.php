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
	
	case 'confirm-address' :
		confirmAddress();
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

function confirmAddress()
{
	$username = $_SESSION['customer_session'];
	$street = $_POST['street'];
	$brgy = $_POST['brgy'];
	$city = $_POST['city'];
	$province = $_POST['province'];
	$postal = $_POST['postal'];
	$orderNumber = round(microtime(true));
	
	# input data to checkout
	mysql_query("insert into checkout set username='".$username."',
											street='".$street."',
											brgy='".$brgy."',
											city='".$city."',
											province='".$province."',
											postal='".$postal."',
											orderNumber='".$orderNumber."',
											date=NOW()");

	#copy data from temp_cart to cart
	$query = mysql_query("select * from temp_cart where username='".$username."'");
	if(mysql_num_rows($query)>0){ 
				while($row=mysql_fetch_array($query)){
					
					$productId = $row['productId'];
					$quantity = $row['quantity'];
					$price = $row['price'];					
					
					mysql_query("insert into cart set productId='".$productId."',
														quantity='".$quantity."',
														price='".$price."',
														orderNumber='".$orderNumber."'");
				}
	}
	
	#delete data from temp_cart
	mysql_query("delete from temp_cart where username='".$username."'");
	
	header('Location: ../product/?view=success');
}


?>