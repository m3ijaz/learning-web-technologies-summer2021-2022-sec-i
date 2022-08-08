<?php 

require_once('employermodel.php');

    
	$employer_name = $_REQUEST['employer_name'];
	$company_name = $_REQUEST['company_name'];
	$contact_no = $_REQUEST['contact_no'];
	$user_Name = $_REQUEST['user_name'];
	$password = $_REQUEST['password']; 
	

	

	if ( $employer_name == null || $company_name == null || $contact_no == null  ||  $user_name == null || $password == null)
	 {
		echo "invalid User_Name/Password/Others <br>";
	 }
	

	else
	   {   
	    $status = Signup($employer_name, $company_name, $contact_no, $user_name, $password);

	    if($status)
	    { 
					header('location: login.html');
	    }
	    else
	    {
		echo "invalid user!";
	    }
	   }

?>