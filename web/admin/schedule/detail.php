<?php
$orderNumber = $_GET['orderNumber'];
$query = mysql_query("select * from checkout where orderNumber=$orderNumber");
$row = mysql_fetch_array($query);
$cartQuery = mysql_query("select * from cart where orderNumber='$orderNumber'");
$deliveryQuery = mysql_query("select * from delivery where orderNumber=$orderNumber");
$deliveryRow = mysql_fetch_array($deliveryQuery);
$message = (isset($_GET['message']) && $_GET['message'] != '') ? $_GET['message'] : '';
?>

<div class="wrapper">

<div style="color:green; margin-left:10px; font-weight:bold; font-size:20px;">
Order Number: #<?=$row['orderNumber'];?></br></br></div>
&nbsp;&nbsp;&nbsp;Date and Time: <?=$row['date'];?></br></br>
<?php
if(mysql_num_rows($cartQuery)>0){
	while($cartRow=mysql_fetch_array($cartQuery)){
?>

<!-- Put space check layout in document page 50 -->
<table class="tablelist" style="border-top:2px solid grey;">
	<tr>
		 <td style="float:left;">Product</td>

		<td style="float:right;">Price:</td> 
	</tr>
	</br>
</table>
	</br>
<table class="tablelist">
	<tr>

		<td style="float:left;"><?=getProductName($cartRow['productId']);?></br></br>Product ID: #<?=$cartRow['productId'];?></td>
		<td style="float:right;">PHP <?=$cartRow['price'];?></td> 
	</tr>
</table>
<?php
	}
}
else{
	echo "Cart is Empty.";
}
?>
</br>

<!--Shipping Information</br></br>

Address: , , , </br></br>
 -->

		<td style="float:left; font-weight:bold;">TOTAL:</td>
		<td style="float:right;font-weight:bold; "><?=$row['totalPrice'];?></td>
</br>
</br>
<div style="width:300px;">
<?php
if ($deliveryRow['status'] != "Shipping"){
?>
<button class="updatebtn" onClick="location.href='process.php?action=shipping&orderNumber=<?=$orderNumber?>'">Shipping</button>
<?php 
}
?>
<?php
if ($deliveryRow['status'] != "Received"){
?>
<button class="updatebtn" onClick="location.href='process.php?action=received&orderNumber=<?=$orderNumber?>'">Received</button>
<?php 
}
?>
<?php
if ($deliveryRow['status'] != "Bad Address"){
?>
<button class="updatebtn" onClick="location.href='process.php?action=bad-address&orderNumber=<?=$orderNumber?>'">Bad Address</button>
<?php 
}
?>
<?php
if ($deliveryRow['status'] != "Canceled"){
?>
<button class="updatebtn" onClick="location.href='process.php?action=canceled&orderNumber=<?=$orderNumber?>'">Canceled</button>
<?php 
}
?>


</div>

</br></br></br>
<table class="tablelist" style="border-bottom:2px solid grey;">
<td><div style="font-weight:bold;">Username: <?=$row['username'];?></div></br>
<td><div style="font-weight:bold;">Status: <?=$deliveryRow['status'];?></div>

</table></br>


<div style="margin-left:150px;">
Billing Address</br>
		<div class="myaccountfont">
			<?=$row['street']?>, <?=$row['brgy']?></br>
			<?=$row['city']?></br>
			<?=$row['province']?></br>
			<?=$row['postal']?></br>
</div>


</div>
<div style="float:right; margin-top:-115px; margin-right:150px;">
Shipping Address</br>
		<div class="myaccountfont">
			<?=$row['street']?>, <?=$row['brgy']?></br>
			<?=$row['city']?></br>
			<?=$row['province']?></br>
			<?=$row['postal']?></br>
</div>




</div></br></br>
</div>