<?php

require '../vendor/autoload.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

$mail = new PHPMailer();

header("Content-Type: application/json");

try {
    $email = $_POST['email'] ?? "";
    $message = $_POST['message'] ?? "";

    $json = file_get_contents('php://input');
    $data = json_decode($json, true);

    if ($data !== null) {
        $email = $data['email'];
        $message = $data['message'];

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
        $mail->Subject = "Nova mensagem";
        $mail->Body = "<b>E-mail:</b> $email<br><b>Mensagem:</b> $message";
        $mail->AltBody = "E-mail: $email<br>Mensagem: $message";

        if ($mail->Send()) echo json_encode(['success' => true]);
        else echo json_encode(['success' => false, 'message' => "Error: " . $mail->ErrorInfo]);
    } else echo json_encode(['success' => false, 'message' => "Error: Bad Request"]);
} catch (Exception $e) {
    echo json_encode(['success' => false, 'message' => $mail->ErrorInfo]);
}
