<?php 

    $conn = mysqli_connect('localhost', 'root', '', 'webtech');

    /* if($conn){
         echo "Success";
     }else{
         echo "DB Error...";
     }*/

?>
   <html>
<head>
    <title>Insurance Officer User list</title>
</head>
<body>
       
        <table border="1">
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
            </tr>
<?php 
    $sql = "select * from isodetails";
    $result = mysqli_query($conn, $sql);
    
    while($row= mysqli_fetch_assoc($result))
    {
        print_r($row);
        echo "<br>";
    {
?>

            
    <?php
     }
  }
      ?>
        </table>
</body>
</html>