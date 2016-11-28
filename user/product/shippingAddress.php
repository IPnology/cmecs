<?php
$username = $_SESSION['customer_session'];

$query = mysql_query("select * from user where username = '$username'");

$row=mysql_fetch_array($query);

$message = (isset($_GET['message']) && $_GET['message'] != '') ? $_GET['message'] : '';
?>

<form action="process.php?action=confirm-address" method="POST">
	Street:</br>
	<input type="text" name="street" value="<?=$row['street']?>" placeholder="Street">
	</br>
	Barangay:</br>
	<input type="text" name="brgy" value="<?=$row['brgy']?>" placeholder="Barangay">
	</br>
	City:</br>
	<input type="text" name="city" value="<?=$row['city']?>" placeholder="City">
	</br>
	Province:</br>
	<input type="text" name="province" value="<?=$row['province']?>" placeholder="province">
	</br>
	Postal Code:</br>
	<input type="text" name="postal" value="<?=$row['postal']?>" placeholder="postal">
	</br></br>
	<input type="submit" value="Confirm">
</form>

<div class="clear"></div>