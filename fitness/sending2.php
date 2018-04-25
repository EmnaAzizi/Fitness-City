<?php
use PHPMailer\PHPMailer\PHPMailer;
require 'C:\Users\HP\vendor\autoload.php';
//Create a new PHPMailer instance
$mail = new PHPMailer;
//Tell PHPMailer to use SMTP
$mail->isSMTP();

$mail->SMTPDebug = 0;
$mail->Host = 'smtp.gmail.com';
$to      = $_POST["email"];
$subject = $_POST["subject"];
$message = $_POST["comment"];
$mail->Port = 587;

$mail->SMTPSecure = 'tls';

$mail->SMTPAuth = true;
$mail->Username = 'manna.azizi@gmail.com';          // SMTP username
$mail->Password = '118008***emna'; // SMTP password
//Set who the message is to be sent from
$mail->setFrom('manna.azizi@gmail.com', 'Az Em');
//Set an alternative reply-to address
$mail->addReplyTo($to, 'First Last');
//Set who the message is to be sent to
$mail->addAddress($to, 'John Doe');
//Set the subject line
$mail->Subject = $subject;
$mail->Body = $message;
$mail->AltBody = 'This is a plain-text message body';
//send the message, check for errors
if (!$mail->send()) {
    echo "Mailer Error: " . $mail->ErrorInfo;
} else {
   echo "<script type='text/javascript'>alert('Message envoyé');
window.location='chat.php';
</script>";
    //Section 2: IMAP
    //Uncomment these to save your message in the 'Sent Mail' folder.
    #if (save_mail($mail)) {
    #    echo "Message saved!";
    #}
}
?>