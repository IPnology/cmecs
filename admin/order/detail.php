<?php
$id = $_GET['id'];
$query = mysql_query("select * from checkout where Id=$id");
$row = mysql_fetch_array($query);
$message = (isset($_GET['message']) && $_GET['message'] != '') ? $_GET['message'] : '';
?>
<?=$message;?></br></br>

Username:<?=$row['username'];?></br></br>
Order Number:<?=$row['orderNumber'];?></br></br>
Address:<?=$row['street'];?>, <?=$row['brgy'];?>, <?=$row['city'];?>, <?=$row['province'];?>, <?=$row['postal'];?></br></br>
Date:<?=$row['date'];?></br></br>
Total Price:<?=$row['totalPrice'];?></br></br>
Status:<?=$row['status'];?>

<form action="process.php?action=update&id=<?=$id?>" method="POST">
	<select name="status" required>
		<option value="<?=$row['status']?>"><?=$row['status']?></option>
		<option value="shipping">Shipping</option>
		<option value="delivered">Delivered</option>
	</select>
	<button class="button updatebtn" type="submit" value="Update">Update Status</button>
</form>