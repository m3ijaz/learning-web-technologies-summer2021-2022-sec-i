<?php 
	//session_start();
	if(isset($_COOKIE['status']))
	{
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Users' home page</title>
</head>
<body>
		<h1>Welcome Anne!</h1>
		<a href="Profile.php"> Profile </a> <br> 
		<a href="Change Password.php"> Change Password </a> <br>  
		<a href="logout.php"> logout </a> 
</body>
</html>

<?php } else{

	echo "invalid request";
} ?>

