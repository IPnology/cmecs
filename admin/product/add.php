<!DOCTYPE html>
<html>
<body>

<form action="process.php?action=add" method="POST" enctype="multipart/form-data">
	<div class="ccontainer" style="border:1px solid; border-color:grey; padding:10px 20px; margin-left:500px;">
	Name:</br>
	<input type="text" name="name" style="width:350px;" placeholder="Add product name" ></br>
	Description:</br>
	<textarea name="description" placeholder="Inpute description here" style="width:350px; height:100px; padding:6px 10px;"></textarea></br>
	Price:</br>
	<input type="text" name="price" style="width:350px;" placeholder="Add price"></br></br>
	Upload Photo:
	<input type="file" name="upload_file"  /><br>
	</br></br>
	<input type="submit" class="btn-addproduct" value="Add">
	</div>
</form>
	
</body>
</html>