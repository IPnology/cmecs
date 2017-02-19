<?php
$query = mysql_query("select * from temp_cart where username='$username'");

#count to be sent to process for array
$count=mysql_num_rows($query);

$message = (isset($_GET['message']) && $_GET['message'] != '') ? $_GET['message'] : '';
?>

	<div class="successmessage"><?=$message;?></div>
	</br>
	<?php if (!$message){} else {?>
	<div class="successmessage"> <?=$message;?></div>
	<?php } ?>
			<table class="tablemycart">
				<tr>
					<td colspan="5" class="checkoutheader"> YOUR ORDER
				<tr style="font-size:.8em">
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
					<td><input type="text" name="quantity[]" value="<?=$row['quantity']?>" required style="width: 30px; padding: 1%; height: 90%;"></td>
					<td>=</td>
					<td><?=$row['price']?>.00</td>
				</tr>
			
			<?php
				}	
				?>
				
				<tr class="checkouttotal" style="font-size: .9em;">
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
			<tr>
			<td><input type="submit" class="updatebtn" name="Submit" value="Update Cart" style="margin-left: 60.333%;">
			<td></td>
			<td></td>
			<td></td>
			<td></td>	
			</tr>
			</form>
			</table>		
	</br>
	<div style="width:: 90%; margin-left: 25%;"> 
	<button class="myButton" onClick="location.href='index.php'">Continue Shopping</button><br><br>
	<button class="deletebtn" onClick="location.href='?view=shipping-address&tp=<?=$totalPrice;?>'">Proceed to Checkout >></button>
	</br></br>
	</div>
</div>
</div>