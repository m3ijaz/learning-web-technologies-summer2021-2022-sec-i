<?php 

	 require_once('../Management/header.php');
?>
<html>
<head>
	<title>Insurance list</title>
</head>
<body align="center" style="background-color:moccasin;">
		<a href="isohome.php"> Back </a><hr> <br> 
		<a href="../logout.php"> logout </a><hr>
		<br>
		<table border="3">
			<tr>
				<th>Serial_No</th>
				<th>Creation_Date</th>
				<th>Category</th>
				<th>Action</th>
			</tr>

			<?php 
				$file = fopen('../Data/insurancedetails.txt', 'r');
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
				<th>
					<a href="insurancerenew.php?Serial_No=<?=$user[0]?>"> Renew Insurance </a>  
				</th>
			</tr>

			<?php
					}
				}
			?>
		</table>
</body>
</html>