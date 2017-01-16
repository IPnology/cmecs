<?php
$query = mysql_query("select * from user where username = '$username'");

$row=mysql_fetch_array($query);
?>

<div class="acctwrapper">

	<div class="personalinfo">
		<div class="myaccountheader" style=" font-size: 1.1em;">Personal Information</div></br>
		<div class="myaccountfont">
			<div style="font-size: 1em;"><?=$row['fname']?> <?=$row['lname']?></div></br>
			<div class="accountlabels">Birthdate: &nbsp;</div><?=$row['birthdate']?></br></br>
			<div class="accountlabels">Gender: &nbsp;</div><?=$row['gender']?></br></br>
			<div class="accountlabels">Phone Number: &nbsp;</div><?=$row['phoneNumber']?></br></br>
			<div class="accountlabels">E-mail: &nbsp;</div><?=$row['email']?></br></br>
			<div class="accountlabels">Username: &nbsp;</div><?=$row['username']?></br></br>
		</div>
	</div>
	</br>
	<div class="personalinfo">
		<div class="myaccountheader" style=" font-size: 1.1em;">Billing Address</div></br>
		<div class="myaccountfont">
			<?=$row['street']?>, <?=$row['brgy']?></br></br>
			<?=$row['city']?></br></br>
			<?=$row['province']?></br></br>
			<?=$row['postal']?></br></br>
		</div>
	</div>
	</br>	
	<div class="personalinfo">	
		<div class="myaccountheader" style=" font-size: 1.1em;">Shipping Address</div></br>
		<div class="myaccountfont">
			<?=$row['street']?>, <?=$row['brgy']?></br></br>
			<?=$row['city']?></br></br>
			<?=$row['province']?></br></br>
			<?=$row['postal']?></br></br>
		</div>
	</div>
	
	<div style="margin-top:1%;">	
		<button class="myButton" onClick="location.href='?view=update&id=<?=$row['Id']?>'" style="width:100%;">UPDATE</button>
		</br></br>
	</div>
	<div class="clear"></div>
</div>