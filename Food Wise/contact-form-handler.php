<? php
	$name = $_POST['name'];
	$visitor_email = $_POST['email'];
	$message = $POST['message'];
	
	$email_from = 'Food Wise website contact form';
	$email_subject = "New Form Submission";
	$email_body = "User Name: $name.\n".
	"User Email: $visitor_email.\n".
	"User Message: $message.\n";
	
	$to: "zeinakittaneh@yahoo.com";
	$headers = "From: $email_from \r\n";
	$headers .= "Reply-To: $visitor_email \r\n";
	
	mail($to, $email_subject, $email_body, $headers);
	header("Location: Contact.html");
	
	
?>