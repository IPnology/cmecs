<?php

$query = mysql_query("select * from admin");

$message = (isset($_GET['message']) && $_GET['message'] != '') ? $_GET['message'] : '';
?>

<div class="main_bg">
<div class="wrap">	
<div class="main">	
<div style="width: 100%; margin-left:auto; margin-right:auto;">
<div style="margin-right: 5%;">
	<?php if (!$message){} else {?>
	<div class="successmessage"> <?=$message;?></div>
	<?php } ?>
	
<button class="myButton" style="width: 100%; margin-left: 3%;" onClick="location.href='?view=add'">Add Account</button>
<?php
	while($row=mysql_fetch_array($query)){
?>
<!--diri-->
<!-- start grids_of_3 -->

	<div class="grids_of_3">
		<div class="grid1_of_3">
				<center> <br>
					<table width="100%">
						<tr>
							<th width="50%" align="right">Name:&nbsp;&nbsp;
							<td width="50%"><i><?=$row['fname']?> <?=$row['lname']?>
						</tr>
						<tr>
							<th width="50%" align="right">Username:&nbsp;&nbsp;
							<td width="50%"><?=$row['username']?>
						</tr>
						<tr>
							<th width="50%" align="right">Level:&nbsp;&nbsp;
							<td width="50%"><?=$row['level']?>
						</tr>
					</table>
					<center><br>
				
				<div class="price">
					<button class="updatebtn" onClick="location.href='?view=update&id=<?=$row['Id']?>'">UPDATE</button>
					<button class="deletebtn" onClick="location.href='process.php?action=delete&id=<?=$row['Id']?>'">DELETE</button>
				</div>
			</div>
	</div>
	<!--asta d-->
<?php
	}
?>
</div>
</div>
</div>
</div>
<div class="clear"></div>
</div>	