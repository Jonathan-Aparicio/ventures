<?php
  session_start();
  $email = $_POST['email'];
  $info = $_POST['generalDescription'];
  $sub = $_POST['subjectLine'];
//Import PHPMailer classes into the global namespace
use PHPMailer\PHPMailer\PHPMailer;
require 'vendor/autoload.php';
require 'fpdf.php';

$path = 'temp/' . str_replace(' ', '', $sub). '.pdf';
echo $path;
// $path = 'images/test.pdf';
// //create pdf
// $pdf = new FPDF();
// $pdf->AddPage();
// $pdf->SetFont('Arial','B',16);
// $pdf->Cell(40,10,$info);
// $pdf->Output($path,'F');

// if(file_exists($path)) echo 'pdf created';

//
// //Mail
//
// //Create a new PHPMailer instance
// $mail = new PHPMailer;
// //Tell PHPMailer to use SMTP
// $mail->isSMTP();
// //Enable SMTP debugging
// // 0 = off (for production use)
// // 1 = client messages
// // 2 = client and server messages
// // $mail->SMTPDebug = 2;
// //Set the hostname of the mail server
// $mail->Host = 'smtp.gmail.com';
// $mail->Port = 587;
// //Set the encryption system to use - ssl (deprecated) or tls
// $mail->SMTPSecure = 'tls';
// //Whether to use SMTP authentication
// $mail->SMTPAuth = true;
// //Username to use for SMTP authentication - use full email address for gmail
// $mail->Username = "cadaventuresmaintenance@gmail.com";
// //Password to use for SMTP authentication
// $mail->Password = "Ideal1234";
// //Set who the message is to be sent from
// $mail->setFrom('maintenance@CADAVentures.com', 'First Last');
// //Set an alternative reply-to address
// $mail->addReplyTo('cadaventuresmaintenance@gmail.com', 'First Last');
// //Set who the message is to be sent to
// $mail->addAddress($email, 'John Doe');
// //Set the subject line
// $mail->Subject = 'Maintenance: '. $sub;
// $mail->Body = $info;
// $mail->AltBody = $info;
// //Attach an image file
// $mail->addAttachment($path);
// //send the message, check for errors
// if (!$mail->send()) {
//     echo "Mailer Error: " . $mail->ErrorInfo;
// } else {
//     echo "Message sent!";
// }
//
// if(unlink($path)) echo "File Deleted";
// header("Location: index.php");
// exit;
?>
