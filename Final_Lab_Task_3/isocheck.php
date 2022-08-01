<?php 

    $json = $_POST['data'];
    
    $iso = json_decode($json);

    echo $iso->Name;

   

    echo $iso->User_Name;

    
    
    
?>