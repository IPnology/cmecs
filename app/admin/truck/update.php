<?php
$id = (isset($_GET['id']) && $_GET['id'] != '') ? $_GET['id'] : '';

$query = mysql_query("select * from truck where Id = $id");

$row=mysql_fetch_array($query)
?>

<div class="loginwrapper">
	<div style="width: 90.333%; margin-left: auto; margin-right: auto;">
		<form action="process.php?action=update&id=<?=$id?>" method="POST">
		
			</br>
			<div class="fwhole"><label>NAME *</label>
			<input type="text" name="name" value="<?=$row['name']?>" required>
			</br>
			
			<button class="updatebtn" style="width: 100%;"type="submit">Save Changes</button>
			</div></br>
			
		</form>
	</div>
</div>