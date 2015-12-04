<?php

require_once './vendor/autoload.php';
require_once './contact_form.config.php';
// $contactForm

session_start();

$message = $_POST['message'];
$csrfToken = $_POST['csrfToken'];
$sessionToken = $_SESSION['csrf.token'];

if ($csrfToken !== $sessionToken) {
  http_response_code(400);
  return;
}

// Sending a mail
$transport = Swift_MailTransport::newInstance();
$mailer = Swift_Mailer::newInstance($transport);
$message = Swift_Message::newInstance($contactForm->subject)
  ->setFrom($contactForm->from)
  ->setTo($contactForm->to)
  ->setBody($message);

// Send the message
$result = $mailer->send($message);

echo "0";

