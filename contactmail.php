<?php
require 'mail/PHPMailerAutoload.php';

$name = $_POST["name"];
$mobile = $_POST["mobile"];
$selectedcourse = $_POST["selectedcourse"];
$selectedbranch = $_POST["selectedbranch"];
// $designation = $_POST["designation"];




$mail = new PHPMailer;
$mail->isSMTP();

// $mail->SMTPDebug = 4;                               // Enable verbose debug output

// $mail->SMTPOptions = array (
//     'ssl' => array(
//     'verify_peer' => false,
//     'verify_peer_name' => false,
//     'allow_self_signed' => true
//     )
//     );                                     // Set mailer to use SMTP


// Validate mobile number: should contain only numbers and have a specific length
if (preg_match('/^[0-9]{10}$/', $mobile) !== 1) {
    echo 'Invalid mobile number format. Please enter a 10-digit number.';
    exit(); // Stop further execution
}
// if (preg_match('/^[0-9]{10}$/', $whatsapp) !== 1) {
//     echo 'Invalid whatsapp number format. Please enter a 10-digit number.';
//     exit(); // Stop further execution
// }

$mail->Host = 'mail.buffcreativecollege.com'; // Specify main and backup SMTP servers
$mail->SMTPAuth = true;                               // Enable SMTP authentication
$mail->Username = 'enquiry@buffcreativecollege.com';                 // SMTP username
$mail->Password = 'Goat$2024%12';                           // SMTP password
$mail->SMTPSecure = 'ssl';                            // Enable TLS encryption, `ssl` also accepted
$mail->Port = 465;                                    // TCP port to connect to

$mail->setFrom('enquiry@buffcreativecollege.com', 'bcc');
$mail->addAddress('enquiry@buffcreativecollege.com');     // Add a recipient
// $mail->addAddress('ellen@example.com');               // Name is optional
// $mail->addReplyTo('info@example.com', 'Information');
// $mail->addCC('cc@example.com');
// $mail->addBCC('bcc@example.com');

// $mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
// $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name
$mail->isHTML(true);                                  // Set email format to HTML


$mail->Subject = 'mail from Buff Creative College website';
$mail->Body    = "
                   Name: {$name}<br>
                   Mobile Number: {$mobile}<br>
                     Selected Course: {$selectedcourse}<br>
                     Selected Branch: {$selectedbranch}<br>
                   ";
// $masil->AltBody = 'This is the body in plain text for non-HTML mail clients';

if (!$mail->send()) {
    echo 'Message could not be sent.';
    echo 'Mailer Error: ' . $mail->ErrorInfo;
} else {
    // header("Refresh:1, url=index.php");
    header("Location:contact.php?sent");
    echo 'mail sent';
    exit();
}
