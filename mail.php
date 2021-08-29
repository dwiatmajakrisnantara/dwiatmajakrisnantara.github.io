<?php
//get data from form  
$name = $_POST['name'];
$email= $_POST['emailaddress'];
$message= $_POST['message'];

$to = "atmajakrisnantara@gmail.com";

$subject = "Mail From Website";
$txt ="Name = ". $name . "\r\n  Email = " . $emailaddres . "\r\n Message =" . $message;

$headers = "From: noreply@dwiatmajakrisnantara.github.io";
if($email!=NULL){
    mail($to,$subject,$txt,$headers);
}
//redirect
header("Location:index.html");
?>
