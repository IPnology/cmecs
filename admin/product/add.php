<?php
$query = mysql_query("select * from category");
?>

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
	<div class="ccontainer" style="border:1px solid; border-color:grey; padding:10px 20px; margin-left:500px;">
	Choose Category:</br>
	<select name="category" style="width:350px;" required>
		<option value="">--Select Category--</option>
		<?php
		if(mysql_num_rows($query)>0){ 
				while($row=mysql_fetch_array($query)){
		?>
		<option value="<?=$row['Id']?>"><?=$row['name']?></option>
		<?php
				}
		}
		?>
	
	</select>
	</div>
</form>
	
</body>
</html>