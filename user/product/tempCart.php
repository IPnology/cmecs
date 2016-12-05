<?php
$query = mysql_query("select * from temp_cart where username = '$username'");

$message = (isset($_GET['message']) && $_GET['message'] != '') ? $_GET['message'] : '';
?>

<br><?=$message;?>
 <div class="mycartwrapper">
	<div>
		<div>
		<div class="mycartheader">MY CART</div>
			<table class="tablemycart">
				<tr>
					<th class="prodnamemycart">PRODUCT NAME</th>
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