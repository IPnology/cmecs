<?php
$id = (isset($_GET['id']) && $_GET['id'] != '') ? $_GET['id'] : '';

$message = (isset($_GET['message']) && $_GET['message'] != '') ? $_GET['message'] : '';

$query = mysql_query("select * from product where Id = $id");

$row=mysql_fetch_array($query)
?>
	
	<img src="../../media/<?=$row['image']?>"></br>
	Name:<?=$row['name']?></br>
	Description:<?=$row['description']?></br>
	Price:<?=$row['price']?></br>
	</br></br>
	
	<form action="process.php?action=add-to-cart" method="POST" >
	<input type="hidden" name="username" value="<?=$_SESSION['customer_session']?>">
	<input type="hidden" name="productId" value="<?=$id?>">
	<input type="hidden" name="quantity" value="1">
	<input type="hidden" name="price" value="<?=$row['price']?>">
	
	<?php
	$countData = mysql_num_rows(mysql_query("select * from temp_cart where productId = $id"));
	?>
	<?php
		if ($countData > 0){
			echo "<button type='button'>Already Added to Cart</button>";
		}
		else{
			echo "<button type='submit'>Add to Cart</button>";
		}
	?>
	</form>

<?php
require_once 'tempCart.php';
?>