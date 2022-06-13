<?php
   session_start();

   /* print_r($_REQUEST['Name']);  
   echo "<br>";
   print_r($_REQUEST['Email']);
   echo "<br>";
   print_r($_REQUEST['Gender']);
    echo "<br>";
   print_r($_REQUEST['Data_of_Birth']);
   echo "<br>";
   print_r($_REQUEST['Degree']);
   echo "<br>";
   print_r($_REQUEST['Blood_group']);
   echo "<br>";  */

   $Name = $_REQUEST['Name'];
   $Email = $_REQUEST['Email'];
   $Gender = $_REQUEST['Gender'];
   $Date_of_Birth= $_REQUEST['Date_of_Birth'];
   $Degree = $_REQUEST['Degree'];
   $Blood_group = $_REQUEST['Blood_group'];

   if ($Name == null || $Email == null || $Gender == null || $Date_of_Birth == null || $Degree == null || $Blood_group) 
   {
          echo  "invalid Name/Email/Gender/Date_of_Birth/Degree/Blood_group <br>";
          /*$_SESSION['Status']=true;
          header('location: register.html');*/
   }
   else
   {
   	if($Name == $Email )
   	{
   		echo "Successfullly Registerd";
   	}
   	else
   	{
   		echo "Invalid information";
   	}
   }
?>