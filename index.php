<?php

require __DIR__ . '/vendor/autoload.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;

$mail = new PHPMailer;
$mail->isSMTP();
$mail->SMTPDebug = SMTP::DEBUG_SERVER;
$mail->Host = 'smtp.***.com.br'; // alterar para o servidor SMTP
$mail->SMTPAuth = true;
$mail->Username = '**@**.com.br'; // alterar com o e-mail que será o remetente
$mail->Password = 'P455W0RD'; // senha do e-mail remetente
$mail->setFrom('**@**.com.br'); // email do remetente
$mail->addAddress('**@**.com', 'Nome destinatário'); // email do destinatario
$mail->Subject = 'PHPMailer GMail SMTP test';
$mail->msgHTML(file_get_contents('contents.html'), __DIR__);
$mail->AltBody = 'This is a plain-text message body';

if (!$mail->send()) {
    echo 'Mailer Error: '. $mail->ErrorInfo;
} else {
    echo 'Message sent!';
}
