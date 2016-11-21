<?php
$id = (isset($_GET['id']) && $_GET['id'] != '') ? $_GET['id'] : '';

$query = mysql_query("select * from product where Id = $id");

$row=mysql_fetch_array($query)
?>

<form action="process.php?action=update&id=<?=$id?>" method="POST" enctype="multipart/form-data">
	Name:</br>
	<input type="text" name="name" value="<?=$row['name']?>" placeholder="Add category"></br>
	Description:</br>
	<textarea name="description"><?=$row['description']?></textarea></br>
	Price:</br>
	<input type="text" name="price" value="<?=$row['price']?>" placeholder="add price"></br>
	Upload Photo:</br>
	<input type="file" name="upload_file"  /><br>
	</br></br>
	<input type="submit" value="Update">
</form>