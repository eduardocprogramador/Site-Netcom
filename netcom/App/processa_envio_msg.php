<?php
require "./bibliotecas/PHPMailer/Exception.php";
require "./bibliotecas/PHPMailer/PHPMailer.php";
require "./bibliotecas/PHPMailer/POP3.php";
require "./bibliotecas/PHPMailer/SMTP.php";

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

$mail = new PHPMailer(true);

try {                                   
    $mail->isSMTP();                                            
    $mail->Host       = 'smtp.dialhost.com.br';                     
    $mail->SMTPAuth   = true;                                   
    $mail->Username   = 'matriculas@netcom.edu.br';                     
    $mail->Password   = 'Netcom@2004';                               
    $mail->SMTPSecure = 'tls';            
    $mail->Port       = 587;                                 

    $mail->setFrom('matriculas@netcom.edu.br', 'Site Netcom');
    $mail->addAddress('matriculas@netcom.edu.br');
    
    $mail->isHTML(true);
    $mail->CharSet = 'UTF-8';
    $mail->Subject = 'Mensagem Site';
    $mail->Body    = '<strong>Dados:</strong><br>Nome: '.$_POST['nome'].'<br>Telefone: '.$_POST['telefone'].'<br>Email: '.$_POST['email'].'<br><br>'.$_POST['descricao'];
    if($_POST['nome'] != ''){
        $mail->send();
        echo 'Message has been sent';
    }
} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}
?>