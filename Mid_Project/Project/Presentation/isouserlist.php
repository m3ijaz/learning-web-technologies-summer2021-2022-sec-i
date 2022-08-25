<?php 

	 require_once('../Management/header.php');

?>
<html>
<head>
	<title>Insurance Officer User list</title>
</head>
<body style="background-color:moccasin;">
		<a href="isohome.php"> Back </a><hr> <br> 
		<a href="../Management/logout.php"> logout </a><hr>
		<br>
		<table border="2">
			<tr>
				<th>Id</th>
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
				$file = fopen('../Data/isodetails.txt', 'r');
				while(!feof($file))
				{
					$user = fgets($file);
					$user = explode("|", $user);
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
					<a href="isoedit.php?Id=<?=$user[0]?>"> Edit </a> |
					<a href="isodelete.php?Id=<?=$user[0]?>"> Delete </a> 
				</th>
			</tr>

			<?php
					}
				}
			?>
		</table>
</body>
</html>