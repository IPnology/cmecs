<?php
$username = $_SESSION['customer_session'];

$query = mysql_query("select * from user where username = '$username'");

$row=mysql_fetch_array($query);
?>

<div style="width: 50%; margin-left: auto; margin-right: auto; margin-top: 4%;">
	<div style="font-size: 1.8em; border-bottom: 2px solid #ddd; color: #09340E;">My Account</div></br>
		Name: <?=$row['fname']?> <?=$row['lname']?></br></br>
		Username: <?=$row['username']?></br></br>
		Email: <?=$row['email']?></br></br>
		Birthdate: <?=$row['birthdate']?></br></br>
		Gender: <?=$row['gender']?></br></br>
		Street: <?=$row['street']?></br></br>
		Barangay: <?=$row['brgy']?></br></br>
		City: <?=$row['city']?></br></br>
		Province: <?=$row['province']?></br></br>
		Postal Code: <?=$row['postal']?></br></br>
		<div style="width: 30%; margin-left: auto; margin-right: auto;"><button class="button updatebtn" onClick="location.href='?view=update&id=<?=$row['Id']?>'">Update</button></div>
</div>