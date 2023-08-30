<?php
   if(isset($_POST['submit'])){
      $name = $_POST['name'];
      $email = $_POST['email'];
	  $subject = $_POST['subject'];
      $message = $_POST['message'];
      $to = "mckviecodeit@gmail.com";
      $subject = "New Message from Contact Form";
      $body = "Name : $nameEmail: $email$subject$message";
      mail($to,$subject,$body);
      echo "Thank you for your message!";
   }
?>