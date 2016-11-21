<?php
$id = (isset($_GET['id']) && $_GET['id'] != '') ? $_GET['id'] : '';

$query = mysql_query("select * from category where Id = $id");

$row=mysql_fetch_array($query)
?>

<form action="process.php?action=update&id=<?=$id?>" method="POST">
	Name:</br>
	<input type="text" name="name" value="<?=$row['name']?>" placeholder="Add category">
	</br></br>
	<input type="submit" value="Update">
</form>