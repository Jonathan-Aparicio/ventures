<?php
  session_start();
  $email = $_POST['email'];
  $info = $_POST['generalDescription'];
  $sub = $_POST['subjectLine'];
//Import PHPMailer classes into the global namespace
use PHPMailer\PHPMailer\PHPMailer;
require 'vendor/autoload.php';
require 'fpdf.php';

function title(){
  $this->SetFont('Arial','BI',20);
  $this->Cell(0,10,"CADAVenturs",1,1,'C');
  $this->Ln();
  $this->Ln();
}
fuction body($i, $s){
  $this->SetFont('Arial',14);
  $this->Cell(0,0,$s);
  $this->Ln();
  $this->Cell(0,0,$i);
  $this->Ln();
  $this->Cell(0,0,date("y-m-d"));
}

$path = str_replace(' ', '', $sub). '.pdf';
// echo $path;
// $path = "Maintenance".date("y-m-d") .".pdf";
//create pdf
$pdf = new FPDF();
$pdf->AddPage();
// $pdf->SetFont('Arial','BI',20);
// $pdf->Cell(0,10,"CADAVenturs",1,1,'C');
// $pdf->Ln();
// $pdf->Ln();
// $pdf->SetFont('Arial',14);
// $pdf->Cell(0,0,$sub);
// $pdf->Ln();
// $pdf->Cell(0,0,$info);
// $pdf->Ln();
// $pdf->Cell(0,0,date("y-m-d"));
$pdf->title();
$pdf->body($info,$sub);
$pdf->Output($path,'F');

// if(file_exists($path)) echo 'pdf created ' . $path;


//Mail

//Create a new PHPMailer instance
$mail = new PHPMailer;
//Tell PHPMailer to use SMTP
$mail->isSMTP();

//Set the hostname of the mail server
$mail->Host = 'smtp.gmail.com';
$mail->Port = 587;
//Set the encryption system to use - ssl (deprecated) or tls
$mail->SMTPSecure = 'tls';
//Whether to use SMTP authentication
$mail->SMTPAuth = true;
//Username to use for SMTP authentication - use full email address for gmail
$mail->Username = "cadaventuresmaintenance@gmail.com";
//Password to use for SMTP authentication
$mail->Password = "Ideal1234";
//Set who the message is to be sent from
$mail->setFrom('maintenance@CADAVentures.com', 'CADAVenturs');
//Set an alternative reply-to address
$mail->addReplyTo('cadaventuresmaintenance@gmail.com');
//Set who the message is to be sent to
$mail->addAddress($email, 'John Doe');
//Set the subject line
$mail->Subject = 'Maintenance: '. $sub;
$mail->Body = "Your maintenance requst has been sent.";
$mail->AltBody = $info;
//Attach an pdf file
$mail->addAttachment($path);
//send the message, check for errors
if (!$mail->send()) {
    echo "Mailer Error: " . $mail->ErrorInfo;
} else {
    echo "Message sent!";
}

if(unlink($path)) echo "File Deleted";
header("Location: index.php");
exit;
?>
