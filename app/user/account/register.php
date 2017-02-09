<?php
$message = (isset($_GET['message']) && $_GET['message'] != '') ? $_GET['message'] : '';
?>

<div class="loginwrapper">
	<div style="width: 90.333%; margin-left: auto; margin-right: auto;">
		<?=$message;?>
		<?php if (!$message){} else {?>
		<div class="successmessage"> <?=$message;?></div>
	<?php } ?>
		<form action="process.php?action=register" method="POST">
		</br>
			<div class="fwhole">
				<div class="registerlabels">USERNAME *</div>
				<input type="text" name="username" placeholder="Enter your username">
			</div>
			<br>
			
			<div class="fwhole">
				<div class="registerlabels">FIRST NAME *</div>
				<input type="text" name="firstname" placeholder="Enter your first name">
			</div>
			<br>
			
			<div class="fwhole">
				<div class="registerlabels">LAST NAME *</div>
				<input type="text" name="lastname" placeholder="Enter your last name">
			</div>
			<br>
			
			<div class="fwhole">
				<div class="registerlabels">PASSWORD *</div>
				<input type="password" name="password" placeholder="Enter password">
			</div>
			
			<br><div class="fwhole">
				<div class="registerlabels">REPEAT PASSWORD *</div>
				<input type="password" name="repeatpassword" placeholder="Enter password">
			</div>
			<br>
			
			
			<div class="centerregbtn">
				<input type="submit" class="registerbtn" value="Register">
			</div>
			
		</form>
	</div>
	</br>
</div>