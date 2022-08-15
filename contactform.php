<?php


   $name = $_POST['name'];
   $email = $_POST['email'];
   $message = $_POST['message'];

   $mailheader = "From:".$name."<".$email. ">\r\n";

   $recepient = "mokeke185@gmail.com";

   mail($recepient, $message, $mailheader)
   or die("Error");
   echo "message send";
?>