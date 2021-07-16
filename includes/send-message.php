<?php
    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\Exception;

    require '../vendor/autoload.php';

    $mail = new PHPMailer(true);

    try {
        $name = isset($_POST['name'])?$_POST['name']:"";
        $email = isset($_POST['email'])?$_POST['email']:"";
        $subject = isset($_POST['subject'])?$_POST['subject']:"";
        $message = isset($_POST['message'])?$_POST['message']:"";

        $mail->isSMTP();
        $mail->Host = 'free.mboxhosting.com';
        $mail->SMTPAuth = true;
        $mail->Username = 'contato@gustavoluigi.com.br';
        $mail->Password = 'spaceGaGa10!!';
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;
        $mail->Port = 465;

        $mail->setFrom('contato@gustavoluigi.com.br', 'Gustavo Luigi');
        $mail->addAddress('contato@gustavoluigi.com.br', 'Gustavo Luigi');

        $mail->CharSet = 'UTF-8';
        $mail->isHTML(true);
        $mail->Subject = $subject;
        $mail->Body = "<b>Nome:</b> $name<br><b>E-mail:</b> $email<br><b>Mensagem:</b> $message";
        $mail->AltBody = "Nome: $name<br>E-mail: $email<br>Mensagem: $message";

        $mail->send();

        header("Content-Type: application/json");
        echo json_encode(['success' => true]);
    } catch (Exception $e) {
        header("Content-Type: application/json");
        echo json_encode(['success' => false, 'message' => $mail->ErrorInfo]);
    }
?>