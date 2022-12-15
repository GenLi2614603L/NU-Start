<?php
function sendmail($to, $name, $code, $host, $username, $password)
{
require_once "Mail.php";

$from = $username;

$site = "Nu Start";

//$to = $to;
$subject = "$site Mail List Registration";
$body = "
Hi $name,\n
Thank you for registering with $site.\n
Your registration details are:\n
Email: $to\n
Please click the link below to confirm your registration to the mail list.\n
http://www.nustart.org/confirm-$code.php\n

Note: Do not reply to this email as the account is not monitored.";

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