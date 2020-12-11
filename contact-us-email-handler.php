<?php
//adding the data from the form contact us and adding them into a email format and handling the sedgin the proess
  $name = $_POST['name'];
  $viewer_email = $_POST['email'];
  $viewer_mobile = $_POST['mobile'];
  $message = $_POST['message'];

  $email_from = 'lunaristudiosglobal@gmail.com';
  $email_subject = "Customer Wants To Contact You";

  $email_body = "User Name: $name.\n".
                  "User Email: $viewer_email.\n".
                    "User Mobile: $viewer_mobile.\n".
                    "User Message: $message.\n";


  $to = "nimeshadls8@gmail.com";

  $headers .= "From: $email_from \r\n";

  $headers .= "Reply-To: $viewer_email \r\n";

  mail($to,$email_subject,$email_body,$headers);

  header("Location: contact-us.php");
 ?>
