<?php

require_once '../../config/database.php';

$action = $_GET['action'];	
	
switch ($action) {
    
	case 'login' :
		login();
		break;

	case 'add' :
		add();
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
	
	$userName = $_POST['username'];
	$password = $_POST['password'];
	
	$query = mysql_query("select * from user where username = '".$userName."' and password = '".$password."'");
	
	if (mysql_num_rows($query) != 0)
	{

		$_SESSION['user_session'] = $userName;
		header('Location: ../home/');

			
	}
	else
	{
		header('Location: index.php?error=User not found in the Database');
	}
	
}

function add()
{
	$name = $_POST['name'];
	$description = $_POST['description'];
	$price = $_POST['price'];
	$image = $_POST['image'];
	
	mysql_query("insert into product set name='".$name."',
											description='".$description."',
											price='".$price."',
											image='".$image."'");
							
	header('Location: ../product/');
	
}

function delete()
{
	$id = $_GET['id'];	
	
	mysql_query("delete from product where Id = '".$id."'");
	
	header('Location: ../product/?view=list&message=Successfully Deleted.');
	
}

function update()
{
	$id = $_GET['id'];	
	
	$name = $_POST['name'];
	$description = $_POST['description'];
	$price = $_POST['price'];
	$image = $_POST['image'];
	
	mysql_query("update product set name='".$name."',
										description='".$description."',
										price='".$price."',
										image='".$image."'
										where Id = '".$id."'");
												
	header('Location: ../product/?view=list&message=Successfully Updated.');
	
}

?>