<?php
$id = (isset($_GET['id']) && $_GET['id'] != '') ? $_GET['id'] : '';

$query = mysql_query("select * from truck");

$message = (isset($_GET['message']) && $_GET['message'] != '') ? $_GET['message'] : '';
?>
<div class="listwrapper">
	
	<table class="tablelist">
	<tr>
		<th>SCHEDULES</th>
		<th></th>
	</tr> 
	<?php
		while($row=mysql_fetch_array($query)){
	?>
	<tr>
		<td><?=$row['name']?></td>
		<td><button class="button updatebtn" onClick="location.href='?view=update&id=<?=$row['Id']?>'">View</button></td>
	</tr>

	<?php
		}
	?>
	</table>
	<div class="clear"></div>
</div>