<?php 
$pageTitle = "contact";
include "header.php";

?>
<?php

if ($_SERVER["REQUEST_METHOD"] == "POST"){
	$name = trim($_POST["name"]);
	$last = trim($_POST["last"]);
	$email = trim($_POST["email"]);
	$body = trim($_POST["body"]);
    
    $email_body = "";
	$email_body = $email_body . "Name: " . $name . " " . $last . "\n";
	$email_body = $email_body . "Email: " . $email . "\n";
	$email_body = $email_body . "Message: " . $body;
    //$_SERVER[""];
    
    if($name == ""){
		echo "You must enter your name.";
		exit;
	}


    if($email == ""){
		echo "You must enter your email.";
		exit;
    }
   
    if($body == ""){
		echo "You must enter your message.";
		exit;
    }    	
	foreach( $_POST as $value ){
	if( stripos($value,'Content-Type:') !== FALSE ){
		echo "There was a problem with the information you provided.";
		exit;
		}
	}
	
	if($_POST["billingAddress"] != ""){
		echo "There was a problem with your submission. Please try again.";
		exit;
	}
	
	require_once("PHPMailer-master/class.phpmailer.php");
	require 'PHPMailer-master/PHPMailerAutoload.php';
    $mail = new PHPMailer();
	
	if(!$mail->ValidateAddress($email)){
		echo "You must include a valid email address.";
		exit;
	}
	
	
	//SMTP needs accurate times, and the PHP time zone MUST be set
	//This should be done in your php.ini, but this is how to do it if you don't have access to that
	date_default_timezone_set('America/Dawson_Creek');

	
	$mail = new PHPMailer;

    $mail->CharSet = 'UTF-8';

	$mail->IsSMTP();

	$mail->SMTPDebug = 2;

	$mail->Debugoutput = 'html';

	$mail->Host = 'smtp.gmail.com';
	// use
	// $mail->Host = gethostbyname('smtp.gmail.com');
	// if your network does not support SMTP over IPv6
    $mail->addAddress("rparcell83@gmail");       

	$mail->Port = 587;

	$mail->SMTPSecure = 'tls';

	$mail->SMTPAuth = true;

	$mail->Username = "rparcell83@gmail.com";

	$mail->Password = "Alexisis1!";
	
	//$mail->addReplyTo = "";

	$mail->setFrom($email, $name);

	$mail->Subject = 'Customer Inqueries: ideaByKari.com';

	//Read an HTML message body from an external file, convert referenced images to embedded,
	//convert HTML into a basic plain-text alternative body
	/*$mail->AltBody($body);*/
	$mail->msgHTML($body);
	//send the message, check for errors
	if (!$mail->send()) {
		echo "You have failed! The email was not sent!" . $mail->ErrorInfo;
	} else {
		echo "Message sent!";
		header("Location: contact.php?status=thanks");
	}
    echo var_dump($mail);
	
    
    exit;	
	}
?>

<?php if(isset($_GET["status"]) AND $_GET["status"] == "thanks"){ ?>
		<div id = "thankYou">
			<h1>Thank You!</h1>
			<h2>Your submission has been forwarded</h2>
			<p>We will be in touch.</p>
		</div>
	
	<?php } else { ?>
	<form action="contact.php?status=thanks" method="POST">
		<h1 id="email">Email Us</h1>
		
		<input type="text" name="email" placeholder="Email Address"/></br>
		<input type="text" name="name"placeholder="First Name"/></br>
		<input type="text" name="last"placeholder="Last Name"/></br>
		<textarea type="text" name="body" cols="70" rows="10" placeholder="Your Message Here"></textarea></br>
		<button type="submit" name="submit">Send</button>
		
	</form>
<?php
	};
include "footer.php";
?>