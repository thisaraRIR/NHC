<?php 

    $host = 'localhost';
    $user = 'root';
    $pass = '';
    $db = 'nhc';

    $conn = mysqli_connect($host,$user,$pass,$db);

    if(!$conn){
      die('error in db' . mysqli_error($conn));
    }else{

    $id = $_GET['id'];
	$sql = "select * from appointment where id = $id";
		$run = $conn -> query($sql);
		if($run -> num_rows > 0){
			while($row = $run -> fetch_assoc()){
				$name = $row['name'];
				$email = $row['email'];
				$phone = $row['phone'];
				$date = date('Y-m-d', strtotime($row['date']));
				$age = $row['age'];
				$gender = $row['gender'];
				$treatment = $row['treatment'];
                $patient = $row['patient'];
				$time = $row['time'];
		}
	}
}

?>

<!DOCTYPE html>

<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <!-- Jquery Calendar -->
	<link rel="stylesheet" href="http://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
	<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
	<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
 

  <!-- GOOGLE FONTS -->
	<link href="https://fonts.googleapis.com/css2?family=Lustria&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Alex+Brush&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap" rel="stylesheet">

	<!-- BOOTSTRAP CSS -->
	<link href="css/bootstrap.min.css" rel="stylesheet">

	<!-- FONT ICONS -->
	<link href="https://use.fontawesome.com/releases/v5.11.0/css/all.css" rel="stylesheet" crossorigin="anonymous">
	<link href="css/flaticon.css" rel="stylesheet">

	<!-- PLUGINS STYLESHEET -->
	<link href="css/menu.css" rel="stylesheet">
	<link id="effect" href="css/dropdown-effects/fade-down.css" media="all" rel="stylesheet">
	<link href="css/tweenmax.css" rel="stylesheet">
	<link href="css/magnific-popup.css" rel="stylesheet">
	<link href="css/owl.carousel.min.css" rel="stylesheet">
	<link href="css/flexslider.css" rel="stylesheet">
	<link href="css/owl.theme.default.min.css" rel="stylesheet">
	<!-- <link href="css/jquery.datetimepicker.min.css" rel="stylesheet"> -->

	<!-- TEMPLATE CSS -->
	<!-- <link href="css/gold-theme.css" rel="stylesheet"> -->
	<link href="css/pink-theme.css" rel="stylesheet">
	<!-- <link href="css/rose-theme.css" rel="stylesheet"> -->
	<!-- <link href="css/silk-theme.css" rel="stylesheet"> -->

	<!-- RESPONSIVE CSS -->
	<link href="css/responsive.css" rel="stylesheet">

 <title>ADMIN EDIT PAGE</title>

  <!-- Custom fonts for this template-->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
  
  <!-- Custom styles for this template-->
  <link rel="stylesheet" type="text/css" href="css/sb-admin-2.min.css"/>

  <!-- Table styles -->
  <style>
  #booking {
    font-family: Arial, Helvetica, sans-serif;
    border-collapse: collapse;
    width: 100%;
  }

  #booking td, #booking th {
    border: 1px solid #ddd;
    padding: 8px;
  }

  #booking tr:nth-child(even){background-color: #f2f2f2;}

  #booking tr:hover {background-color: #ddd;}

  #booking th {
    padding-top: 12px;
    padding-bottom: 12px;
    text-align: left;
    background-color: #2d4771;
    color: white;
  }

  </style>

</head>

<body id="page-top">

  <!-- Page Wrapper -->
  <div id="wrapper">

    <!-- Sidebar -->
    <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

      <!-- Sidebar - Brand -->
      <a class="sidebar-brand d-flex align-items-center justify-content-center" href="adminPanel.php">
        <div class="sidebar-brand-icon">
        <img src="images/Logo/NH Logo white colour.png" width="80px" height="80px"></img>
        </div>
      </a>

      <!-- Divider -->
      <hr class="sidebar-divider my-0">

      <!-- Nav Item - Dashboard -->
      <li class="nav-item">
        <a class="nav-link" href="adminPanel.php">
          <i class="<i class=fas fa-user-cog></i>"></i>
          <span>NHC ADMIN PANEL</span></a>
      </li>

      <!-- Divider -->
      <hr class="sidebar-divider">

      <!-- Nav Item - Utilities Collapse Menu -->
      <li class="nav-item">
        <a class="nav-link collapsed" href="adminPanel.php">
          <i class="fa fa-calendar"></i>
          <span>Dashboard</span>
        </a>
      </li>

      <li class="nav-item">
        <a class="nav-link collapsed" href="AdminPage.php">
          <i class="fa fa-calendar"></i>
          <span>Admin</span>
        </a>
      </li>

    </ul>
    <!-- End of Sidebar -->

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

      <!-- Main Content -->
      <div id="content">

        <!-- Topbar -->
        <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

          <!-- Sidebar Toggle (Topbar) -->
          <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
            <i class="fa fa-bars"></i>
          </button>

          <!-- Topbar Navbar -->
          <ul class="navbar-nav ml-auto">

            <!-- Nav Item - User Information -->
            <li class="nav-item dropdown no-arrow">
              <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <span class="mr-2 d-none d-lg-inline text-gray-600 small">Admin</span>
                <img class="img-profile rounded-circle" src="images/Logo/NH Logo icon brand.jpg">
              </a>
              <!-- Dropdown - User Information -->
              <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                <a class="dropdown-item" href="login.php" data-toggle="modal" data-target="#logoutModal">
                  <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                  Logout
                </a>
              </div>
            </li>

          </ul>

        </nav>
        <!-- End of Topbar -->

        <!-- Modify Booking Details | ADMIN -->
        <center><br><h3>Update Patient Bookings</h3><br>
        

  </div>
  <!-- End of Page Wrapper -->

  <!-- Scroll to Top Button -->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>

  <!-- Logout Modal-->
  <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
        <div class="modal-footer">
          <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
          <a class="btn btn-primary" href="login.php">Logout</a>
        </div>

      </div>
    </div>
  </div>

  <!-- Bootstrap core JavaScript-->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>


  <div class="row">


<!-- BOOKING FORM -->

<div class="col-md-7 col-lg-8" style = "margin: 0 auto";>
    <div class="form-holder pc-15 mb-40">
        <form action="" method="POST" id = "bookingDetails" >
        <!-- action="php/bookingForm.php" autocomplete=off -->

            <div class="form-row">
            <div class="form-group col-md-6">
                <label for="inputID">ID*</label>
                <input type="text" name="id" class="form-control id" value = "<?php echo $id; ?>">
            </div>
            </div>

            <div class="form-row">
            <div class="form-group col-md-6">
                <label for="inputName">Name*</label>
                <input type="text" name="name" class="form-control name" value = "<?php echo $name; ?>">
            </div>

            <div class="form-group col-md-6">
                <label for="inputEmail">Email*</label>
                <input type="email" name="email" class="form-control email" value = "<?php echo $email; ?>">
            </div>
            </div>

            <div class="form-row">
            <div class="form-group col-md-6">
                <label for="inputPhone">Phone*</label>
                <input type="tel" name="phone" class="form-control phone" value = "<?php echo $phone; ?>">
            </div>

            <div class="form-group col-md-6">
                <label for="inputAge">Age*</label>
                <input type="age" name="age" class="form-control age" value = "<?php echo $age; ?>">
            </div>
            </div>

            <div class="form-row">
				<div class="form-group col-md-12">
					<label for="inputDate">Appointment Date*</label>
				    <input id="date" type="text" name="date" class="form-control date" value = "<?php echo $date; ?>" disabled>
				</div>
		    </div>

            <div class="form-row">
            <div class="form-group col-md-12">
                <label for="inputAge">Time*</label>
                <input type="time" name="time" class="form-control time" value = "<?php echo $time; ?>">
                </div>
            </div>

            
            <div class="form-row">
                <!--Form Select-->
                <div class="form-group col-md-12">
                    <label for="inputAge">Gender*</label>
                    <select id="inlineFormCustomSelect4" name="gender" class="custom-select treatment">
                        
                        <option value="">Gender*</option>
                        <option value = "Male" 
                            <?php 
                                if($gender == 'Male'){
                                    echo "selected";
                                }
                            ?>
                            >Male
                        </option>

                        <option value = "Female" 
                            <?php 
                                if($gender == 'Female'){
                                    echo "selected";
                                }
                            ?>
                            >Female
                        </option>

                        <option value = "Other" 
                            <?php 
                                if($gender == 'Other'){
                                    echo "selected";
                                }
                            ?>
                            >Other
                        </option>

                    </select>
                </div>
            </div>
            <div class="form-row">
                <!-- Form Select -->
                <div class="form-group col-md-12">
                    <label for="inputAge">Treatment For*</label>
                    <select id="inlineFormCustomSelect1" name="treatment" class="custom-select treatment">
                        <option value="">Treatment For*</option>

                        <option value = "Cancer" 
                            <?php 
                                if($treatment == 'Cancer'){
                                    echo "selected";
                                }
                            ?>
                            >Cancer
                        </option>
                        
                        <option value = "Diabetes" 
                            <?php 
                                if($treatment == 'Diabetes'){
                                    echo "selected";
                                }
                            ?>
                            >Diabetes
                        </option>

                    </select>
                </div>
            </div>
            <div class="form-row">
                <!-- Form Select -->
                <div class="form-group col-md-12">
                    <label for="inputAge">Have You Visited Us Before?*</label>
                    <select id="inlineFormCustomSelect3" name="patient" class="custom-select patient" value = "<?php echo $patient; ?>">
                        <option value="">Have You Visited Us Before?*</option>

                        <option value = "New Patient" 
                            <?php 
                                if($patient == 'New Patient'){
                                    echo "selected";
                                }
                            ?>
                            >New Patient
                        </option>

                        <option value = "Returning Patient" 
                            <?php 
                                if($patient == 'Returning Patient'){
                                    echo "selected";
                                }
                            ?>
                            >Returning Patient
                        </option>

                        <option value = "Other" 
                            <?php 
                                if($patient == 'Other'){
                                    echo "selected";
                                }
                            ?>
                            >Other
                        </option>

                    </select>
                </div>
            </div>

            <div class="form-group col-md-6">  
                <input type="submit" name="update" value="Edit"/>
            </div>

        </form>
    </div>
</div>

</body>

</html>

<?php  

	if(isset($_POST['update'])){
    $id = $_POST['id'];
		$name = $_POST['name'];
		$email = $_POST['email'];
		$phone = $_POST['phone'];
    // $date = $_POST['date'];
		$age = $_POST['age'];
		$gender = $_POST['gender'];
		$treatment = $_POST['treatment'];
		$patient = $_POST['patient'];
    $time = $_POST['time'];

		$qry = "UPDATE appointment SET name = '$name', email = '$email', phone = '$phone', age = '$age', gender = '$gender', treatment = '$treatment', patient = '$patient', time = '$time'  WHERE id = $id";
	}

?>