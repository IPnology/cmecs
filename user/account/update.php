<?php
$id = (isset($_GET['id']) && $_GET['id'] != '') ? $_GET['id'] : '';

$query = mysql_query("select * from user where Id = $id");

$row=mysql_fetch_array($query)
?>

<form action="process.php?action=update&id=<?=$id?>" method="POST">
	<div class="ccontainer">
	<div class="contact-form">
	Username:</br>
	<input type="text" name="username" value="<?=$row['username']?>" placeholder="your username">
	</br>
	First Name:</br>
	<input type="text" name="firstname" value="<?=$row['fname']?>" placeholder="your first name">
	</br>
	Last Name:</br>
	<input type="text" name="lastname" value="<?=$row['lname']?>" placeholder="your last name">
	</br>
	Birthdate:</br>
	<input type="text" name="birthdate" value="<?=$row['birthdate']?>" placeholder="your birthdate">
	</br>
	Gender:</br>
	<input type="text" name="gender" value="<?=$row['gender']?>" placeholder="your gender">
	</br>
	Street:</br>
	<input type="text" name="street" value="<?=$row['street']?>" placeholder="your Street">
	</br>
	Barangay:</br>
	<input type="text" name="brgy" value="<?=$row['brgy']?>" placeholder="your Barangay">
	</br>
	City:</br>
	<input type="text" name="city" value="<?=$row['city']?>" placeholder="your City">
	</br>
	Province:</br>
	<input type="text" name="province" value="<?=$row['province']?>" placeholder="your Province">
	</br>
	Postal:</br>
	<input type="text" name="postal" value="<?=$row['postal']?>" placeholder="your Postal">
	</br>
	Phone Number:</br>
	<input type="text" name="phoneNumber" value="<?=$row['phoneNumber']?>" placeholder="your phone number">
	</br>
	Password:</br>
	<input type="password" name="password" placeholder="enter password">
	</br>
	Repeat Password:</br>
	<input type="password" name="repeatpassword" placeholder="enter password">
	</br></br>
	<input type="submit" value="Register">
</form>