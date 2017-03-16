<?php
$id = $_GET['id'];
?>

<form action="process.php?action=reject-reason&id=<?=$id;?>" method="POST" enctype="multipart/form-data">
	<div class="wrapper">

	</br>
	</br>

	<label>DESCRIPTION *</label>
	<textarea name="rejectReason" placeholder="Enter Reason Here" class="wholedescription"></textarea></br>
	</br>

	<input type="submit" class="myButton" value="Submit"></br></br>
	
</form>
</div>