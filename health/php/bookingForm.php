<h1 style="font-size:40px; color:white; text-align: center; background-color: white">

<h3 style="font-size:40px; color:black; text-align: center; background-color: white">

<?php
// $treatment  = $_REQUEST["treatment"];
// $patient  = $_REQUEST["patient"];
// $date = $_REQUEST["date"];
// $name  = $_REQUEST["name"];
// $email = $_REQUEST["email"];
// $phone  = $_REQUEST["phone"];
// $age   = $_REQUEST["age"];
// $to    = $email; // ENTER YOUR EMAIL ADDRESS
// if (isset($email) && isset($name) && isset($age)) {
//     $email_subject = "NHC Appointment Booked"; // ENTER YOUR EMAIL SUBJECT
// 		$headers = "MIME-Version: 1.0" . "\r\n";
// $headers .= "Content-type:text/html;charset=iso-8859-1" . "\r\n";
// $headers .= "From: ".$name." <".$email.">\r\n"."Reply-To: ".$email."\r\n" ;
// $age    = "Department: $treatment <br/> Patient: $patient <br/> Appointment Date: $date <br/> Patient Name: $name <br/> Patient Email: $email <br/> Patient Phone Number: $phone <br/> Message: $msg";
	
//    $mail =  mail($to, $email_subject, $age, $headers);
//   if($mail)
// 	{
// 		echo 'success';
// 	}

// else
// 	{
// 		echo 'failed';
// 	}
// }

/* Send data to the database 'nhc'*/

//database connection
include ('../database/connection.php');

//INSERT data into mysql



$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$date = date('Y-m-d', strtotime($_POST['date']));
$age = $_POST['age'];
$gender = $_POST['gender'];
$treatment = $_POST['treatment'];
$patient = $_POST['patient'];
$time = $_POST['time'];


$sql = "INSERT INTO appointment(name, email, phone, date, age, gender, treatment, status, time) VALUES('$name', '$email', '$phone', '$date', '$age', '$gender', '$treatment', '$patient', '$time')";

if(mysqli_query($conn, $sql)){
    $_SESSION['message1'] = "<h1>Awesome!</h1>"; 
    $_SESSION['message2'] = "<h3>Your booking has been confirmed.</h3>";
    echo '<img  src="../images/Logo/success.jpg" width="400" height="400">';
    echo '<div class = "msg"> '.$_SESSION['message1'].'</div>';
    echo '<div class = "msg"> '.$_SESSION['message2'].'</div>';
    // echo "<h1>Thank you for booking</h1>";
    // $_SESSION['status'] = "Thank you for booking";
    // header("Location: ../booking.php");
}else {
    echo "Error: " .$sql . "<br>" . mysqli_error($conn);
}

?>
