<?php 
	
	 require_once('../Management/header.php');
	 
	$NID = $_REQUEST['NID'];
	$file = fopen('../Data/cusdetails.txt', 'r');
	$data = "";
	while(!feof($file))
	{
		$user = fgets($file);
		$user = explode('|', $user);
		if($user[0] == $NID)
		{
			$data = $user;
			break;
		}
	}
?>
<html>
<head>
	<title>Edit Insurance Officer</title>
</head>
<body style="background-color:moccasin;">
		<a href="Cususerlist.php"> Back </a> <hr> <br> 
		<a href="logout.php"> logout </a> <hr>

		<form align= "center" action="../Management/Cusupdate.php" method="post" enctype="">
			<fieldset>
				<legend>Update Customer</legend>
				<table>
					<tr>
						<td>NID</td>
						<td><input type="text" name="NID" value="<?=$data[0]?>"></td>
					</tr>
					<tr>
						<td>Name</td>
						<td><input type="text" name="Name" value="<?=$data[1]?>"></td>
					</tr>
					<tr>
						<td>Gender</td>
						<td><input type="text" name="Gender" value="<?=$data[2]?>"></td>
					</tr>
					<tr>
						<td>Email</td>
						<td><input type="Email" name="Email" value="<?=$data[3]?>"></td>
					</tr>
					<tr>
						<td>DoB</td>
						<td><input type="date" name="DoB" value="<?=$data[4]?>"></td>
					</tr>
					<tr>
						<td>Blood_Group</td>
						<td><input type="text" name="Blood_Group" value="<?=$data[5]?>"></td>
					</tr>
					<tr>
						<td>Degree</td>
						<td><input type="text" name="Degree" value="<?=$data[6]?>"></td>
					</tr>
					<tr>
						<td>Occupation</td>
						<td><input type="text" name="Occupation" value="<?=$data[7]?>"></td>
					</tr>
					<tr>
						<td>User_Name</td>
						<td><input type="text" name="User_Name" value="<?=$data[8]?>"></td>
					</tr>
					<tr>
						<td>Password</td>
						<td><input type="Password" name="Password" value="<?=$data[9]?>"></td>
					</tr>
					<tr>
						<td>Confirm_Password</td>
						<td><input type="Password" name="Password" value="<?=$data[10]?>"></td>
					</tr>
					<tr>
						<td><input type="submit" name="" value="Submit"></td> 
						<td><input type="reset" name="" value="reset"></td>
					</tr>
				</table>
			</fieldset>
		</form>
</body>
</html>