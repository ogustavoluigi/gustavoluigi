<?php

require '../vendor/autoload.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

$mail = new PHPMailer();

try {
    $name = isset($_POST['name']) ? $_POST['name'] : "";
    $email = isset($_POST['email']) ? $_POST['email'] : "";
    $subject = isset($_POST['subject']) ? $_POST['subject'] : "";
    $message = isset($_POST['message']) ? $_POST['message'] : "";

    $mail->IsSMTP();
    $mail->Host = 'smtp.umbler.com';
    $mail->SMTPAuth = true;
    $mail->Username = 'contato@gustavoluigi.com.br';
    $mail->Password = 'umblerGaGa10!!';
    $mail->FromName = 'Gustavo Luigi';
    $mail->From = "contato@gustavoluigi.com.br";
    $mail->AddAddress('contato@gustavoluigi.com.br', 'Gustavo Luigi');
    $mail->Port = 587;
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;

    $mail->CharSet = 'UTF-8';
    $mail->IsHTML(true);
    $mail->Subject = $subject;
    $mail->Body = "<b>Nome:</b> $name<br><b>E-mail:</b> $email<br><b>Mensagem:</b> $message";
    $mail->AltBody = "Nome: $name<br>E-mail: $email<br>Mensagem: $message";

    if ($mail->Send()) {
        header("Content-Type: application/json");
        echo json_encode(['success' => true]);
    } else {
        header("Content-Type: application/json");
        echo json_encode(['success' => false, 'message' => "Error: " . $mail->ErrorInfo]);
    }
} catch (Exception $e) {
    header("Content-Type: application/json");
    echo json_encode(['success' => false, 'message' => $mail->ErrorInfo]);
}
