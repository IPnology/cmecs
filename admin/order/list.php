<?php
$query = mysql_query("select * from checkout");
?>
<div style="min-height: 55%;">
<h1></br>Order Details</br></h1>
</br>
<table class="tableorder">

	<tr>
		<th>Username</th>
		<th>Order Number</th>
		<th>Address</th>
		<th>Date</th>
		<th>Status</th>
		<th>Total Price</th>
	</tr>
	
	<?php
		while($row=mysql_fetch_array($query)){
	?>
	<tr>
		<td><?=$row['username']?></td>
		<td><?=$row['orderNumber']?></td>
		<td><?=$row['address']?></td>
		<td><?=$row['date']?></td>
		<td><?=$row['status']?></td>
		<td><?=$row['totalPrice']?></td>
	</tr>
	<?php
		}
	?>
	
</table>
</div>