<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'phpmailer/PHPMailer.php';
require 'phpmailer/SMTP.php';
require 'phpmailer/Exception.php';

function sendConfirmationEmail($to, $name) {
    $mail = new PHPMailer(true);

    try {
        $mail->isSMTP();
        $mail->Host       = 'smtp.hostinger.com';
        $mail->SMTPAuth   = true;
        $mail->Username   = '';
        $mail->Password   = '%';
        $mail->SMTPSecure = 'ssl';
        $mail->Port       = 465;

        $mail->setFrom('', '');
        $mail->addAddress($to, $name);

        $mail->isHTML(true);
        $mail->Subject = 'Welcome to REAN Solar Connect! 🌞';
        $mail->Body    = "Hi <strong>$name</strong>,<br><br>Thank you for joining our waitlist!<br>We’ll notify you when we go live.<br><br><b>— The REAN Solar Team</b>";
        $mail->AltBody = "Hi $name, Thanks for joining our waitlist! — The REAN Solar Team";

        $mail->send();
        return true;
    } catch (Exception $e) {
        return false;
    }
}

function notifyAdmin($name, $email, $phone, $interest_area, $location) {
    $mail = new PHPMailer(true);

    try {
        $mail->isSMTP();
        $mail->Host       = 'smtp.hostinger.com';
        $mail->SMTPAuth   = true;
        $mail->Username   = '';
        $mail->Password   = '';
        $mail->SMTPSecure = 'ssl';
        $mail->Port       = 465;

        $mail->setFrom('admin@reansolar.com', 'REAN Solar Limited');
        $mail->addAddress('admin@reansolar.com', 'REAN Solar Limited');

        $mail->isHTML(true);
        $mail->Subject = '📩 New Waitlist Signup';
        $mail->Body    = "
            <strong>Name:</strong> $name<br>
            <strong>Email:</strong> $email<br>
            <strong>Phone:</strong> $phone<br>
            <strong>Interest Area:</strong> $interest_area<br>
            <strong>Location:</strong> $location<br>
        ";
        $mail->AltBody = "New signup from $name - $email";

        $mail->send();
        return true;
    } catch (Exception $e) {
        return false;
    }
}
?>
