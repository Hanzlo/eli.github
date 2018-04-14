<?php
$field_name = $_POST['client_name'];
$field_email = $_POST['client_email'];
$field_phone = $_POST['client_phone'];
$field_message = $_POST['client_message'];


if(isset($_POST["client_name"]) && (strlen($_POST["client_name"]) > 0) && isset($_POST["client_email"]) && (strlen($_POST["client_email"]) > 0) && isset($_POST["client_message"])  && isset($_POST["client_message"])&& isset($_POST["client_phone"])  && isset($_POST["client_phone"])){

//ADD YOUT EMAIL ADDRES HERE 
$mail_to = 'youremail@gmail.com';
	
	
	
$subject = 'New message from '.$field_name;
$body_message = 'Message sent by: '.$field_name."\n";
$body_message .= 'E-mail: '.$field_email."\n";
$body_message .= 'Phone: '.$field_phone."\n";
$body_message .= 'Message: '.$field_message;

$headers = 'From: '.$field_email."\r\n";
$headers .= 'Reply-To: '.$field_email."\r\n";

$mail_status = mail($mail_to, $subject, $body_message, $headers);
}
else { ?>
	<script language="javascript" type="text/javascript">
		alert('Poruka nije poslana, molimo ispunite sva polja');
		window.location = 'contact.php';
	</script>
<?php
}
if ($mail_status) { ?>
	<script language="javascript" type="text/javascript">
		alert('Hvala na poslanoj poruci. Kontaktirati ćemo vas uskoro.');
		window.location = 'contact.php';
	</script>
<?php
}

?>