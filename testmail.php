<?php
require_once "Mail.php";

$from = "username@gmail.com"; 
$to = "username@gmail.com"; //CHANGE THIS TO YOUR GMAIL ADDRESS WELL
$subject = "Hi!";
$body = "Hi,\n\nHow are you?";

$host = "ssl://smtp.gmail.com";
$port = "465";
$username = "username@gmail.com"; //CHANGE THIS TO YOUR GMAIL ADDRESS WELL
$password = "password"; //CHANGE THIS TO YOUR GMAIL PASSWORD

$headers = array ('From' => $from,
'To' => $to,
'Subject' => $subject);
$smtp = Mail::factory('smtp',
array ('host' => $host,
'port' => $port,
'auth' => true,
'username' => $username,
'password' => $password));

$mail = $smtp->send($to, $headers, $body);

if (PEAR::isError($mail)) {
echo("<p>" . $mail->getMessage() . "</p>");
} else {
echo("<p>Message successfully sent!</p>");
}
?>