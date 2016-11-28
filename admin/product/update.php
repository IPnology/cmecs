<?php
$id = (isset($_GET['id']) && $_GET['id'] != '') ? $_GET['id'] : '';

$query = mysql_query("select * from product where Id = $id");

$row=mysql_fetch_array($query)
?>

<form action="process.php?action=update&id=<?=$id?>" method="POST" enctype="multipart/form-data">
	<div class="ccontainer">
	<div class="contact-form">
	<span><label>Name</label></span>
	<input type="text" style="width:350px;" name="name" value="<?=$row['name']?>" placeholder="Add category">
	
	<span><label>Description</label></span>
	<textarea name="description" style="width:350px; height:100px; padding:6px 10px;" ><?=$row['description']?></textarea>
	
	<span><label>Price:</label></span>
	<input type="text" style="width:350px;" name="price" value="<?=$row['price']?>" placeholder="add price">
	
	<span><label>Upload Photo:</label></span>
	<input type="file" name="upload_file"/>
	</br>
	<button class="button updatebtn" type="submit" value="Update">Save Changes</button>
	</div>
	</div>
</form>