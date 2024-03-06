<?php

$host = "localhost";
$username = "root";
$password = "";
$dbname = "portfolio";

    //These must be at the top of your script, not inside a function
    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\SMTP;
    use PHPMailer\PHPMailer\Exception;

    // require 'vendor/autoload.php';
    require 'src/Exception.php';
    require 'src/PHPMailer.php';
    require 'src/SMTP.php';

    function contact_mail($name,$email)
    {
    $mail = new PHPMailer(true);

    $mail->isSMTP();
    $mail->Host       = 'smtp.gmail.com';
    $mail->SMTPAuth   = true;
    $mail->Username   = 'legengboy.6244@gmail.com';
    $mail->Password   = 'ycwt csji zzhg pazb';
    $mail->SMTPSecure =  PHPMailer::ENCRYPTION_STARTTLS;
    $mail->Port       = 587;

    $mail->setFrom('legengboy.6244@gmail.com', 'SANSKAR GUPTA');
    $mail->addAddress($email , $name);

    $mail->isHTML(true);
    $mail->Subject = 'CONTACT REQUEST REPLY';
    
    $email_template = "
    <h2>Hello $name</h2>
    <h3>I am Devilrank Sanskar gupta's AI assistant thankyou for contacting,sir contact you shortly</h3>
    <h2>thankyou</h2>
    <br/><br/>
    ";
    $mail->Body = $email_template;
    $mail->send();
    }

?>