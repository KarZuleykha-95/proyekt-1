<?php

require_once('phmailer/PHPMailerAutoload.php');
$mail = new PHPMailer;
$mail->CharSet = 'utf-8'

$phone = $_POST['user_phone'];

$mail->isSSMTP();
$mail->Host = 'smtp.mail.ru';
$mail->SMTPAuth = true;
$mail->Username = 'zuleykha.karimova@list.ru';
$mail->Password = 'y-h9.%REv3(Znzf';
$mail->SMTPSecure = 'ssl';
$mail->Port = 465;

$mail->setFrom('zuleykha.karimova@list.ru'); 
$mail->addAddress('karimova.zuleykha.i@gmail.com');     
$mail->isHTML(true);                                

$mail->Subject = 'Заявка с тестового сайта';
$mail->Body    = ' оставил заявку, его телефон ' .$phone.;
$mail->AltBody = '';

if(!$mail->send()) {
    echo 'Error';
} else {
    header('location: thank-you.html');
}
?>