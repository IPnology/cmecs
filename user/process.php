<?php

require_once '../config/database.php';

$action = $_GET['action'];	
	
switch ($action) {
	
	case 'create' :
		create();
		break;
    
	case 'login' :
		login();
		break;
		
	case 'logout' :
		logout();
		break;
		
	case 'delete' :
		delete();
		break;
		
	case 'update' :
		update();
		break;


	default :
}


function login()
{
	// if we found an error save the error message in this variable
	$errorMessage = '';
	
	$userName = $_POST['username'];
	$password = $_POST['password'];
	
	$query = mysql_query("select * from user where username = '".$userName."' and password = '".$password."'");
	
	if (mysql_num_rows($query) != 0)
	{

		$_SESSION['user_session'] = $userName;
		header('Location: ../home/index.php');

			
	}
	else
	{
		header('Location: index.php?error=User not found in the Database');
	}
	
}

function logout()

{
	if (isset($_SESSION['user_session'])) {
		unset($_SESSION['user_session']);
	}
	header('Location: index.php');
	exit;
}



function create()
{

$fname    = ($_POST['fname'])?$_POST['fname']:'';
$lname    = ($_POST['lname'])?$_POST['lname']:'';
$username    = ($_POST['username'])?$_POST['username']:'';
$password    = ($_POST['password'])?$_POST['password']:'';
$access    = ($_POST['access'])?$_POST['access']:'';


mysql_query("insert into user set fname='".$fname."',
									  lname='".$lname."',
									  username='".$username."',
									  password='".$password."',
									  access='".$access."'");
									
	header("Location: ../user?view=list&msg=You have successfully Created a User");	
		
				

}

function delete()
{
	$id    = $_GET['id'];

    mysql_query("delete from user where id='".$id."'");
	header("Location: ../user?view=list&msg=You have successfully deleted a user");	
		
}

function update()
{

$id    = ($_POST['id'])?$_POST['id']:'';
$fname    = ($_POST['fname'])?$_POST['fname']:'';
$lname    = ($_POST['lname'])?$_POST['lname']:'';
$username    = ($_POST['username'])?$_POST['username']:'';
$password    = ($_POST['password'])?$_POST['password']:'';
$access    = ($_POST['access'])?$_POST['access']:'';
	

    mysql_query("update user set fname='".$fname."',
									  lname='".$lname."',
									  username='".$username."',
									  password='".$password."',
									  access='".$access."'
									where id='".$id."'");
									
	header("Location: ../user?view=list&msg=You have successfully Updated this User");	
}


?>