<?php
//creating the format of the email that to add the data from the form and delivering the email to the admin
  $name = $_POST['name'];
  $viewer_email = $_POST['email'];
  $message = $_POST['message'];

  $email_from = 'lunaristudiosglobal@gmail.com';
  $email_subject = "New Book Request";

  $email_body = "User Name: $name.\n".
                  "User Email: $viewer_email.\n".
                    "User Message: $message.\n";


  $to = "nimeshadls8@gmail.com";

  $headers .= "From: $email_from \r\n";

  $headers .= "Reply-To: $viewer_email \r\n";

  mail($to,$email_subject,$email_body,$headers);

  header("Location: book-request.php");
 ?>
