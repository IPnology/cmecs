<?php
$query = mysql_query("select * from temp_cart where username='$username'");

$message = (isset($_GET['message']) && $_GET['message'] != '') ? $_GET['message'] : '';
?>

<br><?=$message;?>
 <div class="checkoutwrap">
	<div>
		<div>
		<div class="mycartheader">YOUR ORDER</div>
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
				
				<tr class="checkouttotal">
					<td class="checkoutfont">TOTAL</td>
					<td></td>
					<td></td><td></td>
					<td class="checkoutfont">PHP <?=$totalPrice;?>.00</td>
				</tr>
				<?php
				}
				else
				{
					echo "<tr>
							<td colspan='5'>Cart is empty
							</tr>";
				}
			?>
			</table>		
		</div>
	</div>
	
<button onClick="location.href='?view=shipping-address'">Next</button>
</div>


<div class="clear"></div>