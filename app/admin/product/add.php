<?php
$query = mysql_query("select * from category");
?>

<div class="loginwrapper">
	<div style="width: 90.333%; margin-left: auto; margin-right: auto;">
	
		<form action="process.php?action=add" method="POST" enctype="multipart/form-data">
			</br>
			<div class="fwhole">
			<label>CHOOSE CATEGORY *</label></br></br>
			<select name="category" class="select"required>
				<option value="">-- Select Category --</option>
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
			</br>
			</br>
			<div class="fwhole">
			<label>NAME *</label>
			<input type="text" name="name" placeholder="Add product name" required>
			</div>
			</br>
			
			<div class="fwhole">
			<label>DESCRIPTION *</label>
			<textarea name="description" placeholder="Input description here" class="wholedescription"></textarea></br>
			</div>
			</br>
			
			<div class="fwhole">
			<label>PRICE *</label>
			<input type="text" name="price" placeholder="Add price" required>
			</div>
			</br>
			</br>
			<label>UPLOAD PHOTO *</label>
			</br>
			<input type="file" name="upload_file"/><br></br>

			<div class="centerregbtn">
				<button class="registerbtn" style="width: 100%;" type="submit">ADD</button>
			</div>
		</form>
		</br>
</div>
</div>