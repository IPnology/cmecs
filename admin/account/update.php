<?php
$id = (isset($_GET['id']) && $_GET['id'] != '') ? $_GET['id'] : '';

$query = mysql_query("select * from user where Id = $id");

$row=mysql_fetch_array($query)
?>

<form action="process.php?action=update&id=<?=$id?>" method="POST">
	<div class="ccontainer">
	<div class="contact-form">
	<span><label>Username</label></span>
	<input type="text" name="username"  value="<?=$row['username']?>" placeholder="your username">
	
	<span><label>First name</label></span>
	<input type="text" name="firstname" value="<?=$row['fname']?>" placeholder="your first name">
	<span><label>Last name</label></span>
	<input type="text" name="lastname" value="<?=$row['lname']?>" placeholder="your last name">
	<span><label>Password</label></span>
	<input type="password" name="password" placeholder="enter password">
	<span><label>Repeat Password</label></span>
	<input type="password" name="repeatpassword" placeholder="enter password">
	<button class="button updatebtn" type="submit" value="Update">Save Changes</button>
	</div>
	</div>
</form>