<?php
$id = $_GET['id'];
$query = mysql_query("select * from checkout where Id=$id");
$truckQuery = mysql_query("select * from truck");
$row = mysql_fetch_array($query);
$orderNumber = $row['orderNumber'];
$cartQuery = mysql_query("select * from cart where orderNumber='$orderNumber'");
$message = (isset($_GET['message']) && $_GET['message'] != '') ? $_GET['message'] : '';
?>

<?=$message;?></br></br>

<div class="wrapper">

<div style="color:green; margin-left:10px; font-weight:bold; font-size:20px;">
Order Number: #<?=$row['orderNumber'];?></br></br></div>
&nbsp;&nbsp;&nbsp;Date and Time: <?=$row['date'];?></br></br>

<!-- Put space check layout in document page 50 -->
<table class="tablelist" style="border-top:2px solid grey;">
	<tr>
		 <td style="float:left;">Product</td>

		<td style="float:right;">Price:</td> 
	</tr>
	</br>
</table>

<?php
if(mysql_num_rows($cartQuery)>0){
	while($cartRow=mysql_fetch_array($cartQuery)){
?>


	</br>
<table class="tablelist">
	<tr>

		<td style="float:left;"><?=getProductName($cartRow['productId']);?></br></td>
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


<form action="process.php?action=setDelivery&id=<?=$id?>" method="POST">
<input type="hidden" name="orderNumber" value="<?=$row['orderNumber'];?>">

<table width="60%">
<tr>
<td><label>SET DATE *</label></br></br>
<input type="date" class="select" name="deliveryDate">

<td><label>CHOOSE TRUCK *</label></br></br>
<select name="truck" class="select" required>
	</br><option value="">-- Select Truck --</option>
	<?php
	if(mysql_num_rows($truckQuery)>0){ 
			while($truckRow=mysql_fetch_array($truckQuery)){
	?>
	<option value="<?=$truckRow['Id']?>"><?=$truckRow['name']?></option>
	<?php
			}
	}
	?>
</select>
<td>
</br></br><input type="submit" class="myButton" value="Set Delivery">
</tr>
</table>


</form>
<br><br>

<table class="tablelist" style="border-bottom:2px solid grey;">
<tr>
<td><div style="font-weight:bold;">Name: <?=$row['fname']?>, <?=$row['lname']?></div></br>
<td><div style="font-weight:bold;">Status: <?=$row['status'];?></div>
<?php
if ($row['status'] == "Rejected"){
?>
<tr>
<td colspan="2"><div style="font-weight:bold color;color:red;"><?=$row['rejectReason'];?></div>
</tr>
<?php }?>
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

</table> <br>


</br>
</div>