<?php
$id = (isset($_GET['id']) && $_GET['id'] != '') ? $_GET['id'] : '';

$query = mysql_query("select * from user where Id = $id");

$row=mysql_fetch_array($query)
?>
<div class="loginwrapper">
<div style="width: 90.333%; margin-left: auto; margin-right: auto; padding-top: 5%;">
<form action="process.php?action=update&id=<?=$id?>" method="POST">
	
	<div class="fwhole">
	<div class="registerlabels">USERNAME *</div>
	<input type="text" name="username" value="<?=$row['username']?>" placeholder="your username" required>
	</div></br>
	
	<div class="fwhole">
	<div class="registerlabels">FIRST NAME *</div>
	<input type="text" name="firstname" value="<?=$row['fname']?>" placeholder="your first name" required>
	</div></br>
	
	<div class="fwhole">
	<div class="registerlabels">LAST NAME *</div>
	<input type="text" name="lastname" value="<?=$row['lname']?>" placeholder="your last name" required>
	</div></br>
	
	<div class="fwhole">
	<div class="registerlabels">BIRTHDATE *</div>
	<input type="text" name="birthdate" value="<?=$row['birthdate']?>" placeholder="your birthdate" required>
	</div></br>
	
	<div class="fwhole">
	<div class="registerlabels">GENDER *</div>
	<select name="gender" class="select" required>
			<option value="">Select Gender</option>
			<option value="female">Female</option>
			<option value="male">Male</option>
	</select>
	 
	</div></br></br>
	
	<div class="fwhole">
	<div class="registerlabels">STREET *</div>
	<input type="text" name="street" value="<?=$row['street']?>" placeholder="your Street" required>
	</div></br>
	
	<div class="fwhole">
	<div class="registerlabels">BARANGAY *</div>
	<input type="text" name="brgy" value="<?=$row['brgy']?>" placeholder="your Barangay" required>
	</div></br>
	
	<div class="fwhole">
	<div class="registerlabels">CITY *</div>
	<input type="text" name="city" value="<?=$row['city']?>" placeholder="your City" required>
	</div></br>
	
	<div class="fwhole">
	<div class="registerlabels">PROVINCE *</div>
	<input type="text" name="province" value="<?=$row['province']?>" placeholder="your Province" required>
	</div></br>
	
	<div class="fwhole">
	<div class="registerlabels">POSTAL *</div>
	<input type="text" name="postal" value="<?=$row['postal']?>" placeholder="your Postal" required>
	</div></br>
	
	<div class="fwhole">
	<div class="registerlabels">PHONE NUMBER *</div>
	<input type="text" name="phoneNumber" value="<?=$row['phoneNumber']?>" placeholder="your phone number" required>
	</div></br>
	
	<div class="fwhole">
	<div class="registerlabels">EMAIL *</div>
	<input type="text" name="email" value="<?=$row['email']?>" placeholder="your email" required>
	</div></br>
	
	<div class="fwhole">
	<div class="registerlabels">PASSWORD *</div>
	<input type="password" name="password" placeholder="enter password" required>
	</div></br>
	
	<div class="fwhole">
	<div class="registerlabels">REPEAT PASSWORD *</div>
	<input type="password" name="repeatpassword" placeholder="enter password" required>
	</div></br>
	
	
	<div class="centerregbtn">
		<input type="submit" class="registerbtn" value="Update">
	</div>
	</br></br>
</form>
</div>
</div>