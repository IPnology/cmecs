<?php
$schedule = (isset($_GET['schedule']) && $_GET['schedule'] != '') ? $_GET['schedule'] : '';

$truckQuery = mysql_query("select * from truck");

$message = (isset($_GET['message']) && $_GET['message'] != '') ? $_GET['message'] : '';
?>
<br>
<center>
<form action="" method="GET">
Enter date:
<input type="date" name="schedule"></br></br>
<button type="submit" class="button myButton" style="width: 250px;">Search Schedule</button>
</form>
</center>


<?php if(!$schedule) {}else{?>
<div class="listwrapper">
	
	<table class="tablelist">
	<tr>
		<th>SCHEDULES on <?=$schedule;?></th>
		<th></th>
	</tr> 
	<?php
		while($row=mysql_fetch_array($truckQuery)){
	?>
	<tr>
		<td><?=$row['name']?></td>
		<td><button class="button updatebtn" onClick="location.href='?view=truck-schedule&truckId=<?=$row['Id']?>&schedule=<?=$schedule;?>'">View</button></td>
	</tr>

	<?php
		}
	?>
	</table>
	<div class="clear"></div>
</div>

<?php }?>