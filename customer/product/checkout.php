<?php
$query = mysql_query("select * from temp_cart");
?>

<table>
	
	<tr>
		<th>UserName</th>
		<th>Quantity</th>
		<th>Price</th>
	</tr>
		
	<?php
		while($row=mysql_fetch_array($query)){
	?>	
		
	<tr>
		<td><?=$row['productId']?></td>
		<td><?=$row['quantity']?></td>
		<td><?=$row['price']?></td>
	</tr>
	
	<?php
		}
	?>
	
</table>
