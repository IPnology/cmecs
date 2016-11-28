<?php
$query = mysql_query("select * from temp_cart");

$message = (isset($_GET['message']) && $_GET['message'] != '') ? $_GET['message'] : '';
?>

<br><?=$message;?>
 <div class="left_sidebar">
	<div class="sellers">
		<h4>MY CART</h4>
		<div class="single-nav">

		<?php
		if(mysql_num_rows($query)>0){ 
			while($row=mysql_fetch_array($query)){
		?>	
		<table>
			<tr>
				<th>Product Name</th>
				<th>Quantity</th>
				<th>Price</th>
			</tr>
			
			<tr>
				<td><?=$row['productId']?></td>
				<td><?=$row['quantity']?></td>
				<td><?=$row['price']?></td>
			</tr>
		</table>
		<?php
			}	
			}
			else
			{
				echo "Cart is empty";
			}
		?>
			<button onclick="location.href='?view=checkout">Checkout</button>
		</div>
	</div>
</div>
<div class="clear"></div>

