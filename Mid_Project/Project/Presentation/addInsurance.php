<?php 
	
	 require_once('../Management/header.php');

?>

<html>
<head>
	<title>Add New Insurance</title>
</head>
<body style="background-color:moccasin;">
		<a href="Isohome.php"> <h3>Back</h3> </a>  
		
		<form align = "center"action="../Management/insuranceCheck.php" method="post" enctype="">
		<fieldset>
				<legend>
					<h2>Insurance</h2>
				</legend>
				<table align = "center">
                    <tr>
						<td><b>Serial_No</b></td> 
					</tr>
					<tr>
						<td><input type="text" name="Serial_No" value=""></td>
					</tr>
					<tr>
				        <td><b>Creation_Date</b></td>
				    </tr>
				    <tr>
						<td>
							<input type="date" name="Creation_Date" value = " ">
						</td>
					</tr>
                    <td><b>Category</b></td>
				    </tr>
				    <tr>
					    <td>
						    <input type="radio" name="Category" value="Life_Insurance"> Life_Insurance
						    <input type="radio" name="Category" value="Property_Insurance"> Property_Insurance
						    <input type="radio" name="Category" value="Car_Insurance"> Car_Insurance
						    <input type="radio" name="Category" value="Fire_Insurance"> Fire_Insurance
					   </td>
				   </tr>
				   <tr>
						<td>
							<hr>
						<input type="submit" name="click" value="Enter">
						<input type="reset" name="" value="Reset">
					   </td>
					</tr>
				</table>
			</fieldset>
	</form>
		<a href="../Management/logout.php"> <h3>Logout</h3> </a>

</body>
</html>