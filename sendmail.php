<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
require "vendor/autoload.php";

if($_SERVER["REQUEST_METHOD"]=="POST") {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $message= $_POST["message"];

    $mail = new PHPMailer(true);

    try {
        $mail -> isSMTP();
        $mail -> Host = "smtp.gmail.com";
        $mail -> SMTPAuth = true;
        $mail -> Username = "igorandrade355@gmail.com";
        $mail -> Password = "ssgn dkta tdgf xhxm";
        $mail -> SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
        $mail -> Port = 587;
        
        $mail -> setFrom("test@gmail.com", "Aktar");
        $mail -> addAddress("igorandrade355@gmail.com", "igor");
        $mail -> Subject = "New Contact form submission";
        $mail -> Body = "name: $name\n". 
                        "Email: $email\n". 
                        "Message: $message";
        if($mail -> send()) {
            echo "message sent";
        } else {
            echo "message could not be sent Erro: ". $mail -> ErrorInfo;
        }

    } catch(Exception $e) {
        echo "message could not be sent Error: ". $mail->ErrorInfo;
    };
}
?>