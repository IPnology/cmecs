<?
	if (!$_SESSION['customer_session'])
	{
		header("Location: ../user");	
	}
?>

<!-- start header -->
<div class="header_bg">
<div class="wrap">
	<div class="header">
		<div class="welcome">
			Welcome <?=$_SESSION['customer_session'];?>!
			<div>
				<a href="../../customer/user/?view=list">My Account</a>  | 
				<a href="../../customer/user/process.php?action=logout">Logout</a>
			</div>	
		</div>
		<div class="logo">
			<a href="../../admin/home"><img src="../../include/images/logo.png" alt=""/> </a>
		</div>
		<div class="h_search">
    		<form action="../../admin/product" method="GET">
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
				<li class="active"><a href="../../customer/home">Home</a></li> |
				<li><a href="../../customer/category">category</a></li> |
				<li><a href="../../customer/product">product</a></li> |
				<li><a href="../../customer/product">wishlist</a></li>	
			</ul>
		</div>
		<div class="top-nav">
	          <nav class="nav">	        	
	    	    <a href="#" id="w3-menu-trigger"> </a>
	                  <ul class="nav-list" style="">
	            	        <li class="nav-item"><a class="active" href="index.html">Home</a></li>
							<li class="nav-item"><a href="sale.html">Sale</a></li>
							<li class="nav-item"><a href="handbags.html">Handbags</a></li>
							<li class="nav-item"><a href="accessories.html">Accessories</a></li>
							<li class="nav-item"><a href="shoes.html">Shoes</a></li>
							<li class="nav-item"><a href="service.html">Services</a></li>
							<li class="nav-item"><a href="contact.html">Contact</a></li>
	                 </ul>
	           </nav>
	             <div class="search_box">
				<form>
				   <input type="text" value="Search" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Search';}"><input type="submit" value="">
			    </form>
			</div>
	          <div class="clear"> </div>
	          <script src="../../include/js/responsive.menu.js"></script>
</div>
         </div>		  
	<div class="clear"></div>
</div>
</div>