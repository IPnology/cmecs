<?php
if (!isset($username)){
	echo "Please login.";
}
else{

$query = mysql_query("select * from checkout where username = '$username'");
?>
<div class="listwrapper">
<div class="myaccountheader" style=" font-size: 1.6em;"></br>ORDER DETAILS</br></h1></div>
<table class="tablelist">

	<tr>
		<th>USERNAME</th>
		<th>ORDER NUMBER</th>
		<th>DATE</th>
		<th>STATUS</th>
		<th>DELIVERY STATUS</th>
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
		<?php
		if ($row['status'] == "Approved"){
		?>
		<td><div style="color:green;"><?=$row['status']?></div></td>
		<?php 
		}
		else if ($row['status'] == "Rejected"){
		?>
		<td><div style="color:red;"><?=$row['status']?></div></td>
		<?php 
		}
		else if ($row['status'] == "Pending"){
		?>
		<td><div style="color:blue;"><?=$row['status']?></div></td>
		<?php 
		}
		else{
		?>
		<td><div><?=$row['status']?></div></td>
		<?php 
		}
		?>
		<td><?=getDeliveryStatus($row['orderNumber'])?></td>
		<td><?=$row['totalPrice']?></td>
		<td><button class="myButton" onClick="location.href='?view=detail&id=<?=$row['Id']?>'">VIEW ORDER</button></td>
	</tr>
	<?php
		}
	?>
	
</table>
</div>
<?php
}
?>