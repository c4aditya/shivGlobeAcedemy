<?php
require_once __DIR__ . '/helper/Helper.php';

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $name = $_POST['contact-name'] ?? '';
    $email = $_POST['contact-email'] ?? '';
    $phone = $_POST['contact-phone'] ?? '';
    $message = $_POST['contact-message'] ?? '';
    $mail_data['subject'] = "New Contact Form Message";
    $mail_data['body']    = "
        <h2>New Contact Form Message</h2>
        <p><b>Name:</b> {$name}</p>
        <p><b>Email:</b> {$email}</p>
        <p><b>Phone:</b> {$phone}</p>
        <p><b>Message:</b><br>{$message}</p>
    ";

     $helper = new Helper();
    $helper->sendMail($mail_data);
    echo "<script>alert('✅ Message Sent Successfully!'); window.location.href='contact-us.php';</script>";
}

?>
