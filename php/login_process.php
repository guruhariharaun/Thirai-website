<?php
session_start();
require('./config.php');

$con = mysqli_connect(DB_HOST,DB_USER,DB_PASS,DB_NAME);

if(isset($_POST['submit']))
{
	$pass = $_POST['password'];
	if(empty($pass))
	{	
		header("location: ./login.php?info=Please Fill the password at the input field.");
		
	}
	else
	{
		$query = "SELECT * FROM admin WHERE password = '$pass' ";	
		$result = mysqli_query($con, $query);
		$num = mysqli_num_rows($result);	//return 1 if the condition is true else return 0 if condition is false
		if($num == 1)
		{	
			$_SESSION['user'] = "admin";
			header("location: ./admin_panel.php");
		} 

		else 
		{	
			header("location: ./login.php?invalid=Please Enter the Correct Password.");
		}
		
	}
}
?>