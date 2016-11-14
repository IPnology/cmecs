<?php
$query = mysql_query("select * from user");

?>

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
			<td><button>Delete</button></td>
			<td><button>Update</button></td>
		</tr>
<?php
	}
?>
	</table>
