<?php

	session_start();
	include 'connect.php';
	
	$username = $_POST['username'];
	$password = $_POST['password'];
	
	if($username == "" || $password == "")
	{
		header("location: Index.php");
	}
	else
	{
		$query = "SELECT * FROM user WHERE username = '$username' AND password = '$password'";
		$result = mysqli_query($connect, $query);
		
		$num = mysqli_num_rows($result);
		
		if($num > 0)
		{
			header("location: Index.php");
			$_SESSION['user'] = $username;
		}
		else
		{
			header("location: konten.php");
		}
	}
	
 ?>
