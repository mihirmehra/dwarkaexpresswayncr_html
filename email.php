<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer/Exception.php';
require 'PHPMailer/PHPMailer.php';
require 'PHPMailer/SMTP.php';


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Collect form data
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];

    // Create a new PHPMailer instance
    $mail = new PHPMailer(true);

    try {
        //Server settings
        $mail->isSMTP();                                            
        $mail->Host       = 'smtp.gmail.com';                     
        $mail->SMTPAuth   = true;                               
        $mail->Username   = 'mihirmehrajio@gmail.com';               
        $mail->Password   = 'zwmq uerj yqwj acfv';               
        $mail->SMTPSecure = 'tls';      
        $mail->Port       = 587;                                  

        //Recipients
        $mail->setFrom('info@dwarkaexpresswayncr.com', 'Dwarka Expressway NCR');
        $mail->addAddress('info@dwarkaexpresswayncr.com');

        // Content
        $mail->isHTML(true);                                     
        $mail->Subject = 'New lead form dwarkaexpresswayncr';
        $mail->Body    = "Name: $name<br>Email: $email<br>Phone: $phone";

        $mail->send();
        header('Location: https://dwarkaexpresswayncr.com/thankyou.html'); // Redirect to thank you page
        exit();
    } catch (Exception $e) {
        echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
    }
}
?>
