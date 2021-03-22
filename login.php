<!DOCTYPE html>

<?php

$emailErr = $passErr  = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (empty($_POST["email"])) {
      $emailErr = "Email is required";
    } else {
      $email = test_input($_POST["email"]);
    }
    
    if (empty($_POST["password"])) {
      $passErr = "Password is required";
    } else {
      $password = test_input($_POST["password"]);
    }
      
  }

if(isset($_POST['submit'])){
    $email = $_POST['email'];
    $pass = $_POST['password'];
    if($email=='admin@gmail.com' && $pass=='admin' || $email=='kasuni@gmail.com' && $pass=='kasuni'){
        header('Location: adminPanel.php?redirect=adminPanel.php');
       
    }else{
        $_SESSION['message'] = "Invalid Login!!!";
        echo '<div class = "msg"> '.$_SESSION['message'].'</div>';
        unset($_SESSION['message']);
        
    }
}

function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
  }

?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>LOGIN</title>

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">
    <style>
    
    .error {
        color: #FF0000;
        font-size: 1em;
        text-align: center;
        padding: 10px;
    }

    .msg {
    border-radius: 5px; 
    color: red; 
    font-size: 2.0em;
    background: #d5ded7; 
    width: 100%;
    text-align: center;
  }

    </style>

</head>
<body>

<!-- Admin login Form -->
<!-- action="adminPanel.php" -->

    <form name="logForm" action="" method="post">
    <div style="background-image: url('images/about-8.jpg'); background-size: cover; height: 100vh;" >
    <br><br><br><div class="container">

    <!-- Outer Row -->
    <div class="row justify-content-center">
      <div class="col-xl-10 col-lg-12 col-md-9">
        <div class="card o-hidden border-0 shadow-lg my-5">
          <div class="card-body p-0">
            <!-- Nested Row within Card Body -->
            <div class="row" >
              <div class="col-lg-6 d-none d-lg-block bg-login-image"><img src="images/Logo/NH Logo brand colour.jpg" style="width:470px;height:500px;"/></div>
              <div class="col-lg-6">
                <div class="p-5">
                  <div class="text-center">
                    <br><h1 class="h4 text-gray-900 mb-4"><b>LOGIN</b></h1><hr><br>
                  </div>


                  <div class="form-group">
                      <input 
                        type="text" 
                        name="email"
                        placeholder="Email-address*"
                        class="form-control form-control-user" 
                        id="exampleInputEmail" 
                        pattern = "[a-zA-Z0-9.-_]{1,}@[a-zA-Z.-]{2,}[.]{1}[a-zA-Z]{2,}"
                        aria-describedby="emailHelp" 
                        >
                        <span class="error"><?php echo $emailErr;?></span>
                    </div>

                    <div class="form-group">
                      <input 
                        type="password" 
                        name="password"
                        class="form-control form-control-user" 
                        id="exampleInputPassword" 
                        placeholder="Password*" 
                        >
                        <span class="error"><?php echo $passErr;?></span>
                    </div>

                    <div class="form-group">
                      <div class="custom-control custom-checkbox small">
                        <input type="checkbox" checked="checked" class="custom-control-input" id="customCheck">
                        <label class="custom-control-label" for="customCheck">Remember Me</label>
                      </div>
                    </div>

                    <input type="submit" value="Sign In" name="submit" class="btn btn-primary btn-lg btn-block">
                    </a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>

    </div>
    </form>
</body>
</html>