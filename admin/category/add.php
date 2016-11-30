

<form action="process.php?action=add" method="POST" enctype="multipart/form-data">
	<div class="ccontainer">
	<div class="contact-form">
	<span><label>Name</label></span>
	<input type="text" name="name" placeholder="Add category">
	
	<span><label>Description</label></span>
	<textarea name="description" placeholder="Input description here" class="description"></textarea></br>
	
	<span><label>Upload Photo:</label></span>
	<input type="file" name="upload_file"/></br>
	<span><input type="submit" value="Add"></span>
	</div>

</form>
	