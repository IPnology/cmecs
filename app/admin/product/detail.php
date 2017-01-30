<?php
$id = (isset($_GET['id']) && $_GET['id'] != '') ? $_GET['id'] : '';

$query = mysql_query("select * from product where Id = $id");

$row=mysql_fetch_array($query);

if(file_exists("../../../media/".$row['image']))
    $fileName = $row['image'];
else
    $fileName = "default.png";

?>	
	
<div style="width: 90%; margin-left: auto; margin-right: auto;">
	<div class="single">
			<div class="left_content">
				
				<div class="grids_of_3">
					<div class="grid1_of_3" >
						<img src="../../../media/<?=$fileName;?>" alt=""/>
						<div class="ctgdetail">
							Name: <?=$row['name']?></br></br>
							Description: <?=$row['description']?></br></br>
							Price:<?=$row['price']?></br></br>
							<button class="button updatebtn" style=" width: 160px;"onClick="location.href='?view=update&id=<?=$row['Id']?>'">Update</button></br>
								</br>
								<button class="button deletebtn" style=" width: 160px;"onClick="location.href='process.php?action=delete&id=<?=$row['Id']?>'">Delete</button>
				
						</div>
					</div>
				</div>
	
				<div class="clear"></div>
	       </div>
	</div>
</div>	