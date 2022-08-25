<?php 
	
	 require_once('../Management/header.php');
	 
	$Serial_No = $_REQUEST['Serial_No'];
	$file = fopen('../Data/insurancedetails.txt', 'r');
	$data = "";
	while(!feof($file))
	{
		$user = fgets($file);
		$user = explode('|', $user);
		if($user[0] == $Serial_No)
		{
			$data = $user;
			break;
		}
	}
?>
<html>
<head>
	<title>Renew Insurance </title>
</head>
<body align="center"style="background-color:moccasin;">
		<a href="renewInsurance.php"> Back </a> <hr> <br> 
		<a href="../Management/logout.php"> Logout </a> <hr>

		<form align = "center" action="../Management/insuranceupdate.php" method="post" enctype="">
			<fieldset>
				<legend>Update Insurance Officer</legend>
				<table>
					<tr>
						<td>Serial_No</td>
						<td><input type="text" name="Serial_No" value="<?=$data[0]?>"></td>
					</tr>
					<tr>
						<td>Creation_Date</td>
						<td><input type="text" name="Creation_Date" value="<?=$data[1]?>"></td>
					</tr>
					<tr>
						<td>Category</td>
						<td><input type="text" name="Category" value="<?=$data[2]?>"></td>
					</tr>
					<tr>
						<td><input type="submit" name="" value="Submit"></td> 
						<td><input type="reset" name="" value="Reset"></td>
					</tr>
				</table>
			</fieldset>
		</form>
</body>
</html>