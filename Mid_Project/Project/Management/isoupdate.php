<?php 
   
	$ID = $_REQUEST['Id'];
	$Name = $_REQUEST['Name'];
	$Gender = $_REQUEST['Gender'];
	$Email = $_REQUEST['Email'];
	$DoB = $_REQUEST['DoB'];
	$Blood_Group = $_REQUEST['Blood_Group'];
	$Degree = $_REQUEST['Degree'];
	$Occupation = $_REQUEST['Occupation'];
	$User_Name = $_REQUEST['User_Name'];
	$Password = $_REQUEST['Password'];
	$Confirm_Password = $_REQUEST['Password'];

	if ( $ID == null || $Name == null || $Gender == null || $Email == null  || $DoB == null  || $Blood_Group == null || $Degree == null  ||        $Occupation == null ||  $User_Name == null || $Password == null || $Confirm_Password == null)
	 {
		echo "invalid User_Name/Password/Confirm_Password <br>";
	 }
	 else
	 {
		$data =  $ID."|".$Name."|".$Gender."|".$Email."|".$DoB."|".$Blood_Group."|".$Degree."|".$Occupation."|".$User_Name."|".$Password."|".$Confirm_Password. "\r\n";
		$file = fopen('../Data/isodetails.txt', 'a');
		fwrite($file, $data);

			if($fname == "create")
			{
				header('location: ../Presentation/isohome.php');	
			}
			else
			{
				header('location: ../Presentation/login.html');
			}


		/*$file = fopen('../Data/isodetails.txt', 'r');
		$data = " ";
		$info = array();
	
	while(!feof($file))
	{
		$user = fgets($file);
		$user = explode('|', $user);
		if($user[0] == $_COOKIE['XXX'])
		{
			$info [] = $data;
		}

		else $info[] = $user;
	}

	//print_r($info);

	$file = fopen('../Data/isodetails.txt', 'a');
		for($i=0; $i<sizeof($info); $i++)
			{
				fwrite($file, $info[$i]); 
				header('location:../Presentation/isouserlist.php');
			}*/



	}

?>