<?php
$id = (isset($_GET['id']) && $_GET['id'] != '') ? $_GET['id'] : '';

$query = mysql_query("select * from user where Id = $id");

$row=mysql_fetch_array($query)
?>

<form action="process.php?action=update&id=<?=$id?>" method="POST">
	Username:</br>
	<input type="text" name="username" value="<?=$row['username']?>" placeholder="your username">
	</br>
	First Name:</br>
	<input type="text" name="firstname" value="<?=$row['fname']?>" placeholder="your first name">
	</br>
	Last Name:</br>
	<input type="text" name="lastname" value="<?=$row['lname']?>" placeholder="your last name">
	</br>
	Password:</br>
	<input type="password" name="password" placeholder="enter password">
	</br>
	Repeat Password:</br>
	<input type="password" name="repeatpassword" placeholder="enter password">
	</br></br>
	<input type="submit" value="Register">
</form>