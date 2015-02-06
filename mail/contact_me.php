<?php
// Check for empty fields
if(empty($_POST['name'])  		||
   empty($_POST['email']) 		||
   empty($_POST['phone']) 		||
   empty($_POST['message'])	||
   !filter_var($_POST['email'],FILTER_VALIDATE_EMAIL))
   {
	echo "No arguments Provided!";
	return false;
   }
	
$name = $_POST['name'];
$email_address = $_POST['email'];
$phone = $_POST['phone'];
$message = $_POST['message'];

// Call MailGun API (editado para utilização com MailGun)

require 'vendo/autoload.php';
use Mailgun\Mailgun;

$mg = new Mailgun("key-c0f9579ee1ee42397ab5c6ff0117b7c3");
$domain = "datapubapp.com.br";

$result = $mg->sendMessage(
	$domain,
	array(
		'from' => 'no-reply@datapubapp.com.br',
		'to' => 'contato@datapubapp.com.br',
		'subject' => 'Formulario de contato: $name',
		'text' => '$message')
	);
	
// Create the email and send the message
//$to = 'b_ferrari@live.com'; // Add your email address inbetween the '' replacing yourname@yourdomain.com - This is where the form will send a message to.
//$email_subject = "DataPub Contact Form:  $name";
//$email_body = "Esta e uma mensagem enviada pela formulario de contato do DataPub.\n\n"."Detalhes:\n\nName: $name\n\nEmail: $email_address\n\nPhone: $phone\n\nMessage:\n$message";
//$headers = "From: noreply@rhcloud.com\n"; // This is the email address the generated message will be from. We recommend using something like noreply@yourdomain.com.
//$headers .= "Reply-To: $email_address";	
//mail($to,$email_subject,$email_body,$headers);
//return true;
?>