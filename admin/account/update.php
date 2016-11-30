<?php
$id = (isset($_GET['id']) && $_GET['id'] != '') ? $_GET['id'] : '';

$query = mysql_query("select * from admin where Id = $id");

$row=mysql_fetch_array($query)
?>

<form action="process.php?action=update&id=<?=$id?>" method="POST">
	<div class="ccontainer">
	<div class="contact-form">
	<span><label>Username</label></span>
	<input type="text" name="username"  value="<?=$row['username']?>" placeholder="your username" required>
	
	<span><label>First name</label></span>
	<input type="text" name="firstname" value="<?=$row['fname']?>" placeholder="your first name" required>
	
	<span><label>Last name</label></span>
	<input type="text" name="lastname" value="<?=$row['lname']?>" placeholder="your last name" required>
	
	<span><select name="level" required>
			<option value="<?=$row['level']?>"><?=$row['level']?></option>
			<option value="admin">Admin</option>
			<option value="staff">Staff</option>
			<option value="delivery">Delivery</option>
		</select>
	</span>
	
	<span><label>Password</label></span>
	<input type="password" name="password" placeholder="enter password" required>
	
	<button class="button updatebtn" type="submit" value="Update">Save Changes</button>
	</div>
	</div>
</form>