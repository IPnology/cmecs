<!DOCTYPE html>
<html>
<body>

<form action="process.php?action=add" method="POST" enctype="multipart/form-data" >
	Name:</br>
	<input type="text" name="name" placeholder="add category"></br>
	Description:</br>
	<textarea name="description"></textarea></br>
	Upload Photo:</br>
	<input type="file" name="upload_file"  /><br>
	</br></br>
	<input type="submit" value="Add">
</form>
	
</body>
</html>