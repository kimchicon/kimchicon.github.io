<?php
// Check for empty fields
if(empty($_POST['name'])  		||
   empty($_POST['email']) 		||
   empty($_POST['phone']) 		||
   empty($_POST['message'])	||
   !filter_var($_POST['email'],FILTER_VALIDATE_EMAIL))
   {
	echo "No arguments Provided!";
	return false;
   }

$name = $_POST['name'];
$email_address = filter_var($_POST['email'], FILTER_VALIDATE_EMAIL);
if ($email === FALSE) {
    echo 'Invalid email';
    exit(1);
}
$phone = $_POST['phone'];
$message = $_POST['message'];


// Create the email and send the message
$to = 'nababora77@gmail.com'; // Add your email address inbetween the '' replacing yourname@yourdomain.com - This is where the form will send a message to.
$email_subject = "김치콘 문의:  $name";
$email_body = "김치콘 사이트에서 보낸 문의 메일이에요 :)\n\n"."세부내용:\n\n이름: $name\n\n이메일: $email_address\n\n연락처: $phone\n\n하고싶은 말:\n$message";
$headers = "From: noreply@kimchicon.org\n"; // This is the email address the generated message will be from. We recommend using something like noreply@yourdomain.com.
$headers .= "Reply-To: $email_address";
mail($to,$email_subject,$email_body,$headers);
return true;
?>
