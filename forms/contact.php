<?php
$name = $_POST["name"];
$email = $_POST["email"];
$message = $_POST["message"];


require "./vendor/autoload.php";

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;

$mail = new PHPMailer(true);
$mail->isSMTP();
$mail->SMTPAuth = true;

//server info

//$mail->SMTPDebug = 2;

$mail->Host = "smtp.gmail.com";
$mail->SMTPSecure = "tls";
$mail->Port = 587;

//personal details

$mail->Username = "pekisonsdesignsltd@gmail.com";
$mail->Password = "nmng udsr xojz xngo";

$mail->setFrom($email, $name);
$mail->addAddress("pekisonsdesignsltd@gmail.com", "PEKISONS DESIGNS LTD");

$mail->Body = "Name : {$name} \n\n Email : {$email} \n\n Message : {$message}";

if ($mail->send()) {
    header("location:info.html");

} else {
    echo "error" . $mail->ErrorInfo;
}


?>