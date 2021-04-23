<?php 

    $host = 'localhost';
    $user = 'root';
    $pass = '';
    $db = 'nhc';

    //database connection
    $conn = mysqli_connect($host,$user,$pass,$db);

    if(!$conn){
	die('error in db' . mysqli_error($conn));
}

    // Remove booking details
    $id = $_GET['id'];
    $sql = "DELETE FROM appointment WHERE id = $id";

    if(mysqli_query($conn, $sql)){    
	header('location: adminPage.php');
    }else{
	echo mysqli_error($conn);
}

?>