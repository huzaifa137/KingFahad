<?php 
$errors = '';
$myemail = 'huzaifabukenya227@gmail.com';//<-----Put Your email address here.
if(empty($_POST['name'])  || 
   empty($_POST['email']) ||  
   empty($_POST['message']))
{
    $errors .= "\n Error: all fields are required";
}

echo $name = $_POST['name']; 
echo $email_address = $_POST['email']; 
echo $message = $_POST['message']; 

if (!preg_match(
"/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$/i", 
$email_address))
{
    $errors .= "\n Error: Invalid email address";
}

if( empty($errors))
{
	$to = $myemail; 
	$email_subject = "King Fahad Primary School Message form Website: ";
	$email_body = "You have received a new message. ".
	"Here are the details:\n Name: $name \n Email: $email_address\n MESSAGE: $message"; 
	
	$headers = "From: $myemail\n"; 
	$headers .= "Reply-To: $email_address";
	
	mail($to,$email_subject,$email_body,$headers);
;
;
	header('Location: contact.html');
} 
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd"> 
<html>
<head>
	<title>Contact form handler</title>
</head>

<body>
<!-- This page is displayed only if there is some error -->
<?php
echo nl2br($errors);
?>


</body>
</html>