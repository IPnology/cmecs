<?php
$username = $_SESSION['user_session'];
$query = mysql_query("select * from checkout where username = '$username'");
?>
<div style="min-height: 55%;">
<h1></br>Order Details</br></h1>
</br>
<table class="tableorder">

	<tr>
		<th>Username</th>
		<th>Order Number</th>
		<th>Date</th>
		<th>Status</th>
		<th>Total Price</th>
		<th></th>
	</tr>
	
	<?php
		while($row=mysql_fetch_array($query)){
	?>
	<tr>
		<td><?=$row['username']?></td>
		<td><?=$row['orderNumber']?></td>
		<td><?=$row['date']?></td>
		<td><?=$row['status']?></td>
		<td><?=$row['totalPrice']?></td>
		<td><button onClick="location.href='?view=detail&id=<?=$row['Id']?>'">View Order</button></td>
	</tr>
	<?php
		}
	?>
	
</table>
</div>