<?php
	
	if (!$_SESSION['admin_session'])
	{
		header("Location: ../../account");	
	}
	else
	{
		$username = $_SESSION['admin_session'];
		$admin = mysql_fetch_array(mysql_query("select * from admin where username='$username'"));
	}
?>

<!-- start header -->
<div class="header_bg">
<div class="wrap">
	<div class="header">
		<div class="logo">
			<img src="../../../include/app/images/logo.png" alt=""/>
		</div>
		<div style="font-style:Arial; font-size: .80em; margin-left: auto; margin-right: auto; color: #fff; width: 100%; height: 5%;">CASA MUEBLES ADMINISTRATOR SIDE</div></br>
		<div class="welcomead">
			Welcome <?=$username;?>!
			<div style="float:right;">
				<a href="../../../app/admin/account/process.php?action=logout">Logout</a>
			</div>	
		</div>
		<div class="search_box" style="width: 100%;">
    		<form class="formsearch" action="../product" method="GET">
    			<input type="hidden" name="view" value="searchList">
				<input type="text" name="search" value="">
    			<input type="submit" value="">
    		</form>
		</div>
		<div class="clear"></div>
	</div>
</div>
</div>

<div class="header_btm">
<div class="dropwrap">
	<div class="drp-dwn">
			<?php
				if ($admin['level']=='admin'){
				?>
				<select onchange="window.location=this.options[this.selectedIndex].value">
					<option value="../../../app/admin/home">---------</option>
					<option value="../../../app/admin/home">Home</option>
					<option value="../../../app/admin/account/?view=list">Accounts</option>
					<option value="../../../app/admin/order">Order</option>
					<option value="../../../app/admin/product">Product</option>
					<option value="../../../app/admin/truck">Truck</option>
					<option value="../../../app/admin/schedule">Schedule</option>
				</select>
				<?php }
				else if ($admin['level']=='staff'){ ?>
				<select onchange="window.location=this.options[this.selectedIndex].value">
					<option value="../../../app/admin/home">---------</option>
					<option value="../../../app/admin/home">Home</option>
					<option value="../../../app/admin/order">Order</option>
					<option value="../../../app/admin/product">Product</option>
					<option value="../../../app/admin/truck">Truck</option>
					<option value="../../../app/admin/schedule">Schedule</option>
				</select>
				<?php }
				else if ($admin['level']=='delivery'){ ?>
				<select onchange="window.location=this.options[this.selectedIndex].value">
					<option value="../../../app/admin/home">---------</option>
					<option value="../../../app/admin/home">Home</option>
					<option value="../../../app/admin/schedule">Schedule</option>
				</select>
				<?php }
				else {
					
				}?>
	</div>
	
</div>		  
<div class="clear"></div>
</div>