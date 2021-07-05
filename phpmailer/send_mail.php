<?php
/* //Variables essentials
$name
$firstName
$phone // Not compulsory
$email
$subject
$message

 */

// Includes require phpmailer files
require 'includes/PHPMailer.php';
require 'includes/SMTP.php';
require 'includes/Exception.php';

// Define name spaces
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

$infosMsg = [];
$msgError = [
  "missField" => "Veuillez remplir les champs nécessitant l'envois de votre message. Seul le téléphone n'est pas requis.",
  "lengthChar" => "Les champs doivent comporter au minimum 3 caractères.",
  "filterEmail" => "Votre adresse mail n'est pas valide.",
  "lengthPhone" => "Le numéro de téléphone doit contenir 10 chiffres."
];
$postChecked = false;


//Improve conditions to avoid forget inputs 
if (isset($_POST) && !empty($_POST)) {

  //Check if all fields required are full
  foreach ($_POST as $key => $value) {
    if (empty($value) && $key !== "phone") {
      echo $msgError['missField'];
    } else {
      $postChecked = true;
    }
  }

  if ($postChecked) {
    foreach ($_POST as $key => $value) {

      //Check infos length without email
      if ($key !== "phone" && $key !== "email") {
        if (strlen($value) >= 3) {
          $infosMsg[$key] = htmlspecialchars(strip_tags($value));
        } else {
          echo $msgError['lengthChar'];
        }
      }

      // Check email
      if ($key === "email") {
        if (filter_var($value, FILTER_VALIDATE_EMAIL)) {
          $infosMsg[$key] = htmlspecialchars(strip_tags($value));
        } else {
          echo $msgError['filterEmail'];
        }
      }

      //Check phone
      if ($key === "phone" && !empty($value)) {
        if (strlen($value) === 10 && is_numeric($value)) {
          $infosMsg[$key] = $value;
        } else {
          echo $msgError['lengthPhone'];
        }
      }
    }

    echo "Le message a bien été envoyé!";
  }
} else {
  echo $msgError['missField'];
}

/* var_dump($infosMsg);
echo count($_POST);

die; */


// Create instance phpmailer
$mail = new PHPMailer();

try {

  // Set mailer to use smtp
  $mail->isSMTP();

  // Define smtp host
  $mail->Host = "smtp.gmail.com";

  // enables SMTP debug information (for testing)
  $mail->SMTPDebug  = 2;

  // Enable smtp authentification
  $mail->SMTPAuth = true;

  // Set type of encryption (ssl/tls)
  $mail->SMTPSecure = 'tls';

  // Set port to connect smtp
  $mail->Port = "587";

  // Set gmail username
  $mail->Username = "contact.portfolio.olivier@gmail.com";

  // Set gmail password
  $mail->Password = "";

  // Set sender mail
  $mail->setFrom($infosMsg["email"], $infosMsg["name"] . " " . $infosMsg["firstName"]); //$infosMsg["email"], $infosMsg["name"] . " " . $infosMsg["firstName"]

  // Set type send
  // $mail->isHTML(true);

  // Set email subject( $subject )
  $mail->Subject = $infosMsg['subject']; // $infosMsg['subject']

  // Email body ( $message )
  $mail->Body = $infosMsg["message"]; // Remember to add the phone if the sender wishes. //$infosMsg["message"]

  // Add recipient
  $mail->addAddress('contact.portfolio.olivier@gmail.com');

  // Finally send mail
  $mail->send();
  echo '<p>Votre mail a bien été envoyé!</p>';
} catch (Exception $th) {
  echo '<p>Un problème est survenu lors de l\'envois du mail</p>';
  echo 'Error Phpmailer: ' . $mail->ErrorInfo;
}

// Closed smtp connection
$mail->smtpClose();
