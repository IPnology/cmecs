<?php
$username = $_SESSION['user_session'];
$query = mysql_query("select * from temp_cart where username='$username'");

$message = (isset($_GET['message']) && $_GET['message'] != '') ? $_GET['message'] : '';
?>

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
</div>

<button onClick="location.href='?view=shipping-address'">Next</button>

<div class="clear"></div>