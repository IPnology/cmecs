<?php
$id = (isset($_GET['id']) && $_GET['id'] != '') ? $_GET['id'] : '';

$query = mysql_query("select * from category where Id = $id");

$row=mysql_fetch_array($query);

if(file_exists("../../../media/".$row['image']))
    $fileName = $row['image'];
else
    $fileName = "default.png";

?>

<div class="main_bg">
<div class="wrapper">	
<div class="grids_of_3">
		<div class="grid1_of_3" >
			<img src="../../../media/<?=$fileName;?>" alt=""/>
			<div class="ctgdetail">
					Name: <?=$row['name']?></br></br>
					Description: <?=$row['description']?></br></br>
					<button class="updatebtn" style=" width: 160px;" onClick="location.href='?view=update&id=<?=$row['Id']?>'">Update</button></br></br>	
					<button class="deletebtn" style=" width: 160px;" onClick="location.href='process.php?action=delete&id=<?=$row['Id']?>'">Delete</button></br></br>	
					<button class="myButton" style=" width: 160px;" onClick="location.href='../product/?catId=<?=$row['Id']?>'">View Product</button></br>	
				
			</div>
		</div>
</div>
<div class="clear"></div>
</div>	
</div>
