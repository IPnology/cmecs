<?php
$orderNumber = (isset($_GET['orderNumber']) && $_GET['orderNumber'] != '') ? $_GET['orderNumber'] : '';
$query = mysql_query("select * from checkout where orderNumber='$orderNumber'");

?>
<br><br><br>
<center>

<form method="get">
	<input type="hidden" name="view" value="searchOrderNumber" />
	<input type="search" name="orderNumber" />
	<button type="submit">Search</button>
</form>
</center>

<?php
if (mysql_num_rows($query) >0 ){
$row = mysql_fetch_array($query);
$cartQuery = mysql_query("select * from cart where orderNumber='$orderNumber'");
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

</br></br></br>
<table class="tablelist" style="border-bottom:2px solid grey;">
<td><div style="font-weight:bold;">Name: <?=$row['fname']?>, <?=$row['lname']?></div></br>
<td><div style="font-weight:bold;">Status: <?=$row['status'];?></div>
<td><div style="font-weight:bold;">Reason: <?=$row['rejectReason'];?></div>
</table></br>


<center>
<table width="100%">
	<tr width="100%">
	<td valign="top">
Billing Address</br>
		<div class="myaccountfont">
			</br><?=$row['fname']?>, <?=$row['lname']?></br></br>
			<?=$row['street']?>, <?=$row['brgy']?></br>
			<?=$row['city']?></br>
			<?=$row['province']?></br>
			<?=$row['postal']?></br>
			
	<td valign="top">		
Shipping Address</br>
		<div class="myaccountfont">
			</br><?=$row['fname']?>, <?=$row['lname']?></br></br>
			<?=$row['street']?>, <?=$row['brgy']?></br>
			<?=$row['city']?></br>
			<?=$row['province']?></br>
			<?=$row['postal']?></br>

</table>



</div></br></br>
</div>
<?php
}
else
{?>

<br><br><br>
<center><font color="red">Order Number "<?=$orderNumber?>" not Found</font></center>
<br><br><br>
<br><br><br>
<br><br><br>
<br><br><br>

<?php }?>