<? php

$name = $_POST['name'];
$email = $_POST['email'];
$feedback = $_POST['feedback'];

$email_from = 'sketchcompendium@gmail.com'

$email_subject = 'New Feedback Submission'

$email_body = "User Name: $name.\n".
				"User Email: $email.\n".
				"Feedback Submission: $feedback.\n";

$to = 'abdussamad2609@gmail.com';

$headers = "From: $email_from \r\n";

$headers .= "Reply-To: $email \r\n";

mail($to, $email_subject, $email_body, $headers);


header("Location: contact.html");

?>