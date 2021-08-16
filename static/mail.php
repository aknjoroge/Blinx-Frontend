<?php 

$firstname = $_POST["first-name"];
$lastname= $_POST["last-name"];
$email= $_POST["email"];
$phone= $_POST["php_ini_loaded_file"];
$message= $_POST["text-content"];


echo "  Hallo $firstname , $lastname your Email $email Phone : $phone and Message $message  ";


//////////////////////////////
$to = "bensonmakau2000@gmail.com";
$subject = "From $firstname $lastname";

// Always set content-type when sending HTML email
$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

// More headers
$headers .= 'From: <info@blinx.com>' . "\r\n";
$headers .= 'Cc: myboss@blinx.com' . "\r\n";

mail($to,$subject,$message,$headers);

?>
