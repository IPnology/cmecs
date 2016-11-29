<?php
$id = (isset($_GET['id']) && $_GET['id'] != '') ? $_GET['id'] : '';

$query = mysql_query("select * from category where Id = $id");

$row=mysql_fetch_array($query)
?>

<form action="process.php?action=update&id=<?=$id?>" method="POST" enctype="multipart/form-data">
	<div class="ccontainer">
	<div class="contact-form">
	<span><label>Name</label></span>
	<input type="text" name="name" value="<?=$row['name']?>" required>
	
	<span><label>Description</label></span>
	<textarea name="description" class="description"><?=$row['description']?></textarea>
	
	<span><label>Upload Photo:</label></span>
	<input type="file" name="upload_file"/><br>
	</br>
	<button class="button updatebtn" type="submit">Save Changes</button>
	</div>
</form>