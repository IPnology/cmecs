<?php
$query = mysql_query("select * from user where username = '$username'");

$row=mysql_fetch_array($query);

$message = (isset($_GET['message']) && $_GET['message'] != '') ? $_GET['message'] : '';
?>

<div class="wrapper">
	<form action="process.php?action=payment-method" method="POST">
		PAYMENT METHOD:</br>
		<select name="paymentMethod" class="selectOption" required>
			<option value=""> --Select Method-- </option>
			<option>Cash on Delivery</option>
			<option>Store Payment</option>
		</select>
		<br />
		<input class="registerbtn" type="submit" value="CONFIRM">
	</form>
</div>
<div class="clear"></div>