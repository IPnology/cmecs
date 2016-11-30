<?php
$username = $_SESSION['user_session'];

$query = mysql_query("select * from wishlist where username='$username'");

$message = (isset($_GET['message']) && $_GET['message'] != '') ? $_GET['message'] : '';
?>


<div class="main_bg">
<div class="wrap">	
<div class="main">
<div style="width: 74.3333%; float:left;">
<?php
	while($row=mysql_fetch_array($query)){
?>
<!--diri-->
<!-- start grids_of_3 -->

	<div class="grids_of_3">
		<div class="grid1_of_3">
			<img src="../../media/<?=getProductImage($row['productId'])?>" alt=""/>
				<div class="descname"><?=getProductName($row['productId'])?></div>
				<div class="price">
					<button class="viewbtn" onClick="location.href='../product/?view=detail&id=<?=$row['productId']?>'">view</button>
				</div>
			</div>
	</div>
	
	<!--asta d-->
<?php
	}
?>

</div>
</div>
</div>
</div>

<div class="clear"></div>