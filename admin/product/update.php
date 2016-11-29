<?php
$id = (isset($_GET['id']) && $_GET['id'] != '') ? $_GET['id'] : '';

$query = mysql_query("select * from product where Id = $id");

$row=mysql_fetch_array($query);


$catQuery = mysql_query("select * from category");
?>

<form action="process.php?action=update&id=<?=$id?>" method="POST" enctype="multipart/form-data">
	<div class="ccontainer">
	<div class="contact-form">
	<span><label>Name</label></span>
	<input type="text" name="name" value="<?=$row['name']?>" placeholder="Add category">
	
	<span><label>Description</label></span>
	<textarea name="description" class="description" ><?=$row['description']?></textarea>
	
	<span><label>Price:</label></span>
	<input type="text" name="price" value="<?=$row['price']?>" placeholder="add price">
	
	<span><label>Upload Photo:</label></span>
	<input type="file" name="upload_file"/>
	</br>
	<button class="button updatebtn" type="submit" value="Update">Save Changes</button>
	<div class="ccontainer" style="border:1px solid; padding:10px 20px; margin-left:500px;">
	Choose Category:</br>
	<select name="category" style="width:350px;" required>
		<option value="<?=$row['categoryId']?>"><?=getCategoryName($row['categoryId'])?></option>
		<?php
		if(mysql_num_rows($catQuery)>0){ 
				while($catRow=mysql_fetch_array($catQuery)){
		?>
		<option value="<?=$catRow['Id']?>"><?=$catRow['name']?></option>
		<?php
				}
		}
		?>
	
	</select>
	
	</div>
	</div>
</form>