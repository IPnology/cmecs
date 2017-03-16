<?php
$query = mysql_query("select * from user where username = '$username'");

$row=mysql_fetch_array($query);

$message = (isset($_GET['message']) && $_GET['message'] != '') ? $_GET['message'] : '';
?>

<div class="wrapper">
	<form action="process.php?action=confirm-address" method="POST">
		FIRST NAME:</br>
		<input type="text" name="fname" value="<?=$row['fname']?>" placeholder="First Name">
		LAST NAME:</br>
		<input type="text" name="lname" value="<?=$row['lname']?>" placeholder="Last Name">
		STREET:</br>
		<input type="text" name="street" value="<?=$row['street']?>" placeholder="Street">
		</br></br>
		BARANGAY:</br>
		<input type="text" name="brgy" value="<?=$row['brgy']?>" placeholder="Barangay">
		</br></br>
		CITY:</br>
		<input type="text" name="city" value="<?=$row['city']?>" placeholder="City">
		</br></br>
		PROVINCE:</br>
		<input type="text" name="province" value="<?=$row['province']?>" placeholder="province">
		</br></br>
		POSTAL CODE:</br>
		<input type="text" name="postal" value="<?=$row['postal']?>" placeholder="postal">
		</br></br>
		CONTACT NUMBER:</br>
		<input type="text" name="contactNum" value="<?=$row['contactNumber']?>" placeholder="postal">
		</br></br>
		<input type="hidden" name="tp" value="<?=$_GET['tp']?>">
		</br>
		<input class="registerbtn" type="submit" value="CONFIRM">
	</form>
</div>
<div class="clear"></div>