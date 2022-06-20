<?php 
	session_start();

	$User_Id = $_REQUEST['User_Id'];
	$Password = $_REQUEST['Password'];

	if ($User_Id == null || $Password == null) 
	{
		echo "invalid User_Id/Password <br>";
	}
	else
	{
		$file = fopen('Myfile.txt', 'r');
		while (!feof($file)) 
		{
				$line = fgets($file);
				$user = explode('|', $line);
				print_r($user);
				echo "<br>";
				if($username == trim($user[0]) && $password == trim($user[1])){
					setcookie('status', 'true', time()+7200, '/');
					header('location: myhome.php');
		}
	}
		echo "invalid user!";
	}



?>