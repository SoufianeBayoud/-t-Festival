<?php
require_once 'dompdf/autoload.inc.php';

use Dompdf\Dompdf;

$document = new Dompdf();
/*
$html = '
<ul>
<li>DOMPDF_TEST</li>
</ul>
';
*/
ob_start(); //ob = Output Buffer
include('ticket_pdf.php');
$html = ob_get_clean();

$document->loadhtml($html); //$html vervang je daar $page als je de content van een html pagina op haalt


// set page size en orientation
$document->setPaper('A4', 'landscape');

// Render the html as pdf
$document->render();
ob_start();
$document->stream("ticket", array("Attachment"=>0));
$pdf = ob_get_contents();

// "ticket" = naam van de pdf
// 1 = Download
// 0 = Preview (Je kan het ook handmatig downloaden)
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';
require_once('PHPMailer/src/PHPMailer.php');

$mail = new PHPMailer(); // defaults to using php mail

$mail->isSMTP();
$mail->SMTPAuth = true;

//$mail->Host = 'smtp.gmail.com';
$mail->Host = 'smtp.mailtrap.io';
//$mail->Username ='trends.tfestival@gmail.com';
$mail->Username = '2948a1b55daa83';

//$mail->Password = 'ehbTrendsII';
$mail->Password = 'fd1680ab0868c8';

$mail->SMTPSecure = 'tls';

//$mail->Port = '587';
$mail->Port = 2525;
$mail->From = 'trends.tfestival@gmail.com';
$mail->FromName = 'TFestival';
$mail->addReplyTo('trends.tfestival@gmail.com', 'Reply Address');
$mail->addAddress($_SESSION['email']); //ontvanger

$file = tmpfile(); //Maakt een tijdelijk bestand aan om door te sturen met de mail
fwrite($file, $pdf);
$mail->addAttachment(stream_get_meta_data($file)['uri'], 'ticket_' . mb_strtolower($_SESSION['firstname']) . '.pdf');

//$mail->addAttachment($pdf, 'ticket_' . mb_strtolower($_SESSION['firstname']) . ".pdf");

$mail->Subject = 'ticket ' . $_SESSION['firstname'];
$mail->Body = 'Beste ' . $_SESSION['firstname']  .", hier is uw ticket.";


if(!$mail->Send()) {
    echo "Error while sending Email.";
    var_dump($mail);
  } else {
    echo "Email sent successfully";
  }
  unlink(stream_get_meta_data($file)['uri']); //verwijderd tijdelijke bestand (omdat die niet meer nodig is);