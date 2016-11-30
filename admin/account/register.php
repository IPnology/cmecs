<!DOCTYPE html>
<html>
<body>

<form action="process.php?action=register" method="POST">
	<div class="ccontainer">
	<div class="contact-form">
	<span><label>Username</label></span>
	<input type="text" name="username" placeholder="your username" required>
	
	<span><label>First name</label></span>
	<input type="text" name="firstname"  placeholder="your first name" required>
	
	<span><label>Last name</label></span>
	<input type="text" name="lastname"  placeholder="your last name" required>
	
	<span><select name="level" required>
			<option value="">Select Level</option>
			<option value="admin">Admin</option>
			<option value="staff">Staff</option>
			<option value="delivery">Delivery</option>
		</select>
	</span>
	
	<span><label>Password</label></span>
	<input type="password" name="password" placeholder="enter password" required>

	<button class="button updatebtn" type="submit">Register</button>
	</div>
	</div>
</form>
	
</body>
</html>