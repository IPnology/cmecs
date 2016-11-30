<?php
$query = mysql_query("select * from user where username = '$username'");

$row=mysql_fetch_array($query);
?>

		Username: <?=$row['username']?></br></br>
		First Name: <?=$row['fname']?></br></br>
		Last Name: <?=$row['lname']?></br></br>
		Email: <?=$row['email']?></br></br>
		Birthdate: <?=$row['birthdate']?></br></br>
		Gender: <?=$row['gender']?></br></br>
		Street: <?=$row['street']?></br></br>
		Barangay: <?=$row['brgy']?></br></br>
		City: <?=$row['city']?></br></br>
		Province: <?=$row['province']?></br></br>
		Postal Code: <?=$row['postal']?></br></br>
		<button class="button updatebtn" onClick="location.href='?view=update&id=<?=$row['Id']?>'">Update</button>	