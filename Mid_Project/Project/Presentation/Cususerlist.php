<?php 

	 require_once('../Management/header.php');
	 
?>
<html>
<head>
	<title>Insurance Officer User list</title>
</head>
<body style="background-color:moccasin;">
		<a href="cushome.php"> Back </a><hr> <br> 
		<a href="../Management/logout.php"> logout </a><hr>
		<br>
		<table border="3">
			<tr>
				<th>NID</th>
				<th>Name</th>
				<th>Gender</th>
				<th>Email</th>
				<th>DoB</th>
				<th>Blood_Group</th>
				<th>Degree</th>
				<th>Occupation</th>
				<th>User_Name</th>
				<th>Password</th>
				<th>Confirm_Password</th>
				<th>Actions</th>
			</tr>

			<?php 
				$file = fopen('../Data/cusdetails.txt', 'r');
				while(!feof($file))
				{
					$user = fgets($file);
					$user = explode("|", $user);
					//print_r($user);
					if(count($user) > 1)
					{
			?>
			<tr>
				<th><?=$user[0]?></th>
				<th><?=$user[1]?></th>
				<th><?=$user[2]?></th>
				<th><?=$user[3]?></th>
				<th><?=$user[4]?></th>
				<th><?=$user[5]?></th>
				<th><?=$user[6]?></th>
				<th><?=$user[7]?></th>
				<th><?=$user[8]?></th>
				<th><?=$user[9]?></th>
				<th><?=$user[10]?></th>
				
				<th>
					<a href="Cusedit.php?NID=<?=$user[0]?>"> EDIT </a> |
					<a href="Cusdelete.php?NID=<?=$user[0]?>"> DELETE </a> 	|
					 <a href="blockCustomer.php?NID=<?=$user[0]?>"> BLOCK </a>
				</th>
			</tr>

			<?php
					}
				}
			?>
		</table>
</body>
</html>