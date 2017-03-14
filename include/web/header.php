
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
		<div class="welcome">
			Welcome <?=$username;?>!
			<div>
				<a href="../../../web/admin/account/process.php?action=logout">Logout</a>
			</div>	
		</div>
		<div class="logo">
		<ul>
			<li><a href="../../../web/admin/home"><img src="../../../include/web/images/logo.png" alt=""/></a></li>
			<li><div style="font-style:Arial; font-size: .75em; float:left; color: #fff;">CASA MUEBLES ADMINISTRATOR SIDE</div></li>
		</ul>
		</div>
		<div class="h_search">
    		<form action="../../../web/admin/product" method="GET">
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
<div class="wrap">
	<div class="header_sub">
		<div class="h_menu">
			<ul>
				<?php
				if ($admin['level']=='admin'){
				?>
				<li class="active"><a href="../../../web/admin/home">Home</a></li> |
				<li><a href="../../../web/admin/account/?view=list">Accounts</a></li> |
				<li><a href="../../../web/admin/order">Order</a></li> |
				<li><a href="../../../web/admin/category">category</a></li> |
				<li><a href="../../../web/admin/product">product</a></li> |
				<li><a href="../../../web/admin/truck">truck</a></li> |
				<li><a href="../../../web/admin/schedule">schedule</a></li>
				<?php } 
				else if ($admin['level']=='staff'){ ?>
				<li class="active"><a href="../../../web/admin/home">Home</a></li> |
				<li><a href="../../../web/admin/order">Order</a></li> |
				<li><a href="../../../web/admin/category">category</a></li> |
				<li><a href="../../../web/admin/product">product</a></li> |
				<li><a href="../../../web/admin/truck">truck</a></li> |
				<li><a href="../../../web/admin/schedule">schedule</a></li>
				<?php } 
				
				else if ($admin['level']=='delivery'){ ?>
				<li class="active"><a href="../../../web/admin/home">Home</a></li> |
				<li><a href="../../../web/admin/schedule">schedule</a></li>
				<?php } 
				
				else{
					
				}?>
				
				
			</ul>
		</div>
		<div class="top-nav">
	             <div class="search_box">
				<form>
				   <input type="text" value="Search" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Search';}"><input type="submit" value="">
			    </form>
			</div>
	          <div class="clear"> </div>
	          <script src="../../../include/web/js/responsive.menu.js"></script>
</div>
         </div>		  
	<div class="clear"></div>
</div>
</div>