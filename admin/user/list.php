<?php
$query = mysql_query("select * from user");

$message = (isset($_GET['message']) && $_GET['message'] != '') ? $_GET['message'] : '';
?>

<br><?=$message;?>

	<table>
	
		<tr>
			<th>Username</th>
			<th>First Name</th>
			<th>Last Name</th>
		</tr>
		
<?php
	while($row=mysql_fetch_array($query)){
?>
		
		<tr>
			<td><?=$row['username']?></td>
			<td><?=$row['fname']?></td>
			<td><?=$row['lname']?></td>
			<td><a href="process.php?action=delete&id=<?=$row['Id']?>">Delete</a></td>
			<td><button>Update</button></td>
		</tr>
<?php
	}
?>
	</table>
