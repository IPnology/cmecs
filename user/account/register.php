<!DOCTYPE html>
<html>
<body>

<form action="process.php?action=register" method="POST">
	<div class="wrapper">
	<div class="fwhole">
	USERNAME *</br>
	<input type="text" name="username" placeholder="your username">
	</div></br></br>
	
	<div class="fnhalf">
	FIRST NAME *</br>
	<input type="text" name="firstname" placeholder="your first name">
	</div>
	
	<div class="lnhalf">
	LAST NAME *</br>
	<input type="text" name="lastname" placeholder="your last name">
	</div></br></br></br>
	
	<div class="fnhalf">
	PASSWORD *</br>
	<input type="password" name="password" placeholder="enter password">
	</div>
	
	<div class="lnhalf">
	REPEAT PASSWORD *</br>
	<input type="password" name="repeatpassword" placeholder="enter password">
	</div></br></br></br>
	
	<input type="submit" value="Register">
</form>
</div>