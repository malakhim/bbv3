<?php
require_once "Mail.php";

$from = "bryan@brystore.com"; 
$to = "malakhim@gmail.com"; //CHANGE THIS TO YOUR GMAIL ADDRESS WELL
$subject = "Hi!";
$body = "Hi,\n\nHow are you?";

$host = "ssl://gator4107.hostgator.com";
$port = "465";
$username = "bryan@brystore.com"; //CHANGE THIS TO YOUR GMAIL ADDRESS WELL
$password = "72waLkpE"; //CHANGE THIS TO YOUR GMAIL PASSWORD

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