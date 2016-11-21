<?php
$id = (isset($_GET['id']) && $_GET['id'] != '') ? $_GET['id'] : '';

$query = mysql_query("select * from product where Id = $id");

$row=mysql_fetch_array($query)
?>

<form action="process.php?action=update&id=<?=$id?>" method="POST">
	Name:</br>
	<input type="text" name="name" value="<?=$row['name']?>" placeholder="Add category"></br>
	Description:</br>
	<input type="text" name="description" value="<?=$row['description']?>" placeholder="add description"></br>
	Price:</br>
	<input type="text" name="price" value="<?=$row['price']?>" placeholder="add price"></br>
	Image:</br>
	<input type="text" name="image" value="<?=$row['image']?>" placeholder="add image"></br>
	</br></br>
	<input type="submit" value="Update">
</form>