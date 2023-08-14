<!DOCTYPE html>
<html>
    <head>
     <meta charset="UTF-8" />
     <meta http-equiv="refresh" content="0; URL=http://localhost/EZYMEETING/index.php#footer" />
   </head>
</html>


<?php 
use PHPMailer\PHPMailer\PHPMailer;


$con = mysqli_connect("localhost", "root", "", "ezymeeting");
$receiver = $_POST["email_address"];
$subject ="Welcome to EzyMeeting!";
$body = "Thanks for joining our mailing list";
$sender = "shahriartonmoy22@gmail.com";
 
// Check connection
if($con === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
 
$sql = "INSERT INTO newsletter_subscriber (email_address)
VALUES ('$receiver')"; 
if(mysqli_query($con, $sql)){
    // echo "Records inserted successfully.";
} else{
    // echo "ERROR: Could not able to execute $sql. " . mysqli_error($con);
}

// Close connection
mysqli_close($con);


if(mail($receiver, $subject, $body, $sender)){
    // echo "Email sent successfully to $receiver";
}else{
    // echo "Sorry, failed while sending mail!";
}
?>


