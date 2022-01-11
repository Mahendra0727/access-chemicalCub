<?php
//get data from form  

$name = $_POST['fname'];
$name = $_POST['lname']
$email= $_POST['email'];
$message= $_POST['message'];
$to = "mk8223457@gmail.com@mail.com";
$subject = "Mail From website";
$txt ="First-Name = ". $fname . "\r\n $ Email = " . $email . "\r\n Message =" . $message ."\r\n Last-Name =" .lname;
$headers = "From: noreply@access-chemical-club.com" . "\r\n" .
"CC: mk8223457@gmail.com";
if($email!=NULL){
    mail($to,$subject,$txt,$headers);
}
//redirect
header("Location:thankyou.html");
?>