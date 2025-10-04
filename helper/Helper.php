<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require_once __DIR__ . '/../PHPMailer/src/Exception.php';
require_once __DIR__ . '/../PHPMailer/src/PHPMailer.php';
require_once __DIR__ . '/../PHPMailer/src/SMTP.php';

class Helper{
    public function sendMail($mail_data)
    {
        $mail = new PHPMailer(true);

        try {
            $mail->isSMTP();
            $mail->Host       = 'smtp.gmail.com';
            $mail->SMTPAuth   = true;
            $mail->Username   = 'info@shivglobeacademy.com';
            $mail->Password   = 'gckujqtikuzycjyk';
            $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
            $mail->Port       = 587;

            $mail->setFrom('info@shivglobeacademy.com', 'ShivGlobe Academy');
            $mail->addAddress('info@shivglobeacademy.com', 'Admin');

            $mail->isHTML(true);
            $mail->Subject = $mail_data['subject'];
            $mail->Body    = $mail_data['body'];

            $mail->send();
            // echo "<script>alert('✅ Message Sent Successfully!'); window.location.href='contact-us.php';</script>";
        } catch (Exception $e) {
            // echo "<script>alert('❌ Message could not be sent. Error: {$mail->ErrorInfo}'); window.location.href='contact-us.php';</script>";
        }
    }
}
?>