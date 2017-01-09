<?php
$search = (isset($_GET['search']) && $_GET['search'] != '') ? $_GET['search'] : '';
$search = strtolower($search);

$query = mysql_query("select * from product where name like '%$search%'");
?>

<button onClick="location.href='?view=add'">Add Product</button></br></br>

<table>
	
	<tr>
		<th>CategoryId</th>
		<th>Name</th>
		<th>Description</th>
		<th>Price</th>
		<th>Image</th>
		<th></th>
		<th></th>
	</tr>
		
	<?php
		while($row=mysql_fetch_array($query)){
	?>	
		
	<tr>
		<td><?=$row['categoryId']?></td>
		<td><a href="?view=detail&id=<?=$row['Id']?>"><?=$row['name']?></td>
		<td><?=$row['description']?></td>
		<td><?=$row['price']?></td>
		<td><?=$row['image']?></td>
		<td><button class="button deletebtn" onClick="location.href='process.php?action=delete&id=<?=$row['Id']?>'">Delete</button></td>
		<td><button class="button updatebtn" onClick="location.href='?view=update&id=<?=$row['Id']?>'">Update</button></td>
	</tr>
	<?php
		}
	?>
</table>
