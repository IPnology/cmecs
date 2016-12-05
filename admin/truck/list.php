<?php
$id = (isset($_GET['id']) && $_GET['id'] != '') ? $_GET['id'] : '';

$query = mysql_query("select * from truck");

$message = (isset($_GET['message']) && $_GET['message'] != '') ? $_GET['message'] : '';
?>

<br><?=$message;?>

<div class="main_bg">
<div class="wrap">	
<div class="main">	
<button onClick="location.href='?view=add'">Add Truck</button>
<?php
	while($row=mysql_fetch_array($query)){
?>
Name: <?=$row['name']?>
<button class="button updatebtn" onClick="location.href='?view=update&id=<?=$row['Id']?>'">Update</button>
<button class="button deletebtn" onClick="location.href='process.php?action=delete&id=<?=$row['Id']?>'">Delete</button></br></br>
<?php
	}
?>
<div class="clear"></div>
</div>
</div>
</div>	