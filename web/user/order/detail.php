<?php
$id = $_GET['id'];
$query = mysql_query("select * from checkout where Id=$id");
$row = mysql_fetch_array($query);
$orderNumber = $row['orderNumber'];
$deliveryQuery = mysql_query("select * from delivery where orderNumber='$orderNumber'");
$deliveryRow = mysql_fetch_array($deliveryQuery);
$message = (isset($_GET['message']) && $_GET['message'] != '') ? $_GET['message'] : '';
?>
<div class="wrapper" style="width:40%;">
	<?=$message;?></br></br>
	<div class="myaccountfont">
	<div style="font-size: 1.3em; color:#09340E;" class="accountlabels">Order Number #<?=$row['orderNumber'];?></br></div> 
	</br></br><div class="accountlabels">Username:</div> <?=$row['username'];?></br></br>
	<div class="accountlabels">Address:</div> <?=$row['street'];?>, <?=$row['brgy'];?>, <?=$row['city'];?>, <?=$row['province'];?>, <?=$row['postal'];?></br></br>
	<div class="accountlabels">Date:</div> <?=$row['date'];?></br></br>
	<div class="accountlabels">Total Price:</div> <?=$row['totalPrice'];?></br></br>
	<div class="accountlabels">Status:</div> <?=$row['status'];?></br></br>
	<div class="accountlabels">Delivery Status:</div> <?=$deliveryRow['status'];?></br></br>
	
	<?php if (!$row['rejectReason']){} else {?>
	<div class="accountlabels">Reason of Rejection:</div> <?=$row['rejectReason'];?>
	<?php } ?>
	
	</div>
	</br>
	<?php
		if ($row['status'] == 'Pending'){
	?>
		<button class="deletebtn" onClick="location.href='process.php?action=cancel&id=<?=$id?>'">Cancel Order</button>
	<?php
		}
		else{
			echo "This order cannot be cancelled.";
		}
	?>
</div>