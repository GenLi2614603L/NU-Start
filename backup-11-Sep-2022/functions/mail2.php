<?php
function sendmail($email, $name, $comment, $emailto, $host, $username, $password)
{
require_once "Mail.php";
$to = $emailto;
$from = $email;

$site = "Nu Start";

//$to = $to;
$subject = "$site Feedback";
$body = "
From: $name,\n
Email: $email\n\n
$comment\n

";

$headers = array ('From' => $from,
  'To' => $to,
  'Subject' => $subject);
$smtp = Mail::factory('smtp',
  array ('host' => $host,
    'auth' => true,
    'username' => $username,
    'password' => $password));

$mail = $smtp->send($to, $headers, $body);

if (PEAR::isError($mail)) {
  //echo("<p>" . $mail->getMessage() . "</p>");
  $status = '0';
  $message = $mail->getMessage();
 } else {
  //echo("<p>Message successfully sent!</p>");
  $status = '1';
  $message = 'Message successfully sent!';
 }

$result = array($status, $message);
return $result;
}
?>