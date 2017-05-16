<?php
require_once 'swift/lib/swift_required.php';

$transport = Swift_SmtpTransport::newInstance('smtp.gmail.com', 465, "ssl")
  ->setUsername('askSalty1@gmail.com')
  ->setPassword('wersdf2@');

$mailer = Swift_Mailer::newInstance($transport);

$message = Swift_Message::newInstance('Test Subject')
  ->setFrom(array('abc@example.com' => 'ABC'))
  ->setTo(array('josh.hurn@hotmail.com'))
  ->setBody('This is a test mail.');

$result = $mailer->send($message);
?>