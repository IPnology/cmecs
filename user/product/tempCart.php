<?php
$username = $_SESSION['user_session'];

$query = mysql_query("select * from temp_cart where username = '$username'");
?>

 <div class="left_sidebar">
	<div class="sellers">
		<h4>MY CART</h4>
		<div class="single-nav">
			<table class="tablemycart">
				<tr>
					<th>PRODUCT NAME</th>
					<th></th>
					<th>QTY.</th>
					<th></th>
					<th>PRICE</th>
				</tr>
			<?php
			$totalPrice = 0;
			if(mysql_num_rows($query)>0){ 
				while($row=mysql_fetch_array($query)){
					
					$totalPrice += $row['price'];
			?>	
				<tr>
					<td><?=getProductName($row['productId'])?></td>
					<td>X</td>
					<td><?=$row['quantity']?></td>
					<td>=</td>
					<td><?=$row['price']?>.00</td>
				</tr>
			
			<?php
				}
			?>
				<tr>
					<td colspan="5"> total = <?=$totalPrice;?>
				</tr>
				<tr>
					<td colspan="5"><button onclick="location.href='?view=checkout'">Checkout</button>
				</tr>
				
			<?php
				}
				else
				{
					echo "Cart is empty";

				}
			?>
			</table>		
		</div>
	</div>
</div>
<div class="clear"></div>