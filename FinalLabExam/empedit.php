<?php 
	
	 require_once('../Management/header.php');
     require_once('../data/isomodel.php');
	$ID = $_REQUEST['ID'];
	 $data = isoviewbyID($ID);
	 
	

?>
<html>
<head>
	<title>Edit Insurance Officer</title>
</head>
<body style="background-color:moccasin;">
		<a href="employerlist.php"> Back </a> <hr> <br> 
		<a href="logout.php"> logout </a> <hr>

		<form align = "center" action="../Management/isoupdate.php" method="post" enctype="">
			<fieldset>
				<legend>Update Employer</legend>
				<table>
				

					<tr>
						<td>employer_name</td>
						<td><input type="text" name="Name" value="<?=$data['Name']?>"></td>
					</tr>
					
					<tr>
						<td>company_name</td>
						<td><input type="text" name="Gender" value="<?=$data['Gender']?>"></td>
					</tr>
					<tr>
						<td>contact_no</td>
						<td><input type="Email" name="Email" value="<?=$data['Email']?>"></td>
					</tr>
					<tr>
						<td>user_name</td>
						<td><input type="text" name="user_name" value="<?=$data['user_name']?>"></td>
					</tr>
					<tr>
						<td>password</td>
						<td><input type="password" name="password" value="<?=$data['password']?>"></td>
					</tr>
					
					<tr>
						<td>
						<input type="hidden" name="ID" value="<?=$ID?>"> 
						<input type="submit" name="submit" value="submit"> 
						<input type="reset" name="reset" value="reset">
                       </td>
					</tr>
				</table>
			</fieldset>
		</form>
</body>
</html>