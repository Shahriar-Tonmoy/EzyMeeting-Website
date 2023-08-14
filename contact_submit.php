<!-- <!DOCTYPE html>
<html>
    <head>
     <meta charset="UTF-8" />
     <meta http-equiv="refresh" content="0; URL=http://localhost/EZYMEETING/index.php#contact" />
   </head>
</html> -->

<?php 
$con = mysqli_connect("localhost", "root", "", "ezymeeting");
$name = $_POST["name"];
$email_address = $_POST["email"];
$subject = $_POST["subject"];
$message = $_POST["message"];


 
// Check connection
if($con === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
 
$sql = "INSERT INTO contact_table (name, email_address, subject, message)
VALUES ('$name', '$email_address', '$subject', '$message')"; 
if(mysqli_query($con, $sql)){
    // echo "Records inserted successfully.";
    echo "<script>alert('We've successfully got your message')</script>";
    echo "<script>setTimeout(\"location.href = 'index.php#contact';\",5);</script>";
} else{
    // echo "ERROR: Could not able to execute $sql. " . mysqli_error($con);
}

// Close connection
mysqli_close($con);

