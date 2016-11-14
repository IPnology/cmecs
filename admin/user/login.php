<!DOCTYPE html>
<?php
$error = (isset($_GET['error']) && $_GET['error'] != '') ? $_GET['error'] : '';
?>
<html>
<body>

<br><?=$error;?>

<form action="process.php?action=login" method="POST">
	<div class="row">
		<div class="col-md-12">
			<div class="row">
				<div class="col-md-6">
					<div class="form-group">
						<input type="text" class="form-control" placeholder="Username" name="username">
					</div>
					<div class="form-group">
						<input type="password" class="form-control" placeholder="Password" name="password">
					</div>
					<div class="form-group">
						<input type="submit" class="btn btn-primary btn-md" value="LOG IN">
					</div>
				</div>
			</div>
		</div>
	</div>
</form>
	<a href="?view=register">Add Account</a>
</body>
</html>
