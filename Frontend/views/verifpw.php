	<?php
require_once './vendor/autoload.php';
try {
$host = "smtp.google.com";
$port = 465; 
$username = "kirin.esports@gmail.com";
$password = "ffanMai2019";


$from = "kirin.esports@gmail.com";
$to = "firaskun@gmail.com";
$enc="ssl";

$subject = "Password Reset";
$body = "Hi,\n\n Test from my website";


$transport = new Swift_SmtpTransport($host,$port,'tls',$username,$password);
$swift = new Swift_Mailer($transport);
$message = new Swift_Message($subject);
$message->setFrom($from);
$message->setBody($body, 'text/html');
$message->setTo($to);
} catch (Exception $e) {
  echo $e->getMessage();
}

?>	