<!DOCTYPE html>
<html>
<body>

<form action="process.php?action=register" method="POST">
	<div class="ccontainer">
	<div class="contact-form">
	<span><label required>Username</label></span>
	<input type="text" name="username" placeholder="your username">
	
	<span><label required>First name</label></span>
	<input type="text" name="firstname"  placeholder="your first name">
	
	<span><label required>Last name</label></span>
	<input type="text" name="lastname"  placeholder="your last name">
	
	<span><select name="level" required>
			<option value="">Select Level</option>
			<option value="admin">Admin</option>
			<option value="staff">Staff</option>
			<option value="delivery">Delivery</option>
		</select>
	</span>
	
	<span><label required>Password</label></span>
	<input type="password" name="password" placeholder="enter password">

	<button class="button updatebtn" type="submit">Register</button>
	</div>
	</div>
</form>
	
</body>
</html>