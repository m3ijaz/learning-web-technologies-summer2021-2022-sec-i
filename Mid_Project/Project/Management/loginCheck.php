<?php 
	session_start();

	$User_Name = $_REQUEST['User_Name'];
	$Password = $_REQUEST['Password'];
	$Confirm_Password = $_REQUEST['Password'];

	if ( $User_Name == null || $Password == null || $Confirm_Password == null) 
	{
		echo "invalid User_Name/Password/Confirm_Password <br>";
	}
	else
	{
		$file = fopen('../Data/isodetails.txt', 'r');
		while (!feof($file)) 
		{
				$line = fgets($file);
				$user = explode('|', $line);
				print_r($user);
				echo "<br>";
				if($User_Name == trim($user[8]) && $Password == trim($user[9]))
				{
					setcookie('status', 'true', time()+720, '/');
					header('location: ../Presentation/Isohome.php');
				}
	}
		echo "invalid user!";
	}

?>

