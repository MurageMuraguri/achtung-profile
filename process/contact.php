<?php 
session_start();

   if(isset($_POST['submit'])){
      $mailFrom = $_POST['email'];
      $message= $_POST['message'];
      $phone= $_POST['phone'];
      $name=$_POST['name'];

      $mailTo="info@achtung.co.ke";
      $headers="From".$mailFrom;
      $subject="Contact us from entry.";
      $txt="You got mail from ".$mailFrom." named ".$name." with phone number ".$phone." conferring the following message **".$message."**";
  //The money line
        mail($mailT0,$subject,$txt,$headers);
    
     $_SESSION['mail']=1;
      Header("Location:../index.php#contact_us");
    }


?>