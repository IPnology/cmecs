<?php

require_once '../../config/database.php';

$action = $_GET['action'];

switch ($action) {
	
	case 'approve' :
	approve();
	break;
	
	case 'reject' :
	reject();
	break;
	
	default:
}

function approve()
{
	$id = $_GET['id'];	
	
	mysql_query("update checkout set status='Approved' where Id = '".$id."'");
												
	header('Location: ../order/?view=detail&id='.$id.'&message=Successfully Approved.');
	
}

function reject()
{
	$id = $_GET['id'];	
	
	mysql_query("update checkout set status='Rejected' where Id = '".$id."'");
												
	header('Location: ../order/?view=detail&id='.$id.'&message=Successfully Rejected.');
	
}
?>