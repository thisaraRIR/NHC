<?php
include 'database/connection.php';
?>

<!-- Insert Data to database -->
<?php

if (isset($_POST['book'])) {
	$name = $_POST['name'];
	$email = $_POST['email'];
	$phone = $_POST['phone'];
	$date = date('Y-m-d', strtotime($_POST['date']));
	$age = $_POST['age'];
	$gender = $_POST['gender'];
	$treatment = $_POST['treatment'];
	$patient = $_POST['patient'];
	// $time = $_POST['time'];

	$sql = "INSERT INTO appointment(name, email, phone, date, age, gender, treatment, patient) VALUES('$name', '$email', '$phone', '$date', '$age', '$gender', '$treatment', '$patient')";

	if (mysqli_query($conn, $sql)) {
		// $_SESSION['message1'] = "<h1>Awesome!</h1>"; 
		// $_SESSION['message2'] = "<h3>Your booking has been confirmed.</h3>";
		// $_SESSION['message'] = "Your Booking Has Been Confirmed...";
		// header('Location: bookingSuccess.php?redirect=bookingSuccess.php');
	} else {
		echo mysqli_error($conn);
	}
}

?>


<!DOCTYPE html>
<!-- Spa Magic - Spa & Beauty Salon Landing Page Template design design by Jthemes (http://www.jthemes.net) -->
<!--[if lt IE 7 ]><html class="ie ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]><html class="ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!-->
<!--Booking php File-->
<html lang="en">

<head>

	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<meta name="author" content="Jthemes" />
	<meta name="description" content="Spa Magic - Spa, Hair & Beauty Salon Landing Page Template" />
	<meta name="keywords" content="Jthemes, Beauty, Cosmetic, Girly, Health, Healthy Care, Massage, Make Up, Salon, Spa, Skincare, Wellness">
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />

	<!-- Jquery Calendar -->
	<link rel="stylesheet" href="http://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
	<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
	<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>

	<!-- SITE TITLE -->
	<title>Nature's Healing | Booking</title>

	<!-- FAVICON AND TOUCH ICONS -->
	<link rel="shortcut icon" href="images/Logo/NH Logo.png" type="image/x-icon">
	<link rel="icon" href="images/Logo/NH Logo.png" type="image/x-icon">
	<link rel="apple-touch-icon" sizes="152x152" href="images/Logo/NH Logo.png">
	<link rel="apple-touch-icon" sizes="120x120" href="images/Logo/NH Logo.png">
	<link rel="apple-touch-icon" sizes="76x76" href="images/Logo/NH Logo.png">
	<link rel="apple-touch-icon" href="images/Logo/NH Logo.png">
	<link rel="icon" href="images/Logo/NH Logo.png" type="image/x-icon">

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


	<!---->
	<!-- <link href="./css/jquery.datetimepicker.min.css" rel="stylesheet">
		<script src="./js/jquery.datetimepicker.full.js"></script> -->
	<script src="./js/jquery.appear.js"></script>
	<script>

	</script>

	<style>
		.msg {
			margin: 30px auto;
			padding: 10px;
			border-radius: 5px;
			color: #3c763d;
			background: #dff0d8;
			border: 1px solid #3c763d;
			width: 50%;
			text-align: center;
		}
	</style>

</head>

<body>

	<!-- PRELOADER SPINNER
		============================================= -->
	<div id="loader-wrapper">
		<div id="loading">
			<div class="cssload-loader">
				<div class="fancy-spinner">
					<div class="ring"></div>
					<div class="ring"></div>
					<div class="dot"></div>
				</div>
			</div>
		</div>
	</div>




	<!-- PAGE CONTENT
		============================================= -->
	<div id="page" class="page">




		<!-- HEADER
			============================================= -->
		<header id="header" class="header white-menu navbar-dark">
			<div class="header-wrapper">


				<!-- MOBILE HEADER -->
				<div class="wsmobileheader clearfix">
					<span class="smllogo"><img src="images/Logo/NH-web-logo-gold.png" width="170" height="50" alt="mobile-logo" /></span>
					<a id="wsnavtoggle" class="wsanimated-arrow"><span></span></a>
				</div>


				<!-- NAVIGATION MENU -->
				<div class="wsmainfull menu clearfix">
					<div class="wsmainwp clearfix">


						<!-- LOGO IMAGE -->
						<!-- For Retina Ready displays take a image with double the amount of pixels that your image will be displayed (e.g 340 x 100 pixels) -->
						<div class="desktoplogo"><a href="#booking-page" class="logo-black"><img src="images/Logo/NH-web-logo-gold.png" width="170" height="50" alt="header-logo"></a></div>
						<div class="desktoplogo"><a href="#booking-page" class="logo-white"><img src="images/Logo/NH-web-logo-gold.png" width="170" height="50" alt="header-logo"></a></div>


						<!-- MAIN MENU -->
						<nav class="wsmenu clearfix">
							<ul class="wsmenu-list">


								<!-- SIMPLE NAVIGATION LINK -->
								<li class="nl-simple" aria-haspopup="true"><a href="demo-4.html">Home</a></li>

								<li aria-haspopup="true"><a href="about.html">About Us</a></li>
								<!-- DROPDOWN MENU -->
								<!-- <li aria-haspopup="true"><a href="#">Pages <span class="wsarrow"></span></a>
						        		<div class="wsmegamenu clearfix halfmenu">
						              		<div class="container-fluid">
						                		<div class="row"> -->

								<!-- Links -->
								<!-- <ul class="col-lg-6 link-list">	
									                    <li class="fst-li"><a href="about.html">About Us</a></li>					             
									                    <li><a href="services.html">Our Services</a></li>	
									                    <li><a href="service-details.html">Service Details</a></li>
									                    <li><a href="gallery.html">Our Gallery</a></li>
									                    <li><a href="team.html">Our Experts</a></li>
									                    <li><a href="gift-cards.html">Gift Cards</a></li>
									                </ul> -->

								<!-- Links -->
								<!-- <ul class="col-lg-6 link-list">							                  
									                    <li class="fst-li"><a href="pricing.html">Pricing Plans</a></li>	
									                    <li><a href="booking.html">Booking Form</a></li>
									                    <li><a href="faqs.html">FAQs</a></li>					      
									                    <li><a href="terms.html">Terms & Privacy</a></li>
									                    <li><a href="contacts.html">Contacts</a></li>
									                </ul>

						                		</div>
						              		</div>
						            	</div> -->
								<!--</li>-->
								<!-- END DROPDOWN MENU -->


								<!-- MEGAMENU -->
								<li aria-haspopup="true"><a href="#">Treatments<span class="wsarrow"></span></a>
									<div class="wsmegamenu w-70 clearfix">
										<div class="container">
											<div class="row">

												<!-- MEGAMENU LINKS -->
												<ul class="col-md-12 col-lg-4 link-list">
													<li class="title txt-color-01">
														<p>Facial Treatments</p>
													</li>
													<li class="fst-li"><a href="#">Anti ageing</a></li>
													<li><a href="#">Glowing Skin</a></li>
													<li><a href="#">Moroccan clay facial</a></li>
													<li><a href="#">Mud facial with milk and honey</a></li>
													<li><a href="#">Sea weed facial</a></li>
													<li><a href="#">Lemon and Orange peel facial</a></li>
													<li><a href="#">Detox facial</a></li>
													<li><a href="#">Skin Tightening</a></li>
													<li><a href="#">Cleanup</a></li>
												</ul>

												<!-- MEGAMENU LINKS -->
												<ul class="col-md-12 col-lg-4 link-list">
													<li class="title txt-color-01">
														<p>Body Treatments</p>
													</li>
													<li class="fst-li"><a href="#">Rejuvenating Skin</a></li>
													<li><a href="#">Detox</a></li>
													<li><a href="#">Weight Loss</a></li>
													<li><a href="#">Skin Tightening</a></li>
												</ul>

												<!-- MEGAMENU LINKS -->
												<ul class="col-md-12 col-lg-4 link-list">
													<li class="title txt-color-01">
														<p>Cosmatic Massages</p>
													</li>
													<li class="fst-li"><a href="#">Skin Brightning - Face</a></li>
													<li><a href="#">Skin Brightning - Body</a></li>
													<li><a href="#">Anti Ageing - Face</a></li>
													<li><a href="#">Anti Ageing - Body</a></li>
												</ul>

											</div> <!-- End row -->
										</div> <!-- End container -->
									</div> <!-- End wsmegamenu -->
								</li> <!-- END MEGAMENU -->



								<!-- SIMPLE NAVIGATION LINK -->
								<!-- <li class="nl-simple" aria-haspopup="true"><a href="gift-cards.html">Gift Cards</a></li> -->


								<!-- DROPDOWN MENU -->
								<li aria-haspopup="true"><a href="blog-classic.html">Blog</a>
									<!-- <ul class="sub-menu">
	            							<li aria-haspopup="true"><a href="blog-sidebar.html">Blog Sidebar</a></li>
	            							<li aria-haspopup="true"><a href="blog-classic.html">Blog Classic</a></li>
						           			<li aria-haspopup="true"><a href="blog-masonry.html">Blog Masonry</a></li>
						           			<li aria-haspopup="true"><a href="single-post.html">Single Post</a></li>	      
						           		</ul> -->
								</li> <!-- END DROPDOWN MENU -->
								<!--SIMPLE NAVIGATION LINK-->
								<li class="nl-simple" aria-haspopup="true"><a href="pricing.html">Pricing</a></li>
								<!-- SIMPLE NAVIGATION LINK -->
								<li class="nl-simple" aria-haspopup="true"><a href="faqs.html">F&Q</a></li>

								<!-- SIMPLE NAVIGATION LINK -->
								<li class="nl-simple" aria-haspopup="true"><a href="contacts.html">Contacts</a></li>

								<!-- HEADER BUTTON -->
								<li class="nl-simple" aria-haspopup="true">
									<a href="#" class="btn btn-color-02 tra-01-hover last-link">Book Now</a>
								</li>

							</ul>
						</nav> <!-- END MAIN MENU -->

					</div>
				</div> <!-- END NAVIGATION MENU -->


			</div> <!-- End header-wrapper -->
		</header> <!-- END HEADER -->




		<!-- INNER PAGE WRAPPER
			============================================= -->
		<div class="inner-page-wrapper">




			<!-- PAGE HERO
				============================================= -->
			<section id="booking-page" class="bg-fixed wide-100 page-hero-section division">
				<div class="container">


					<!-- PAGE HERO TEXT -->
					<div class="row">
						<div class="col-md-10 col-xl-8 offset-md-1 offset-xl-2">
							<div class="hero-txt text-center white-color">

								<!-- Title -->
								<h2 class="h2-lg">Online Booking</h2>

								<!-- Text -->
								<p class="p-lg">Sapien gravida donec pretium ipsum porta justo integer at feugiat velna
									vitae auctor
									an integera magna purus
								</p>

							</div>
						</div>
					</div> <!-- END PAGE HERO TEXT -->


					<!-- BREADCRUMB -->
					<div id="breadcrumb">
						<div class="row">
							<div class="col">
								<div class="breadcrumb-nav">
									<nav aria-label="breadcrumb">
										<ol class="breadcrumb">
											<li class="breadcrumb-item"><a href="health_home.html">Home</a></li>
											<li class="breadcrumb-item active" aria-current="page">Online Booking</li>
										</ol>
									</nav>
								</div>
							</div>
						</div>
					</div> <!-- END BREADCRUMB -->


				</div> <!-- End container -->
			</section> <!-- END PAGE HERO -->




			<!-- BOOKING-1
				============================================= -->
			<section id="booking-1" class="bg-color-01 wide-40 booking-section division">
				<div class="container">



					<!-- SECTION TITLE -->
					<div class="row">
						<div class="col-lg-10 offset-lg-1">
							<div class="section-title mb-60 text-center">

								<!-- Transparent Header -->
								<h2 class="tra-header txt-color-02">Book Now</h2>

								<!-- Title 	-->
								<h3 class="h3-xl txt-color-01">Book Your Treatment</h3>

								<!-- Text -->
								<p class="p-lg txt-color-05">Aliquam a augue suscipit, luctus neque purus ipsum neque
									undo dolor
									primis libero tempus, blandit a cursus varius at magna tempor
								</p>

							</div>
						</div>
					</div>


					<div class="row">


						<!-- BOOKING FORM -->
						<div class="col-md-7 col-lg-8">
							<div class="form-holder pc-15 mb-40">
								<form method="POST">

									<div class="form-row">
										<!-- Form Input -->
										<div class="form-group col-md-6">
											<label for="inputName">Name*</label>
											<input type="text" name="name" class="form-control name" placeholder="Your Name*" required>
										</div>

										<!-- Form Input -->
										<div class="form-group col-md-6">
											<label for="inputEmail">Email*</label>
											<input type="email" name="email" class="form-control email" placeholder="Email Address*" required>
										</div>
									</div>
									<div class="form-row">
										<!-- Form Input -->
										<div class="form-group col-md-6">
											<label for="inputPhone">Phone*</label>
											<input type="tel" name="phone" class="form-control phone" placeholder="Phone Number*" required>
										</div>

										<!-- Form Input -->
										<!-- Form Input -->
										<div class="form-group col-md-6">
											<label for="inputAge">Age*</label>
											<input type="age" name="age" class="form-control age" placeholder="Age*" required>
										</div>

									</div>

									<div class="form-row">
										<div class="form-group col-md-12">
											<label for="inputDate">Appointment Date*</label>
											<input id="date" type="text" name="date" class="form-control date" placeholder="Date*" required>
										</div>
									</div>


									<div class="form-row">
										<!--Form Select-->
										<div class="form-group col-md-12">
											<label for="inputAge">Gender*</label>
											<select id="inlineFormCustomSelect4" name="gender" class="custom-select treatment" required>
												<option value="">Gender*</option>
												<option>Male</option>
												<option>Female</option>
												<option>Other</option>
											</select>
										</div>
									</div>
									<div class="form-row">
										<!-- Form Select -->
										<div class="form-group col-md-12">
											<label for="inputAge">Treatment For*</label>
											<select id="inlineFormCustomSelect1" name="treatment" class="custom-select treatment" required>
												<option value="">Treatment For*</option>
												<option>Cancer</option>
												<option>Diabetes</option>
											</select>
										</div>
									</div>

									<div class="form-row">
										<!-- Form Select -->
										<div class="form-group col-md-12">
											<label for="inputAge">Have You Visited Us Before?*</label>
											<select id="inlineFormCustomSelect3" name="patient" class="custom-select patient" required>
												<option value="">Have You Visited Us Before?*</option>
												<option>New Patient</option>
												<option>Returning Patient</option>
												<option>Other</option>
											</select>
										</div>
									</div>

									<!-- Form Button -->
									<div class="col-md-12 mt-5 text-right">
										<input type="submit" class="btn btn-md btn-color-02 color-01-hover submit" value="Book Now" name="book">
									</div>

									<!-- <div id="error_message" class="ajax_response" style="float:left"></div>
									<div id="success_message" class="ajax_response" style="float:left"></div> -->

								</form>
							</div>
						</div> <!-- END BOOKING FORM -->

						<!-- CONTACTS INFO -->
						<div class="col-md-5 col-lg-4">
							<div class="contacts-info pc-25 mb-40">

								<!-- LOCATION -->
								<div class="cbox-1 mb-30">
									<h5 class="h5-sm txt-color-01">Our Location</h5>
									<p class="p-md txt-color-05">No:50, Kassapa Rd,</p>
									<p class="p-md txt-color-05">Colombo 05, Sri Lanka</p>
								</div>

								<!-- PHONES -->
								<div class="cbox-1 mb-30">
									<h5 class="h5-sm txt-color-01">Contact Info</h5>
									<p class="p-md txt-color-05"><span>Phone :</span> +94 77 0728767</p>
									<p class="p-md txt-color-05"><span>Email :</span> <a href="mailto:yourdomain.ceylon@mail.com">natureshealing.ceylon@gmail.com</a>
									</p>
									<!-- <p class="p-md txt-color-05"><span>Skype :</span> <a href="tel:123456789">support.spamagic</a></p> -->
								</div>

								<!-- EMAILS -->
								<div class="cbox-1">
									<h5 class="h5-sm txt-color-01">Working Hours</h5>
									<p class="p-md txt-color-05"><span>Mon – Sat :</span> 8:30 AM - 7:30 PM</p>
									<!-- <p class="p-md txt-color-05"><span>Saturday :</span> 9:00 AM - 6:00 PM</p> -->
									<p class="p-md txt-color-05"><span>Sunday :</span> Open</p>
								</div>

							</div>
						</div> <!-- END CONTACTS INFO -->

					<!-- End row -->


				</div> <!-- End container -->
			</section> <!-- END BOOKING-1 -->




			<!-- BANNER-5
				============================================= -->
			<section id="banner-5" class="bg-fixed bg-image banner-section division">
				<div class="container">
					<div class="row d-flex align-items-center">


						<!-- TEXT BLOCK -->
						<div class="col-lg-6 offset-lg-3">
							<div class="banner-5-txt text-center">

								<!-- Title -->
								<h2 class="h2-xl txt-color-05">Get 20% Off</h2>
								<h3 class="h3-xs txt-color-01">For Your First Visit</h3>

								<!-- Text -->
								<p class="p-md txt-color-05">Porta semper lacus cursus, feugiat primis ultrice ligula
									risus auctor an tempus
									feugiat dolor undo lacinia cubilia curae
								</p>

								<!-- Button -->
								<a href="booking.html" class="btn btn-md btn-color-02 color-01-hover">Book Now</a>

							</div>
						</div> <!-- END TEXT BLOCK -->

					</div> <!-- End row -->
				</div> <!-- End container -->
			</section> <!-- END BANNER-5 -->




			<!-- FOOTER-4
				============================================= -->
			<footer id="footer-4" class="bg-color-01 footer division">
				<div class="container">


					<!-- FOOTER CONTENT -->
					<div class="row">


						<!-- FOOTER INFO -->
						<div class="col-md-5 col-lg-4">
							<div class="footer-info mb-40">

								<!-- For Retina Ready displays take a image with double the amount of pixels that your image will be 
									displayed (e.g 408 x 120  pixels) -->
								<img src="images/logo-01.png" width="204" height="60" alt="footer-logo">

								<!-- Text -->
								<p class="txt-color-05 mt-20">Aliquam nullam tempor sapien at gravida donec congue ipsum
									a porta magna and
									justo velna auctor sapien and augue
								</p>

							</div>
						</div>


						<!-- FOOTER CONTACTS -->
						<div class="col-md-4 col-lg-3 col-xl-3">
							<div class="footer-contacts mb-40">

								<!-- Title -->
								<h6 class="h6-lg txt-color-01">Let's Talk</h6>

								<!-- Address -->
								<p class="txt-color-05">No:50, Kassapa Rd,</p>
								<p class="txt-color-05">Colombo 05, Sri Lanka</p>

								<!-- Footer Contacts -->
								<div class="txt-color-05 mt-15">

									<!-- Email -->
									<p class="foo-email">E: <a href="mailto:natureshealing.com">natureshealing.com</a>
									</p>

									<!-- Phone -->
									<p>Phone: +94 77 072 8767</p>
									<!-- <p>Skype : <a href="tel:123456789">support.spamagic</a></p> -->

								</div>

							</div>
						</div>


						<!-- FOOTER LINKS -->
						<div class="col-md-3 col-lg-2">
							<div class="footer-links mb-40">

								<!-- Title -->
								<h6 class="h6-lg txt-color-01">Quick Links</h6>

								<!-- Footer Links -->
								<ul class="txt-color-05 clearfix">
									<li>
										<p><a href="about.html">About Us</a></p>
									</li>
									<!-- <li><p><a href="#">Advertising</a></p></li>	 -->
									<li>
										<p><a href="faqs.html">FAQs</a></p>
									</li>
									<li>
										<p><a href="contacts.html">Appointments</a></p>
									</li>
									<li>
										<p><a href="contacts.html">Contact Us</a></p>
									</li>
								</ul>

							</div>
						</div>


						<!-- FOOTER IMAGES -->
						<div class="col-md-12 col-lg-3">
							<div class="footer-img mb-40">

								<!-- Title -->
								<h6 class="h6-lg txt-color-01">Instagram</h6>

								<!-- Instagram Images -->
								<ul class="text-center clearfix">
									<li><a href="#" target="_blank"><img class="insta-img" src="images/instagram/img-01.jpg" alt="insta-img"></a></li>
									<li><a href="#" target="_blank"><img class="insta-img" src="images/instagram/img-02.jpg" alt="insta-img"></a></li>
									<li><a href="#" target="_blank"><img class="insta-img" src="images/instagram/img-03.jpg" alt="insta-img"></a></li>
									<li><a href="#" target="_blank"><img class="insta-img" src="images/instagram/img-04.jpg" alt="insta-img"></a></li>
									<li><a href="#" target="_blank"><img class="insta-img" src="images/instagram/img-05.jpg" alt="insta-img"></a></li>
									<li><a href="#" target="_blank"><img class="insta-img" src="images/instagram/img-06.jpg" alt="insta-img"></a></li>
								</ul>

							</div>
						</div> <!-- END FOOTER IMAGES -->


					</div> <!-- END FOOTER CONTENT -->


					<!-- BOTTOM FOOTER -->
					<div class="bottom-footer txt-color-05">
						<div class="row d-flex align-items-center">


							<!-- FOOTER COPYRIGHT -->
							<div class="col-lg-6">
								<div class="footer-copyright">
									<p>&copy; 2021 Nature's Healing. All Rights Reserved</p>
								</div>
							</div>


							<!-- BOTTOM FOOTER LINKS -->
							<div class="col-lg-6">
								<ul class="bottom-footer-list text-right clearfix">
									<li>
										<p class="first-list-link"><a href="#"><i class="fab fa-facebook-f"></i>
												Facebook</a></p>
									</li>
									<li>
										<p><a href="#"><i class="fab fa-twitter"></i> Twitter</a></p>
									</li>
									<li>
										<p><a href="#"><i class="fab fa-instagram"></i> Instagram</a></p>
									</li>
									<li>
										<p class="last-li"><a href="#"><i class="fab fa-yelp"></i> Yelp</a></p>
									</li>
								</ul>
							</div>

						</div> <!-- End row -->
					</div> <!-- END BOTTOM FOOTER -->


				</div> <!-- End container -->
			</footer> <!-- END FOOTER-4 -->




		</div> <!-- END INNER PAGE WRAPPER -->




	</div> <!-- END PAGE CONTENT -->




	<!-- EXTERNAL SCRIPTS
		============================================= -->
	<script src="js/jquery-3.4.1.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/modernizr.custom.js"></script>
	<script src="js/jquery.easing.js"></script>
	<script src="js/jquery.appear.js"></script>
	<script src="js/jquery.scrollto.js"></script>
	<script src="js/menu.js"></script>
	<!-- <script src="js/materialize.js"></script> -->
	<script src="js/tweenmax.min.js"></script>
	<script src="js/slideshow.js"></script>
	<script src="js/imagesloaded.pkgd.min.js"></script>
	<script src="js/isotope.pkgd.min.js"></script>
	<script src="js/jquery.flexslider.js"></script>
	<script src="js/owl.carousel.min.js"></script>
	<script src="js/jquery.magnific-popup.min.js"></script>
	<script src="js/hero-form.js"></script>
	<script src="js/contact-form.js"></script>
	<script src="js/comment-form.js"></script>
	<script src="js/booking-form.js"></script>
	<!-- <script src="js/jquery.datetimepicker.full.js"></script> -->
	<script src="js/jquery.validate.min.js"></script>
	<script src="js/jquery.ajaxchimp.min.js"></script>
	<script>
		// $(document).ready(function () {
		//  	$("#date").datepicker({
		//  	});
		// });

		var date = new Date();
		var cYear = date.getFullYear();
		var cMonth = date.getMonth();
		var cDate = date.getDate();
		$(document).ready(function() {
			$("#date").datepicker({
				minDate: new Date(cYear, cMonth, cDate + 2),
				//  maxDate: new Date(cYear, cMonth, cDate + 2),

				beforeShowDay: function(date) {
					var day = date.getDay();
					if (day == 0) {
						return [false];
					} else
						return [true];
				}

			})
		});
	</script>

	<!-- Custom Script -->
	<script src="js/custom.js"></script>

	<!-- HTML5 shim, for IE6-8 support of HTML5 elements. All other JS at the end of file. -->
	<!-- [if lt IE 9]>
			<script src="js/html5shiv.js" type="text/javascript"></script>
			<script src="js/respond.min.js" type="text/javascript"></script>
		<![endif] -->

	<!-- Google Analytics: Change UA-XXXXX-X to be your site's ID. Go to http://www.google.com/analytics/ for more information. -->
	<!--
		<script>
			var _gaq = _gaq || [];
			_gaq.push(['_setAccount', 'UA-XXXXX-X']);
			_gaq.push(['_trackPageview']);

			(function() {
				var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
				ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
				var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
			})();
		</script>
		-->

</body>

</html>
