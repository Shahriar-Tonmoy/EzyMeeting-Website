<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

if (isset($_POST['g-recaptcha-response'])) {
    $secretkey = "6LejKdckAAAAAEmGSjRp2PPpeX8c20xgplcyZnkI";
    $ip = $_SERVER['REMOTE_ADDR'];
    $response = $_POST['g-recaptcha-response'];
    $url = "https://www.google.com/recaptcha/api/siteverify?secret=$secretkey&response=$response&remoteip=$ip";
    $fire = file_get_contents($url);
    $data = json_decode($fire);
    if ($data->success == true) { ?>
        <!DOCTYPE html>
        <html>

        <head>
            <meta charset="UTF-8" />
            <!-- <meta http-equiv="refresh" content="0; URL=http://localhost/vsl/index.php#contact" /> -->
        </head>

        </html>
<?php
        $admin_email = "mahinkhan727@gmail.com";
        $name = $_REQUEST['name'];
        $email = $_REQUEST['email'];
        $subject = $_REQUEST['subject'];
        $comment = $_REQUEST['body'];


        require 'PHPMailer/src/Exception.php';
        require 'PHPMailer/src/PHPMailer.php';
        require 'PHPMailer/src/SMTP.php';

        //Create an instance; passing `true` enables exceptions
        $mail = new PHPMailer(true);

        try {
            //Server settings || Reciver address 
            $mail->isSMTP();                                          //Send using SMTP
            $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
            $mail->SMTPAuth   = true;                                 //Enable SMTP authentication
            $mail->Username   = 'mahinkhan727@gmail.com';             //SMTP username || Send Data Address
            $mail->Password   = 'alfxkrmvpnehshbp';                   //SMTP password
            $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;          //Enable implicit TLS encryption
            $mail->Port       = 465;                                  //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

            //Recipients
            $mail->setFrom('from@example.com', $name);
            $mail->addAddress('mahinkhan727@gmail.com', 'Devloper');     //Add a recipient || Reciver Address

            $mess = "Name: " . $name . '<br>' . "Email: " . $email . '<br>' . "Subject: " . $subject . '<br>' . "Message: " . $comment;

            //Content
            $mail->isHTML(true);               //Set email format to HTML
            $mail->Subject = $subject;         //Mail Subject 
            $mail->Body    = $mess;
            $mail->AltBody = "Alter Body";

            $mail->send();

            echo "<script>alert('Mail send complate')</script>";
            echo "<script>setTimeout(\"location.href = 'index.php#contact';\",5);</script>";

            // header("location: index.php#contact");    //Redirect to this page

        } catch (Exception $e) {
            echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
        }
    } else {
        echo "<script>alert('Fill Captcha')</script>";
        echo "<script>setTimeout(\"location.href = 'index.php#contact';\",5);</script>";
    }
} else {
    echo "captcha error";
}

?>