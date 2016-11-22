<!DOCTYPE html>
<?php
$error = (isset($_GET['error']) && $_GET['error'] != '') ? $_GET['error'] : '';
?>
<html>
<body>

<br><?=$error;?>

<form action="process.php?action=login" method="POST">	
	Username:<br>
	<input type="text" name="username" >
	<br>
	Password:<br>
	<input type="password" name="password" >
	<br><br>
	<input type="submit" value="Login">
</form>
	<a href="?view=signup">Sign Up</a>
</body>
</html>