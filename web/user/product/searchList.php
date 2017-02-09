<?php
$search = (isset($_GET['search']) && $_GET['search'] != '') ? $_GET['search'] : '';
$orderNum = strtolower($search);
$query = mysql_query("select * from checkout where orderNumber=$orderNum");
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
	<div class="accountlabels">Delivery Status:</div> <?=$deliveryRow['status'];?>
	
	</div>
	</br>
</div>