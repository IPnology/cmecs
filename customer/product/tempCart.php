<?php
$query = mysql_query("select * from temp_cart");

$message = (isset($_GET['message']) && $_GET['message'] != '') ? $_GET['message'] : '';
?>

<br><?=$message;?>

<table>
	
	<tr>
		<th>Product Id</th>
		<th>Quantity</th>
		<th>Price</th>
	</tr>
		
	<?php
		if(mysql_num_rows($query)>0){ 
			while($row=mysql_fetch_array($query)){
	?>	
		
	<tr>
		<td><?=$row['productId']?></td>
		<td><?=$row['quantity']?></td>
		<td><?=$row['price']?></td>
	</tr>
	
	<?php
		}
		}
		else
		{
			echo "Cart is empty";
		}
	?>
	
	<button>Checkout</button>
</table>
