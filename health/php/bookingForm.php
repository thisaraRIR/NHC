<h1 style="font-size:40px; color:white; text-align: center; background-color: white">

<h3 style="font-size:40px; color:black; text-align: center; background-color: white">

<?php

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


$sql = "INSERT INTO appointment(name, email, phone, date, age, gender, treatment, status) VALUES('$name', '$email', '$phone', '$date', '$age', '$gender', '$treatment', '$patient')";

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
