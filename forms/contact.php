<?php
session_cache_limiter('nocache');
header('Expires: ' . gmdate('r', 0));

header('Content-type: application/json');

require_once('php-mailer/PHPMailerAutoload.php');

// Step 1 - Enter your email address below.
$email = 'info@wirthreingung.de';

$fromEmail = 'subscription@wirthreingung.de';

// If the e-mail is not working, change the debug option to 2 | $debug = 2;
$debug = 0;

$subject = $_POST['subject'];

$fields = array(
	0 => array(
		'text' => 'Name',
		'val' => $_POST['name']
	),
	1 => array(
		'text' => 'Email address',
		'val' => $_POST['email']
	),
	2 => array(
		'text' => 'Message',
		'val' => $_POST['message']
	)
);

$message = 'This message is a result of a contact form submission on your website. <br>Please review the information below, which was provided by a website visitor.<br>';

foreach ($fields as $field) {
	$message .= $field['text'] . ": " . htmlspecialchars($field['val'], ENT_QUOTES) . "<br>\n";
}

$mail = new PHPMailer(true);

try {

	$mail->SMTPDebug = $debug;                                 // Debug Mode

	// Step 2 (Optional) - If you don't receive the email, try to configure the parameters below:

	$mail->IsSMTP();                                            // Set mailer to use SMTP
	$mail->Host = 'smtp.titan.email';				            // Specify main and backup server
	$mail->SMTPAuth = true;                                     // Enable SMTP authentication
	$mail->Username = 'subscription@wirthreingung.de';                 // SMTP username
	$mail->Password = '$ub@2023';                               // SMTP password
	$mail->SMTPSecure = 'tls';                                  // Enable encryption, 'ssl' also accepted
	$mail->Port = 587;   								        // TCP port to connect to

	$mail->AddAddress($email);	 						        // Add recipient

	//$mail->AddAddress('person2@domain.com', 'Person 2');     // Add a secondary recipient
	//$mail->AddCC('person3@domain.com', 'Person 3');          // Add a "Cc" address. 
	//$mail->AddBCC('person4@domain.com', 'Person 4');         // Add a "Bcc" address. 

	$mail->SetFrom($fromEmail, $_POST['name']);
	$mail->AddReplyTo($_POST['email'], $_POST['name']);

	$mail->IsHTML(true);                                  // Set email format to HTML

	$mail->CharSet = 'UTF-8';

	$mail->Subject = $subject;
	$mail->Body    = $message;

	// Send the email
	try {
		$mail->Send();
		$arrResult = array('response' => 'OK');
	} catch (Exception $e) {
		$arrResult = array('response' => 'error', 'errorMessage' => $mail->ErrorInfo);
	}
} catch (phpmailerException $e) {
	$arrResult = array('response' => 'error', 'errorMessage' => $e->errorMessage());
} catch (Exception $e) {
	$arrResult = array('response' => 'error', 'errorMessage' => $e->getMessage());
}

if ($debug == 0) {
	echo json_encode($arrResult);
}
