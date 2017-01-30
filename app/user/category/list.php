<?php
$query = mysql_query("select * from category");

$message = (isset($_GET['message']) && $_GET['message'] != '') ? $_GET['message'] : '';
?>

<div class="wrapper" style="margin-top: -5%;">
<br><?=$message;?>
	
<?php
	while($row=mysql_fetch_array($query)){
?>
<!--diri-->
<!-- start grids_of_3 -->
<?php

if(file_exists("../../../media/".$row['image']))
    $fileName = $row['image'];
else
    $fileName = "default.png";
?>
	<div class="grids_of_3">
		<div class="grid1_of_3">
			<img src="../../../media/<?=$fileName?>" alt=""/>
				<div class="descname"><?=$row['name']?></div>
				<div class="price"><br>
					<button class="myButton" onClick="location.href='?view=detail&id=<?=$row['Id']?>'">VIEW CATEGORY</button>
				</div>
		</div>
	</div>
	<!--asta d-->
<?php
	}
?>
<div class="clear"></div>
</div>