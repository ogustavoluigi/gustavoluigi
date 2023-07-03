<?php

require '../vendor/autoload.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

$mail = new PHPMailer();

header("Content-Type: application/json");

try {
    $name = $_POST['name'] ?? "";
    $email = $_POST['email'] ?? "";
    $subject = $_POST['subject'] ?? "";
    $message = $_POST['message'] ?? "";

    $mail->IsSMTP();
    $mail->Host = 'mail.gustavoluigi.com.br';
    $mail->SMTPAuth = true;
    $mail->Username = 'contato@gustavoluigi.com.br';
    $mail->Password = 'superGaGa10!!';
    $mail->FromName = 'Gustavo Luigi';
    $mail->From = "contato@gustavoluigi.com.br";
    $mail->AddAddress('contato@gustavoluigi.com.br', 'Gustavo Luigi');
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;
    $mail->Port = 465;

    $mail->CharSet = 'UTF-8';
    $mail->IsHTML(true);
    $mail->Subject = $subject;
    $mail->Body = "<b>Nome:</b> $name<br><b>E-mail:</b> $email<br><b>Mensagem:</b> $message";
    $mail->AltBody = "Nome: $name<br>E-mail: $email<br>Mensagem: $message";

    if ($mail->Send()) echo json_encode(['success' => true]);
    else echo json_encode(['success' => false, 'message' => "Error: " . $mail->ErrorInfo]);
} catch (Exception $e) {
    echo json_encode(['success' => false, 'message' => $mail->ErrorInfo]);
}
