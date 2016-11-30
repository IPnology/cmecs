<?php
$query = mysql_query("select * from user where username = '$username'");

$row=mysql_fetch_array($query);
?>

<div class="accountdetails">
	<div class="myaccountheader">My Account</div></br>
		
		<div class="myaccountfont">Name: <?=$row['fname']?> <?=$row['lname']?></br></br>
		Username: <?=$row['username']?></br></br>
		Email: <?=$row['email']?></br></br>
		Birthdate: <?=$row['birthdate']?></br></br>
		Gender: <?=$row['gender']?></br></br>
		Phone Number: <?=$row['phoneNumber']?></br></br>
		Street: <?=$row['street']?></br></br>
		Barangay: <?=$row['brgy']?></br></br>
		City: <?=$row['city']?></br></br>
		Province: <?=$row['province']?></br></br>
		Postal Code: <?=$row['postal']?></br></br>
		</div>
		<div class="accountbtn"><button class="button updatebtn" onClick="location.href='?view=update&id=<?=$row['Id']?>'">Update</button></div>
</div>