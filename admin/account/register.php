<!DOCTYPE html>
<html>
<body>

<form action="process.php?action=register" method="POST">
	<div class="ccontainer">
	<div class="contact-form">
	<span><label>Username</label></span>
	<input type="text" name="username" placeholder="your username">
	
	<span><label>First name</label></span>
	<input type="text" name="firstname"  placeholder="your first name">
	
	<span><label>Last name</label></span>
	<input type="text" name="lastname"  placeholder="your last name">
	
	<span><label>Password</label></span>
	<input type="password" name="password" placeholder="enter password">
	
	<span><label>Repeat Password</label></span>
	<input type="password" name="repeatpassword" placeholder="enter password">

	<button class="button updatebtn" type="submit">Register</button>
	</div>
	</div>
</form>
	
</body>
</html>