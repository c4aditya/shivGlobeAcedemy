<?php
require_once __DIR__ . '/helper/Helper.php';

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $name = $_POST['name'] ?? '';
    $email = $_POST['email'] ?? '';
    $phone = $_POST['contact'] ?? '';
    $father_name = $_POST['father_name'] ?? '';
    $address = $_POST['address'] ?? '';
    $marksheet = $_POST['marksheet'] ?? '';
    $passport = $_POST['passport'] ?? '';
    $gender = $_POST['gender'] ?? '';
    $date = $_POST['date'] ?? '';
    $aadhar = $_POST['aadhar'] ?? '';
    $mail_data['subject'] = "New Contact Form Message";
        $mail_data['body']    = "
            <h2>New Contact Form Message</h2>
            <p><b>Name:</b> {$name}</p>
            <p><b>Email:</b> {$email}</p>
            <p><b>Phone:</b> {$phone}</p>
            <p><b>father_name:</b><br>{$father_name}</p>
            <p><b>address:</b><br>{$address}</p>
            <p><b>marksheet:</b><br>{$marksheet}</p>
            <p><b>passport:</b><br>{$passport}</p>
            <p><b>gender:</b><br>{$gender}</p>
            <p><b>date:</b><br>{$date}</p>
            <p><b>aadhar:</b><br>{$aadhar}</p>
        ";
    $helper = new Helper();
    $helper->sendMail($mail_data);
    echo "<script>alert('✅ Message Sent Successfully!'); window.location.href='online-admission.php';</script>";
}
?>
