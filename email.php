<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require 'phpmailer/SMTP.php';
require 'phpmailer/PHPMailer.php';
require 'phpmailer/Exception.php'; 
$address=$_POST['address'];
$bedrooms=$_POST['bedrooms'];
$bathrooms=$_POST['bathrooms'];
$city=$_POST['city'];
$code=$_POST['code'];
$comments=$_POST['comments'];
$details=$_POST['details'];
$email=$_POST['email'];
$extras=$_POST['extras'];
$hours=$_POST['hours'];
$lastName=$_POST['lastName'];
$name=$_POST['name'];
$often=$_POST['often'];
$phone=$_POST['phone'];
$preferedDay=$_POST['preferedDay'];
$preferedTime=$_POST['preferedTime'];
$street=$_POST['street'];
$typeClean=$_POST['typeClean'];


$mail = new PHPMailer(true);

try { 
    //Server settings
    $mail->SMTPDebug = 0;//SMTP::DEBUG_SERVER;                      // Enable verbose debug output
    $mail->isSMTP();                                            // Send using SMTP
    $mail->Host       = 'mail.netcytecno.com';                    // Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   // Enable SMTP authentication
    $mail->Username   = 'info@netcytecno.com';                     // SMTP username
    $mail->Password   = 'passwasabi20';                               // SMTP password
    $mail->SMTPSecure = 'ssl';         // Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` encouraged
    $mail->Port       = 465;                                    // TCP port to connect to, use 465 for `PHPMailer::ENCRYPTION_SMTPS` above

    //Recipients
    $mail->setFrom($email, $name);
    $mail->addAddress('info@netcytecno.com', 'Cynty');     // Add a recipient

    // Content
    $mail->isHTML(true);                                  // Set email format to HTML
    $mail->Subject = 'Cleaning requered from ';
    $mail->Body    = "Name: $name  $lastName <br/><br/>".
                     "Email: $email <br/><br/>".
                     "Phone: $phone <br/><br/>".
                     "Street: $street <br/><br/>".
                     "Address: $address <br/><br/>".
                     "Postal Code: $code <br/><br/>".
                     "Type Clean: $typeClean <br/><br/>".
                     "Hours por Clean: $hours <br/><br/>".
                     "How Often?: $often <br/><br/>".
                     "Bedrooms: $bedrooms <br/><br/>".
                     "Extras: $extras <br/><br/>".
                     "Prefered Day: $preferedDay <br/><br/>".
                     "Prefered Time: $preferedTime <br/><br/>".
                     "Comments: $comments <br/><br/>".
                     "Details to the areas: $details \n\n";

                     $mail->send();

                     $response=[
                         'response'=>'The message has been sent'
                     ];
                     die(json_encode($response));
                 
                 } catch (Exception $e) {

                     $response=[
                         'response'=>$mail->ErrorInfo
                     ];
                     die(json_encode($response));
                 }
 ?>
                 
                 