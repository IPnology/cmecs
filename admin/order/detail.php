<?php
$id = $_GET['id'];
$query = mysql_query("select * from checkout where Id=$id");
$row = mysql_fetch_array($query);
$orderNumber = $row['orderNumber'];
$cartQuery = mysql_query("select * from cart where orderNumber='$orderNumber'");
$message = (isset($_GET['message']) && $_GET['message'] != '') ? $_GET['message'] : '';
?>
<?=$message;?></br></br>

&nbsp;&nbsp;&nbsp;ORDER DETAILS</br></br>
<?php
if(mysql_num_rows($cartQuery)>0){
	while($cartRow=mysql_fetch_array($cartQuery)){
?>

<!-- Put space check layout in document page 50 -->
<table class="tablelist">
	<tr>
		<td>Name: <?=getProductName($cartRow['productId']);?></td>
		<td>Product ID:<?=$cartRow['productId'];?></td>
		<td>Quantity:<?=$cartRow['quantity'];?></td>
		<td>Price: <?=getProductPrice($cartRow['productId']);?></td>
		<td>Total:<?=$cartRow['price'];?></td>
	</tr>
	</br></br>
</table>	
<?php
	}
}
else{
	echo "Cart is Empty.";
}
?>
<div style="text-align:center; margin-top:30px;">
</br>
Shipping Information</br></br>
Username: <?=$row['username'];?></br></br>
Order Number: <?=$row['orderNumber'];?></br></br>
Address: <?=$row['street'];?>, <?=$row['brgy'];?>, <?=$row['city'];?>, <?=$row['province'];?>, <?=$row['postal'];?></br></br>
Date: <?=$row['date'];?></br></br>
Total Price: <?=$row['totalPrice'];?></br></br>
Status: <?=$row['status'];?></br></br>
<?php
if ($row['status'] == 'Approved'){
?>
<button onCLick="location.href='?view=set-delivery&id=<?=$row['Id']?>'">Set Delivery</button>
<?php
}
?>

<button class="approvedorder" onClick="location.href='process.php?action=approve&id=<?=$row['Id']?>'">Approve</button>
<button class="rejectedorder" onClick="location.href='process.php?action=reject&id=<?=$row['Id']?>'">Reject</button>


</div>