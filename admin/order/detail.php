<?php
$id = $_GET['id'];
$query = mysql_query("select * from checkout where Id=$id");
$row = mysql_fetch_array($query);
$orderNumber = $row['orderNumber'];
$cartQuery = mysql_query("select * from cart where orderNumber='$orderNumber'");
$message = (isset($_GET['message']) && $_GET['message'] != '') ? $_GET['message'] : '';
?>
<?=$message;?></br></br>

ORDER</br></br>
<?php
if(mysql_num_rows($cartQuery)>0){
	while($cartRow=mysql_fetch_array($cartQuery)){
?>
<!-- Put space check layout in document page 50 -->
Name: <?=getProductName($cartRow['productId']);?>
Product ID:<?=$cartRow['productId'];?>
Quantity:<?=$cartRow['quantity'];?>
Price: <?=getProductPrice($cartRow['productId']);?>
Total:<?=$cartRow['price'];?>
</br></br>
<?php
	}
}
else{
	echo "Cart is Empty.";
}
?>
</br>
Shipping Information</br></br>
Username:<?=$row['username'];?></br></br>
Order Number:<?=$row['orderNumber'];?></br></br>
Address:<?=$row['street'];?>, <?=$row['brgy'];?>, <?=$row['city'];?>, <?=$row['province'];?>, <?=$row['postal'];?></br></br>
Date:<?=$row['date'];?></br></br>
Total Price:<?=$row['totalPrice'];?></br></br>
Status:<?=$row['status'];?>

<button class="button updatebtn" onClick="location.href='process.php?action=approve&id=<?=$row['Id']?>'">Approve</button>
<button class="button deletebtn" onClick="location.href='process.php?action=reject&id=<?=$row['Id']?>'">Reject</button>