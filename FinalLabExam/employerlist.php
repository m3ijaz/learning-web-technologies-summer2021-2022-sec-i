<?php 

	 require_once('header.php');
	 require_once('employermodel.php');
	 $result = empview();
	 $count = mysqli_num_rows($result);
	
	
	
?>
<html>
<head>
	<title> Employer list</title>
</head>
<body style="background-color:moccasin;">
		<a href="jobportal.php"> Back </a><hr> <br> 
		<a href="logout.php"> logout </a><hr>
		<br>
		<table border="2" >
			<tr>
				<th>ID</th>
				<th>employer_name</th>
				<th>company_name</th>
				<th>contact_no</th>
				<th>user_name</th>
				<th>password</th>
				<th>Actions</th>
			</tr>

		<?php  
		
		    while($data = mysqli_fetch_assoc($result))
			 {
		?>

				<tr>

					<td><?php echo $data['ID']?></td>
					<td><?php echo $data['employer_name']?></td>
					<td><?php echo $data['company_name']?></td>
					<td><?php echo $data['contact_no']?></td>
					<td><?php echo $data['user_name']?></td>
					<td><?php echo $data['password']?></td>
					<td>
					<a href="empedit.php?ID=<?php echo $data['ID'];?>"> Edit </a> |
					<a href="empdelete.php?ID=<?php echo  $data['ID'];?>"> Delete </a>
				   </td>
				   
			 </tr>
            
			 <?php
			 }

			 ?>
            
			
			
		</table>
</body>
</html>