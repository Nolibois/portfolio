<?php
/* //Variables essentials
$message
$subject
 */

// Includes require phpmailer files
require './phpmailer/includes/PHPMailer.php';
require './phpmailer/includes/SMTP.php';
require './phpmailer/includes/Exception.php';

// Define name spaces
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

// Create instance phpmailer
$mail = new PHPMailer();

try {

  // Set mailer to use smtp
  $mail->isSMTP(true);

  // Define smtp host
  $mail->Host = "smtp.gmail.com";

  // Enable smtp authentification
  $mail->SMTPAuth = 'true';

  // Set type of encryption (ssl/tls)
  $mail->SMTPSecure = 'tls';

  // Set port to connect smtp
  $mail->Port = "587";

  // Set gmail username
  $mail->Username = "";

  // Set gmail password
  $mail->Password = "";

  // Set email subject( $subject )
  $mail->Subject = "Le sujet du message";

  // Set sender mail ( Recipient )
  $mail->setFrom('contact.portfolio.olivier@gmail.com');

  // Email body ( $message )
  $mail->Body = 'Voici un message test pour savoir si mon PHPMailer fonctionne.';

  // Add recipient
  $mail->addAddress('contact.portfolio.olivier@gmail.com');

  // Finally send mail
  $mail->send(true);
  echo '<p>Votre mail a bien été envoyé!</p>';
} catch (\Throwable $th) {
  echo '<p>Un problème est survenu lors de l\'envoie du mail</p>';
  echo 'Error Phpmailer: ' . $th->ErrorInfo;
}

// Closed smtp connection
$mail->smtpClose();
