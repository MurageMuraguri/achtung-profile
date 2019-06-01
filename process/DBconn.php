<?php
  $hostname="209.222.96.146";
  $user="achtungc_root";
  $password="root122448root";
  $database="achtungc_achtung";
   
    $conn = new mysqli($hostname,$user,$password,$database);
    
    //Verify connection
    if($conn->connect_error){
        die("Connection Failed: <br />" . $conn->connect_error);
    }else{
     print"Connected Successfully";
    }
?>