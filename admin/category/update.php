<?php
$id = (isset($_GET['id']) && $_GET['id'] != '') ? $_GET['id'] : '';

$query = mysql_query("select * from category where Id = $id");

$row=mysql_fetch_array($query)
?>

<form action="process.php?action=update&id=<?=$id?>" method="POST" enctype="multipart/form-data">
	<div class="ccontainer">
	Name:</br>
	<input type="text" name="name" value="<?=$row['name']?>" placeholder="Add category"></br>
	Description:</br>
	<textarea name="description"><?=$row['description']?></textarea></br>
	Upload Photo:</br>
	<input type="file" name="upload_file"  /><br>
	</br></br>
	</div>
	<input type="submit" class="btn-cupdate2" value="Update">
</form>