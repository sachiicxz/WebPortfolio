<?php 
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';

header('Content-Type: application/json'); // Return JSON

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $message = htmlspecialchars($_POST['message']);

    $mail = new PHPMailer(true);

    try {
        // ================= SMTP =================
        $mail->isSMTP();
        $mail->Host = 'smtp.gmail.com';
        $mail->SMTPAuth = true;
        $mail->Username = 'corrozdivina14@gmail.com';
        $mail->Password = 'cfpsrynrmmqfejqz'; // Your App Password
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
        $mail->Port = 587;

        // ================= EMAIL TO YOU =================
        $mail->setFrom('corrozdivina14@gmail.com', 'Portfolio Contact');
        $mail->addReplyTo($email, $name);
        $mail->addAddress('corrozdivina14@gmail.com');

        $mail->Subject = "New Portfolio Inquiry from $name";
        $mail->Body = "
Name: $name
Email: $email

Message:
$message
        ";

        $mail->send();

        // ================= AUTO-REPLY =================
        $reply = new PHPMailer(true);
        $reply->isSMTP();
        $reply->Host = 'smtp.gmail.com';
        $reply->SMTPAuth = true;
        $reply->Username = 'corrozdivina14@gmail.com';
        $reply->Password = 'cfpsrynrmmqfejqz';
        $reply->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
        $reply->Port = 587;

        $reply->setFrom('corrozdivina14@gmail.com', 'Divina Gracia Corroz');
        $reply->addAddress($email);
        $reply->Subject = "Message Received - Thank You!";
        $reply->Body = "
Hi $name,

Thank you for contacting me through my portfolio website.

I’ve received your message and will get back to you as soon as possible.

Best regards,
Divina Gracia Corroz
        ";

        $reply->send();

        // Return success

        echo json_encode(["status" => "success"]);

    } catch (Exception $e) {
        echo json_encode(["status" => "error", "message" => $mail->ErrorInfo]);
    }
}
?>


