<?php
$id = (isset($_GET['id']) && $_GET['id'] != '') ? $_GET['id'] : '';

$query = mysql_query("select * from category where Id = $id");

$row=mysql_fetch_array($query)
?>
<form action="process.php?action=update&id=<?=$id?>" method="POST" enctype="multipart/form-data">
	Name:</br>
	<div style="width:500px; padding: 6px 10px;">
	<input type="text" name="name" value="<?=$row['name']?>" placeholder="Add category"></br>
	</div>
	<div style="width:500px; padding: 6px 10px;">
	Description:</br>
	<textarea name="description"><?=$row['description']?></textarea></br>
	</div>
	Upload Photo:</br>
	<input type="file" name="upload_file"  /><br>
	</br></br>
	<input type="submit" value="Update">
</form>
