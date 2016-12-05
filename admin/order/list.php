<?php
$status = (isset($_GET['status']) && $_GET['status'] != '') ? $_GET['status'] : 'Pending';
$query = mysql_query("select * from checkout where status='$status'");
?>
<div class="listwrapper">
<h1></br>Order Details</br></h1>
</br>
<a href="?status=Pending">Pending</a>
<a href="?status=Approved">Approved</a>
<a href="?status=Rejected">Rejected</a>
<table class="tablelist">

	<tr>
		<th>USERNAME</th>
		<th>ORDER NUMBER</th>
		<th>DATE</th>
		<th>STATUS</th>
		<th>TOTAL PRICE</th>
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
		<td><button class="myButton" onClick="location.href='?view=detail&id=<?=$row['Id']?>'">VIEW ORDER</button></td>
	</tr>
	<?php
		}
	?>
	
</table>
</div>