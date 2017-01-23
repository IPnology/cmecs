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
	$type = $_POST['type'];
	$color = $_POST['color'];
	
	mysql_query("insert into personalize set type='".$type."',
												color='".$color."'");
}
?>