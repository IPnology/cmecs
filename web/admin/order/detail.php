<?php
$id = $_GET['id'];
$query = mysql_query("select * from checkout where Id=$id");
$row = mysql_fetch_array($query);
$orderNumber = $row['orderNumber'];
$cartQuery = mysql_query("select * from cart where orderNumber='$orderNumber'");
$message = (isset($_GET['message']) && $_GET['message'] != '') ? $_GET['message'] : '';
?>

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
<div style="width:300px;">

<?php
if ($row['status'] == "Pending"){
?>
<button class="updatebtn" onClick="location.href='process.php?action=approve&id=<?=$row['Id']?>'">Approve</button>
<button class="deletebtn" onClick="location.href='index.php?view=reject-reason&id=<?=$row['Id']?>'">Reject</button>
<?php 
}
else if ($row['status'] == "Approved"){
?>
<button class="myButton" onCLick="location.href='?view=set-delivery&id=<?=$row['Id']?>'">Set Delivery</button>
<?php 
}
?>

</div>

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

</table>


</div></br></br>
</div>