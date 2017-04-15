<?php
require_once('PHPMailer-master\class.phpmailer.php');
require 'PHPMailer-master\PHPMailerAutoload.php';
session_start();
$em = $_SESSION["mail_reg"];
$mail = new PHPMailer(); // create a new object
$mail->IsSMTP(); // enable SMTP
//$mail->SMTPDebug = 2; // debugging: 1 = errors and messages, 2 = messages only
$mail->SMTPAuth = true; // authentication enabled
$mail->SMTPSecure = 'ssl'; // secure transfer enabled REQUIRED for Gmail
$mail->Host = "smtp.gmail.com";
$mail->Port = 465; // or 587
$mail->IsHTML(true);
$mail->Username = "waranlokesh84@gmail.com";
$mail->Password = "akshayaaa";
$mail->SetFrom("waranlokesh84@gmail.com");
$mail->Subject = "Thanks for registering";
$mail->Body = "Dear "

 if(!$mail->Send()) {
    session_destroy();
    $con = mysql_connect("localhost","root","");

    $m1 = mysql_select_db("user_data",$con);
    $q = "delete from user where email='".$em."'";

    mysql_query($q);
    //echo "Mailer Error: " . $mail->ErrorInfo;
    echo '<script language="javascript">
    alert("Something went wrong! Email provided why you seems incorrect!!!")
    window.location.href="register.php"
    </script>';

 } else {
    session_destroy();
    echo '<script language="javascript">
    alert("Thanks for registering.")
    window.location.href="register.php"
    </script>';
 }
 ?>