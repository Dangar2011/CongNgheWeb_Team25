<?php
$usename = '15ptbang01@gmail.com';
$password = 'zpvpsysvotngfzxu';

//PHPMAILER
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
use PHPMailer\PHPMailer\SMTP;

require 'PHPmailer/Exception.php';
require 'PHPmailer/PHPMailer.php';
require 'PHPmailer/SMTP.php';

function sendEmailLogin($email)
{   
    global $usename;
    global $password;
    $mail = new PHPMailer(true);

    try {
        //Server settings
        $mail->SMTPDebug = 0;                      //Enable verbose debug output
        $mail->IsSMTP();                                 //Send using SMTP
        $mail->Host       = "ssl://smtp.gmail.com";                     //Set the SMTP server to send through
        $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
        $mail->Username   = $usename;                     //SMTP username
        $mail->Password   = $password;                               //SMTP password
        $mail->SMTPSecure = 'ssl';            //Enable implicit TLS encryption
        $mail->Port       = 465;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`
        $mail->CharSet = "UTF-8";

        //Recipients
        $mail->setFrom('15ptbang01@gmail.com', 'Meetup');
        $mail->addAddress($email);     //Add a recipient
        //$mail->addAddress('ellen@example.com');               //Name is optional
        //$mail->addReplyTo('info@example.com', 'Information');
        //$mail->addCC('cc@example.com');
        //$mail->addBCC('bcc@example.com');

        //Attachments
        //$mail->addAttachment('/var/tmp/file.tar.gz');         //Add attachments
        //$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    //Optional name

        //Content
        $mail->isHTML(true);                                  //Set email format to HTML
        $mail->Subject = 'Xác nhận tài khoản đăng ký MEET UP';
        $mail->Body    = 'Bạn đã đăng ký thành công tài khoản Meetup. <a href="#">Trang chủ Meet Up</a>';
        //$mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

        $mail->send();
        echo 'Message has been sent';
    } catch (Exception $e) {
        echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
    }
}
