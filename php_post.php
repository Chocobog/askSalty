<?php
require_once "Mail.php";

$from = 'askSalty1@gmail.com';
$to = 'josh.hurn@hotmail.com';
$subject = 'Hi!';
$body = "Hi,\n\nHow are you?";

$headers = array(
    'From' => $from,
    'To' => $to,
    'Subject' => $subject
);

$smtp = Mail::factory('smtp', array(
        'host' => 'ssl://smtp.gmail.com',
        'port' => '465',
        'auth' => true,
        'username' => 'askSalty1@gmail.com',
        'password' => 'wersdf2@'
    ));

$mail = $smtp->send($to, $headers, $body);

if (PEAR::isError($mail)) {
    echo('<p>' . $mail->getMessage() . '</p>');
} else {
    echo('<p>Message successfully sent!</p>');
}
?>