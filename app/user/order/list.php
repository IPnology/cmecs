<?php
if (!isset($username)){
	echo "Please login.";
}
else{

$query = mysql_query("select * from checkout where username = '$username'");
?>
<div class="loginwrapper">

<h1></br>Order Details</br></h1>
</br>
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
<?php
}
?>