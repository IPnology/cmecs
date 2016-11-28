<!DOCTYPE html>
<html>
<body>

<form action="process.php?action=add" method="POST" enctype="multipart/form-data">
	<div class="ccontainer">
	<div class="contact-form">
	<span><label>Name</label></span>
	<input type="text" name="name" placeholder="Add product name" required>
	
	<span><label>Description</label></span>
	<textarea name="description" placeholder="Input description here" class="description"></textarea></br>
	
	<span><label>Price</label></span>
	<input type="text" name="price" placeholder="Add price" required>
	
	<span><label>Upload Photo:</label></span>
	<input type="file" name="upload_file"/><br>

	<input type="submit" class="button updatebtn" value="Add">
	</div>
</form>
	
</body>
</html>