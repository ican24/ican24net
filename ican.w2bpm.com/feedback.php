<?
$errors = array();
$form_data = array();
$_POST=$_REQUEST;
if ($_POST['name'] == ""){
	$errors['name'] = 'Enter your name';
}
/*
if ($_POST['phone'] == ""){
	$errors['name'] = 'Enter your phone number';
}
*/
if (!empty($errors)){
	$form_data['success'] = false;
	$form_data['errors']  = $errors;
}
else{
	$message = "<h4>Request from webiste ".$_SERVER['HTTP_HOST']."</h4><p>Call Back form</p>";
	foreach($_POST as $k => $v)$message .= $k.": ".$v."<br />";
	$from_name="iCAN Reporting";
	$from_mail="report@ican24.net";
	$replyto="report@ican24.net";

	$headers = "From: ".$from_name." <".$from_mail.">\r\n";
	$headers .= "Reply-To: ".$replyto."\r\n";
	$headers .= 'MIME-Version: 1.0' . "\r\n";
	$headers .= 'Content-type: text/html; charset=utf8' . "\r\n";
	if (mail('artak.hovsepian@gmail.com', 'Request from iCAN webiste '.$_SERVER['HTTP_HOST'], $message, $headers)) {
		$form_data['success'] = true;
		$form_data['posted'] = 'Thank you for your request! Please stay in contact, Our manager will contact with you as soon as possible!';
	}
   else{
   	$errors['name'] = 'Mailing Error';
	}
}
echo json_encode($form_data);
