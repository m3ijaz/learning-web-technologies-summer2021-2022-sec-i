<?php 
	session_start();

	require_once('employermodel.php');

	$user_Name = $_REQUEST['user_name'];
	$password = $_REQUEST['password'];

	if ( $user_name == null || $password == null) 
	{
		echo "invalid User_Name/Password <br>";
	}

    else
	   {
	    $status = login($user_name, $password);

	    if($status)
	    {
	    	setcookie('status', 'true', time()+720, '/');
					header('jobportal.php');
	    }
	    else
	    {
		echo "invalid user!";
	    }
	   }

?>

