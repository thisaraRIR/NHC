<?
$treatment  = $_REQUEST["treatment"];
$patient  = $_REQUEST["patient"];
$date = $_REQUEST["date"];
$name  = $_REQUEST["name"];
$email = $_REQUEST["email"];
$phone  = $_REQUEST["phone"];
$age   = $_REQUEST["age"];
$to    = "thisara@reachitright.net"; // ENTER YOUR EMAIL ADDRESS
if (isset($email) && isset($name) && isset($age)) {
    $email_subject = "$name sent you a message via YOUR SITE NAME"; // ENTER YOUR EMAIL SUBJECT
		$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=iso-8859-1" . "\r\n";
$headers .= "From: ".$name." <".$email.">\r\n"."Reply-To: ".$email."\r\n" ;
$age     = "Department: $treatment <br/> Patient: $patient <br/> Appointment Date: $date <br/> Patient Name: $name <br/> Patient Email: $email <br/> Patient Phone Number: $phone <br/> Message: $msg";
	
   $mail =  mail($to, $email_subject, $age, $headers);
  if($mail)
	{
		echo 'success';
	}

else
	{
		echo 'failed';
	}
}

?>