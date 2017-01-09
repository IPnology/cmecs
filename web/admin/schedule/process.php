<?php

require_once '../../../config/database.php';

$action = $_GET['action'];

switch ($action) {
	
	case 'shipping' :
	shipping();
	break;
	
	case 'received' :
	received();
	break;
	
	case 'bad-address' :
	badAddress();
	break;	
	
	case 'canceled' :
	canceled();
	break;
	
	default:
}

function shipping()
{
	$orderNumber = $_GET['orderNumber'];	
	
	mysql_query("update delivery set status='Shipping' where orderNumber = '".$orderNumber."'");
												
	header('Location: ../schedule/?view=detail&orderNumber='.$orderNumber);
}

function received()
{
	$orderNumber = $_GET['orderNumber'];	
	
	mysql_query("update delivery set status='Received' where orderNumber = '".$orderNumber."'");
												
	header('Location: ../schedule/?view=detail&orderNumber='.$orderNumber);
}
function badAddress()
{
	$orderNumber = $_GET['orderNumber'];	
	
	mysql_query("update delivery set status='Bad Address' where orderNumber = '".$orderNumber."'");
												
	header('Location: ../schedule/?view=detail&orderNumber='.$orderNumber);
}
function canceled()
{
	$orderNumber = $_GET['orderNumber'];	
	
	mysql_query("update delivery set status='Canceled' where orderNumber = '".$orderNumber."'");
												
	header('Location: ../schedule/?view=detail&orderNumber='.$orderNumber);
}

?>