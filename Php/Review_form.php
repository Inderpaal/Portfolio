<?php

if(isset($_POST['submit'])) {

    if($_SERVER['REQUEST_METHOD'] == 'POST') {

$name = $_POST['name'];
$email= $_POST['email'];
$message= $_POST['message'];
$mobile= $_POST['mobile'];

$to = "inpalsin@gmail.com";
$subject = "You recived a Feedback for your website!";
$txt ="Name = ". $name . "\r\n  Email = " . $email . "\r\n Message =" . $message . "\r\n Phone Number =" . $mobile;
$headers = "From: noreply@yoursite.com" . "\r\n".
"CC: somebodyelse@example.com";
if($email!="")
{
    mail('inpalsin@gmail.com',$subject,$txt,$headers);
}
header('Location:Thankyou.html');
}
}
?>
