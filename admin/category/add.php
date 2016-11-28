<!DOCTYPE html>
<html>
<body>

<form action="process.php?action=add" method="POST" enctype="multipart/form-data">
	<div class="ccontainer" style="border:1px solid; border-color:grey; padding:10px 20px; margin-left:500px;">
	Name:</br>
	<input type="text" style="width:350px;" name="name" placeholder="Add category"></br>
	Description:</br>
	<textarea name="description" placeholder="Input description here" style="width:350px; height:100px; padding:6px 10px;"></textarea></br></br>
	Upload Photo:
	<input type="file" name="upload_file"/><br>
	</br></br>
	<input type="submit" class="btn-addcategory" value="Add">
	</div>
</form>
	
</body>
</html>