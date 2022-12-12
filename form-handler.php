<?php
$name = $_post['name'];
$visitor_email = $_POST['email'];
$subject = $POST['subject'];
$message = $_POST['message'];

$email_from = 'info@yourwebsite.com';

email_subject = 'New Form Submission';

$email_body = "User Name: $name.\n".
                "User emai: $visitor_email.\n".
                "subject: $subject.\n".
                "User Message: $message.\n";

$to = '2018041041@mmmut.ac.in'  ;

$headers = "From: $email_from \r\n";

  $headers = "Reply-To: $visitor_email \r\n";

mail($to,$email_subject,$email_body,$headers);

  header("Location: contact.html") ;

 ?>
