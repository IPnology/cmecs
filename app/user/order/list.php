<?php
if (!isset($username)){
	echo "Please login.";
}
else{

$query = mysql_query("select * from checkout where username = '$username'");
?>
<div class="listwrapper">
<h1></br>MY ORDER(S)</br></h1>
</br>

<div class="main_bg">
<div class="wrap">	
<div class="main">	
<div style="width: 100%; margin-left:auto; margin-right:auto;">
<div style="margin-right: 5%;">

	<?php
		while($row=mysql_fetch_array($query)){
	?>
		
		<div class="grids_of_3">
		<div class="grid1_of_3">
				<center> <br>
					<table width="100%">
						<tr>
							<th width="50%" align="right">Username:&nbsp;&nbsp;
							<td width="50%"><i><?=$row['username']?>
						</tr>
						<tr>
							<th width="50%" align="right">Order Number:&nbsp;&nbsp;
							<td width="50%"><?=$row['orderNumber']?>
						</tr>
						<tr>
							<th width="50%" align="right">Date:&nbsp;&nbsp;
							<td width="50%"><?=$row['date']?>
						</tr>
						<tr>
							<th width="50%" align="right">Status:&nbsp;&nbsp;
							<td width="50%"><?=$row['status']?>
						</tr>
						<tr>
							<th width="50%" align="right">Total Price:&nbsp;&nbsp;
							<td width="50%"><?=$row['totalPrice']?>
						</tr>
					</table>
					<center><br>
				
				<div class="price">
				<button class="myButton" onClick="location.href='?view=detail&id=<?=$row['Id']?>'">VIEW ORDER</button>
				</div>
			</div>
		</div>
	<!--asta d-->
<?php
	}
}
?>
</div>
</div>
</div>
</div>
<div class="clear"></div>
</div>	