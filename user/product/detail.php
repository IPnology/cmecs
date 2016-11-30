<?php
$message = (isset($_GET['message']) && $_GET['message'] != '') ? $_GET['message'] : ''; 
$id = (isset($_GET['id']) && $_GET['id'] != '') ? $_GET['id'] : '';
$username = $_SESSION['user_session'];
$query = mysql_query("select * from product where Id = $id");
$row=mysql_fetch_array($query);

if(file_exists("../../media/".$row['image']))
    $fileName = $row['image'];
else
    $fileName = "default.png";
?>	

<?=$message;?>
<div class="main_bg">
<div class="wrap">	
	<div class="main">
		<div class="single">
			<div class="left_content">
					<div class="span1_of_1">
						<div class="product-view">
							<div class="product-essential">
								<div class="product-img-box">
									<div class="product-image"> 
										<img src="../../media/<?=$fileName;?>"></br>
								   </div>
								</div>
							</div>
						</div>
					</div>
					<div class="span1_of_1_des">
						<div class="desc1">
							<h3>Name: <?=$row['name']?></br></h3>
							<p>Description: <?=$row['description']?></p>
							<p>Price:<?=$row['price']?><p>
							<form action="../wishlist/process.php?action=add-to-wishlist" method="POST" >
										<input type="hidden" name="username" value="<?=$_SESSION['user_session']?>">
										<input type="hidden" name="productId" value="<?=$id?>">
										
										<?php
										$countData = mysql_num_rows(mysql_query("select * from wishlist where productId = $id and username = '$username'"));
										?>
										<?php
											if ($countData > 0){					
										?>
											<button type="button" class="button deletebtn" onClick="location.href='../wishlist/process.php?action=delete&id=<?=$row['Id']?>'">Remove from Wishlist</button>
										<?php
											}
											else{
												echo "<button class='button updatebtn' type='submit'>Add to Wishlist</button>";
											}
										?>
							</form>
							<div class="available">
										<form action="process.php?action=add-to-cart" method="POST" >
										<input type="hidden" name="username" value="<?=$_SESSION['user_session']?>">
										<input type="hidden" name="productId" value="<?=$id?>">
										<input type="hidden" name="quantity" value="1">
										<input type="hidden" name="price" value="<?=$row['price']?>">
										
										<?php
										$countData = mysql_num_rows(mysql_query("select * from temp_cart where productId = $id and username = '$username'"));
										?>
										<?php
											if ($countData > 0){
												echo "<button class='button updatebtn' type='button'>Already Added to Cart</button>";
											}
											else{
												echo "<button class='button updatebtn' type='submit'>Add to Cart</button>";
											}
										?>
										</form>
								<div class="clear"></div>
							</div>
						 </div>
					</div>
					<div class="clear"></div>
			</div>
			   <?php
				require_once 'tempCart.php';
				?>
		   <div class="clear"></div>
		</div>
	</div>
</div>
</div>


