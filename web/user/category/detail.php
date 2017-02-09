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
<div class="wrap">	
	<div class="main">
	<div class="single">
			<div style="width:90%;">
				<div class="span1_of_1">
					<div class="product-view">
						<div class="product-essential">
							<div class="product-img-box">
								<div class="product-image">
									<img src="../../../media/<?=$fileName;?>"></br>
							   </div>
							</div>
						</div>
					</div>
				</div>
				<div style="">
					<div class="desc1"  style="float:left;">
						<h3>Name: <?=$row['name']?></br></h3>
						<p>DESCRIPTION: <?=$row['description']?></p>
								<button class="myButton" onClick="location.href='../product/?catId=<?=$row['Id']?>'">VIEW PRODUCT</button>
							<div class="clear"></div>
					 </div>
				</div>
				<div class="clear"></div>
	       </div>
	   <div class="clear"></div>
	</div>
</div>
</div>	
