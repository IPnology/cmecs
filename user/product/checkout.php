<?php
$query = mysql_query("select * from temp_cart where username='$username'");

#count to be sent to process for array
$count=mysql_num_rows($query);

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
				
			<form action="process.php?action=update-quantity" method="POST">
			<input type="hidden" name="count" value="<?=$count;?>">
			<?php
			$totalPrice = 0;
			if(mysql_num_rows($query)>0){ 
				while($row=mysql_fetch_array($query)){
					$totalPrice += $row['price'];
							
			?>	
				<input type="hidden" name="id[]" value="<?=$row['Id'];?>">
				<input type="hidden" name="price[]" value="<?=$row['price'];?>">
				<tr>
					<td><?=getProductName($row['productId'])?></td>
					<td>X</td>
					<td><input type="text" name="quantity[]" value="<?=$row['quantity']?>" required></td>
					<td>=</td>
					<td><?=$row['price']?></td>
				</tr>
			
			<?php
				}	
				?>
				
				<tr class="checkouttotal">
					<td class="checkoutfont">TOTAL</td>
					<td></td>
					<td></td>
					<td></td>
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
			<td></td>
			<td></td>
				<td>
					<input type="submit" style="background-color: #197F92; height: 35px; width: 150px; color: white; border: none; border-radius: 2px;" name="Submit" value="Update Cart">
				</td>	
			<td></td>
			<td></td>
				
			</form>
			</table>		
		</div>
	</div>
<button onClick="location.href='index.php'">Continue Shopping</button>
<button onClick="location.href='?view=shipping-address&tp=<?=$totalPrice;?>'">Proceed to Checkout</button>


</div>



<div class="clear"></div>