<!DOCTYPE html>
<html>
<body>

<form action="process.php?action=register" method="POST">
	<div class="ccontainer" style="border:1px solid; border-color:grey; padding:10px 20px; margin-left:500px;">
	Username:</br>
	<input type="text" name="username" style="width:350px;" placeholder="your username">
	</br>
	First Name:</br>
	<input type="text" name="firstname" style="width:350px;" placeholder="your first name">
	</br>
	Last Name:</br>
	<input type="text" name="lastname" style="width:350px;" placeholder="your last name">
	</br>
	Password:</br>
	<input type="password" name="password" style="width:350px;"placeholder="enter password">
	</br>
	Repeat Password:</br>
	<input type="password" name="repeatpassword" style="width:350px;" placeholder="enter password">
	</br></br>
	<button class="button updatebtn" type="submit" value="Register">Register</button>
</form>
	
</body>
</html>