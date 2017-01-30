<?php
$query = mysql_query("select * from user where username = '$username'");

$row=mysql_fetch_array($query);

$message = (isset($_GET['message']) && $_GET['message'] != '') ? $_GET['message'] : '';
?>

<<<<<<< HEAD
<div class="loginwrapper" style="padding-top: 5%;">
<div style="width: 90.333%; margin-left: auto; margin-right: auto;">
=======
<div class="wrapper">
	<?php if (!$message){} else {?>
	<div class="successmessage"> <?=$message;?></div>
	<?php } ?>
>>>>>>> ip/master
	<form action="process.php?action=confirm-address" method="POST">
		<div class="registerlabels" >STREET:</div>
		<input type="text" name="street" value="<?=$row['street']?>" placeholder="Street">
		</br></br>
		<div class="registerlabels">BARRANGAY:</div>
		<input type="text" name="brgy" value="<?=$row['brgy']?>" placeholder="Barangay">
		</br></br>
		<div class="registerlabels">CITY:</div>
		<input type="text" name="city" value="<?=$row['city']?>" placeholder="City">
		</br></br>
		<div class="registerlabels">PROVINCE:</div>
		<input type="text" name="province" value="<?=$row['province']?>" placeholder="province">
		</br></br>
		<div class="registerlabels">POSTAL CODE:</div>
		<input type="text" name="postal" value="<?=$row['postal']?>" placeholder="postal">
		</br></br>
		<input type="hidden" name="tp" value="<?=$_GET['tp']?>">
			
			<div class="centerregbtn">
				<input type="submit" class="registerbtn" value="Register">
			</div>
	</form>
	<br>
</div>
</div>
<div class="clear"></div>