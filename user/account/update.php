<?php
$id = (isset($_GET['id']) && $_GET['id'] != '') ? $_GET['id'] : '';

$query = mysql_query("select * from user where Id = $id");

$row=mysql_fetch_array($query)
?>

<form action="process.php?action=update&id=<?=$id?>" method="POST">
	<div class="wrapper">
	<div class="fwhole">
	USERNAME *</br>
	<input type="text" name="username" value="<?=$row['username']?>" placeholder="your username">
	</div></br></br>
	
	<div class="fnhalf">
	FIRST NAME *</br>
	<input type="text" name="firstname" value="<?=$row['fname']?>" placeholder="your first name">
	</div>
	
	<div class="lnhalf">
	LAST NAME *</br>
	<input type="text" name="lastname" value="<?=$row['lname']?>" placeholder="your last name">
	</div></br></br>
	
	<div class="fnhalf">
	BIRTHDATE *</br>
	<input type="text" name="birthdate" value="<?=$row['birthdate']?>" placeholder="your birthdate">
	</div>
	
	<div class="lnhalf">
	GENDER *</br>
	<input type="text" name="gender" value="<?=$row['gender']?>" placeholder="your gender">
	</div></br></br>
	
	<div class="fnhalf">
	STREET *</br>
	<input type="text" name="street" value="<?=$row['street']?>" placeholder="your Street">
	</div>
	
	<div class="lnhalf">
	BARANGAY *</br>
	<input type="text" name="brgy" value="<?=$row['brgy']?>" placeholder="your Barangay">
	</div></br></br>
	
	<div class="fnhalf">
	CITY *</br>
	<input type="text" name="city" value="<?=$row['city']?>" placeholder="your City">
	</div>
	
	<div class="lnhalf">
	PROVINCE *</br>
	<input type="text" name="province" value="<?=$row['province']?>" placeholder="your Province">
	</div></br></br>
	
	<div class="fnhalf">
	POSTAL *</br>
	<input type="text" name="postal" value="<?=$row['postal']?>" placeholder="your Postal">
	</div>
	
	<div class="lnhalf">
	PHONE NUMBER *</br>
	<input type="text" name="phoneNumber" value="<?=$row['phoneNumber']?>" placeholder="your phone number">
	</div></br></br>
	
	<div class="fnhalf">
	PASSWORD *</br>
	<input type="password" name="password" placeholder="enter password">
	</div>
	
	<div class="lnhalf">
	REPEAT PASSWORD *</br>
	<input type="password" name="repeatpassword" placeholder="enter password">
	</div></br></br>
	
	<input type="submit" class="registerbtn" value="Update Profile">
</form>
</div>