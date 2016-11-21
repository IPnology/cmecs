<?php
$id = (isset($_GET['id']) && $_GET['id'] != '') ? $_GET['id'] : '';

$query = mysql_query("select * from category where Id = $id");

$row=mysql_fetch_array($query)
?>
	<img src="../../media/<?=$row['image']?>"></br>
	Name:<?=$row['name']?></br>
	Description:<?=$row['description']?>
	</br></br>
	<button class="button updatebtn" onClick="location.href='?view=update&id=<?=$row['Id']?>'">Update</button>