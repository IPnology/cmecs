<?php
$username = $_GET['username'];
$query = mysql_query("select * from checkout where username=$username");
$row = mysql_fetch_array($query);
$orderNumber = $row['orderNumber'];
$cartQuery = mysql_query("select * from cart where orderNumber='$orderNumber'");
?>

<div class="wrapper">

<div class="successmessageorder">Thank You! Your Order Has Been successfully completed.</div>

<div style="color:green; margin-left:10px; font-weight:bold; font-size:20px;">
Order Number: #<?=$row['orderNumber'];?></br></br></div>
&nbsp;&nbsp;&nbsp;Date and Time: <?=$row['date'];?></br></br>

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

<table class="tablelist" style="border-bottom:2px solid grey;">
<td><div style="font-weight:bold;">Username: <?=$row['username'];?></div></br>
<td><div style="font-weight:bold;">Status: <?=$row['status'];?></div>

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

</br>
</br>
</br>
<center>
<button class="updatebtn" onClick="location.href='../home'">Go Back to Home Page</button>
</center>
<br><br><br>
</div>