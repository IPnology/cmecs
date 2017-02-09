<?php

require_once '../../../config/database.php';

$action = $_GET['action'];	
	
switch ($action) {
    
	case 'add-to-cart' :
		addToCart();
		break;
	
	case 'confirm-address' :
		confirmAddress();
		break;
	
	case 'payment-method' :
		paymentMethod();
		break;
	
	case 'update-quantity' :
		updateQuantity();
		break;
	
	default :
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

function updateQuantity()
{
	$count = $_POST['count'];
	
	for($i=0;$i<$count;$i++){
		$id = $_POST['id'];
		$quantity = $_POST['quantity'];
		$price = $_POST['price'];
		$productId = $_POST['productId'];
		
		$quantity = $_POST['quantity'];
		
		$get = mysql_fetch_array(mysql_query("select quantity from product where Id=$productId[$i]"));
		
		if ($get['quantity'] > $quantity[$i]){
	
				$totalPrice = $quantity[$i] * $price[$i];
				mysql_query("UPDATE temp_cart SET quantity='$quantity[$i]',
													price='$totalPrice'
													WHERE id='$id[$i]'");
				
				$success = 'message=You have successfully Updated Quantity';
				}		
			else{
				$insuf = 'insuf=Some Quantities are insuficient';
			}
			header('Location: ../product/?view=checkout&'.$success.'&'.$insuf);
		}
}

function confirmAddress()
{
	$username = $_SESSION['user_session'];
	$fname = $_POST['fname'];
	$lname = $_POST['lname'];
	$street = $_POST['street'];
	$brgy = $_POST['brgy'];
	$city = $_POST['city'];
	$province = $_POST['province'];
	$postal = $_POST['postal'];
	$contactNum = $_POST['contactNum'];
	$tp = $_POST['tp'];
	$orderNumber = round(microtime(true));
	
	# input data to checkout
	mysql_query("insert into checkout set username='".$username."',
											fname='".$fname."',
											lname='".$lname."',
											street='".$street."',
											brgy='".$brgy."',
											city='".$city."',
											province='".$province."',
											postal='".$postal."',
											orderNumber='".$orderNumber."',
											totalPrice='".$tp."',
											contactNumber='".$contactNum."',
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
					
					
				
				$get = mysql_fetch_array(mysql_query("select quantity from product where Id=$productId"));
				
				$newQuantity = $get['quantity'] - $quantity;
													
				mysql_query("UPDATE product SET quantity='$newQuantity' where Id=$productId");
				}
	}
	
	#delete data from temp_cart
	mysql_query("delete from temp_cart where username='".$username."'");
	
	header("Location: ../product/?view=payment-method&username='".$username."'");
}

function paymentMethod(){
	
	$username = $_SESSION['user_session'];
	
		mysql_query("UPDATE checkout SET paymentMethod='$paymentMethod' where username=$username");
		
	header("Location: ../product/?view=success&username='".$username."'");
	
}


?>