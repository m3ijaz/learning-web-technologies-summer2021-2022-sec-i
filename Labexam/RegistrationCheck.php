<?php 

	$Id = $_REQUEST['Id'];
	$Password = $_REQUEST['Password'];
	$Confirm_Password = $_REQUEST['Password'];
	$Name = $_REQUEST['Name'];

	if ($Id == null || $Password == null || $Confirm_Password == null || $Name == null)
	 {
		echo "invalid Id/Password/Confirm_Password/Name <br>";
	 }
	 else
	 {
		$data = $Id."|".$Password."|".$Confirm_Password."|".$Name. "\r\n";
		$file = fopen('Myfile.txt', 'a');
		fwrite($file, $data);

			if($fname == "create")
			{
				header('location: myhome.php');	
			}else
			{
				header('location: Sign_in.html');
			}
	}



?>