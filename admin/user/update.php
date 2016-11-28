<?php
$id = (isset($_GET['id']) && $_GET['id'] != '') ? $_GET['id'] : '';

$query = mysql_query("select * from user where Id = $id");

$row=mysql_fetch_array($query)
?>

<form action="process.php?action=update&id=<?=$id?>" method="POST">
	<div class="ccontainer" style="border:1px solid; border-color:grey; padding:10px 20px; margin-left:500px;">
	Username:</br>
	<input type="text" name="username" style="width:350px;" value="<?=$row['username']?>" placeholder="your username">
	</br>
	First Name:</br>
	<input type="text" name="firstname" style="width:350px;" value="<?=$row['fname']?>" placeholder="your first name">
	</br>
	Last Name:</br>
	<input type="text" name="lastname" style="width:350px;" value="<?=$row['lname']?>" placeholder="your last name">
	</br>
	Password:</br>
	<input type="password" name="password" style="width:350px;"  placeholder="enter password">
	</br>
	Repeat Password:</br>
	<input type="password" name="repeatpassword" style="width:350px;" placeholder="enter password">
	</br></br>
	<button class="button updatebtn" type="submit" value="Update">Save Changes</button>
</form>