<?php
$query = mysql_query("select * from temp_cart");

$message = (isset($_GET['message']) && $_GET['message'] != '') ? $_GET['message'] : '';
?>

<br><?=$message;?>
 <div class="left_sidebar">
	<div class="sellers">
		<h4>MY CART</h4>
		<div class="single-nav">
			<table class="mycart">
				<tr>
					<th>PRODUCT NAME</th>
					<th></th>
					<th>QTY.</th>
					<th></th>
					<th>PRICE</th>
				</tr>
			<?php
			if(mysql_num_rows($query)>0){ 
				while($row=mysql_fetch_array($query)){
			?>	
			
				
				<tr>
					<td><?=$row['productId']?></td>
					<td>X</td>
					<td><?=$row['quantity']?></td>
					<td>=</td>
					<td><?=$row['price']?>.00</td>
				</tr>
			
			<?php
				}	
				}
				else
				{
					echo "Cart is empty";
				}
			?>
			</table>		
			<button onclick="location.href='?view=checkout">Checkout</button>
		</div>
	</div>
</div>
<div class="clear"></div>