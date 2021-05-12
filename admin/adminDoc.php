<?php include '../database/connection.php'?>
<?php
    session_start();
    if(!isset($_SESSION['email'])){
        header("location: login.php");
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
 
 <title>ADMIN PANEL</title>

  <!-- Custom fonts for this template-->
  <link href="../vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
  
  <!-- Custom styles for this template-->
  <link rel="stylesheet" type="text/css" href="../css/sb-admin-2.min.css"/>

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
        <img src="../images/Logo/NH Logo white colour.png" width="80px" height="80px"></img>
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

        <!-- Retrieve Booking Details | DOCTOR,ADMIN-->
        <center><br><h3>Patient Bookings</h3><br>
									<!-- <table class="table" style = "width: 90%" border="1" > -->
                  <table id = "booking" style = "width: 90%" border="1" >
									<thead class="thead-dark">
									<tr class="bg-primary">
										<th>ID</th>
										<th>NAME</th>
										<th>EMAIL</th>
										<th>PHONE</th>
										<th>AGE</th>
										<th>GENDER</th>
										<th>TREATMENT</th>
										<th>PATIENT</th>
                    <th>DATE</th>
                    <th>TIME</th>
										</tr></center></thead>

									<?php  

									$i = 1;
									$sql = "select * from appointment";
									$run = $conn -> query($sql);
									if($run -> num_rows > 0){
									while($row = $run -> fetch_assoc()){
									$id = $row['id'];
									?>

									<tr>
									
										<td><?php echo $i++ ?></td>
										<td><?php echo $row['name'] ?></td>
										<td><?php echo $row['email'] ?></td>
										<td><?php echo $row['phone'] ?></td>
										<td><?php echo $row['age'] ?></td>
										<td><?php echo $row['gender'] ?></td>
										<td><?php echo $row['treatment'] ?></td>
										<td><?php echo $row['patient'] ?></td>
                    <td><?php echo $row['date'] ?></td>
                    <td><?php echo $row['time'] ?></td>
										
									</tr>
									<?php     
  									   
  									?> 

									<?php  

									}
								}

								?>

								</table></center>

    </div>
    <!-- End of Content Wrapper -->

  </div>
  <!-- End of Page Wrapper -->

  <!-- Scroll to Top Button -->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>

  <!-- Bootstrap core JavaScript-->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

</body>

</html>
