<?php
$search = (isset($_GET['search']) && $_GET['search'] != '') ? $_GET['search'] : '';
$search = strtolower($search);

$query = mysql_query("select * from product where name like '%$search%'");
?>

<div class="listwrapper">
	<button class="myButton" onClick="location.href='?view=add'">Add Product</button></br></br>
	
	<?php
			while($row=mysql_fetch_array($query)){
	?>		
	
	<div class="grids_of_3">
		<div class="grid1_of_3">
			<img src="../../media/<?=$fileName;?>" alt=""/>
				<div class="descname">
					CATEGORY ID: <?=$row['categoryId']?></br>
					<a href="?view=detail&id=<?=$row['Id']?>"><?=$row['name']?></a></br>
					PRICE: <?=$row['price']?>.00</br>
					DESCRIPTION: <?=$row['description']?>
				</div>
				<div class="price"></br>
					<button class="updatebtn" style="width: 150px;" onClick="location.href='?view=update&id=<?=$row['Id']?>'">Update</button></br></br>
					<button class="deletebtn" style="width: 150px;" onClick="location.href='process.php?action=delete&id=<?=$row['Id']?>'">Delete</button>
				</div>
			</div>
	</div>
	
	<?php
	}
	?>
	
	<div class="clear"></div>
</div>