<?php

require_once('../database/connection.php');
session_start();

    if(isset($_POST['btnlogin']))
    {
        if(empty($_POST['email']) || empty($_POST['password']))
        {
            header("location:login.php?Empty= Please Fill in the Blanks!");
        }
        else
        {   
    
            $query = "select * from useraccount where email = '".$_POST['email']."' and password = '".$_POST['password']."'";
            $result=mysqli_query($conn,$query);

            if(mysqli_fetch_assoc($result))
            {
                $_SESSION['email'] = $_POST['email'];
                header("location: adminDoc.php");
            }
            else
            {
                header("location: login.php?Invalid= Please Enter correct Email and the Password");
            }
        }
    }
   

?>
    