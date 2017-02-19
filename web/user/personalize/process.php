<?php

require_once '../../../config/database.php';

$action = $_GET['action'];	
	
switch ($action) {
    
	case 'create' :
		create();
		break;
	
	default :
}

function create()
{
	$username = $_SESSION['user_session'];
	$type = $_POST['type'];
	$color = $_POST['color'];
	
	mysql_query("insert into personalize set username='".$username."',
												type='".$type."',
												color='".$color."'");
	
	$get = mysql_fetch_array(mysql_query("select * from personalize where username='".$username."' order by Id desc"));
	
	mysql_query("insert into temp_cart set username='".$username."',
											productId='".$get['Id']."',
											quantity=1,
											price='".$price."'");
	

	header('Location: ../product/');
}
?>