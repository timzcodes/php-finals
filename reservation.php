<?php
    session_start();
	include 'php/config.php';
?>
<!DOCTYPE html>
<html lang="en"><!-- Basic -->
<head>
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

     <!-- Site Metas -->
    <title>Romantic Baboy Restaurant</title>
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Site Icons -->
    <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">
    <link rel="apple-touch-icon" href="images/apple-touch-icon.png">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
	<!-- Site CSS -->
    <link rel="stylesheet" href="css/style.css">
	<!-- Pickadate CSS -->
    <link rel="stylesheet" href="css/classic.css">
	<link rel="stylesheet" href="css/classic.date.css">
	<link rel="stylesheet" href="css/classic.time.css">
    <!-- Responsive CSS -->
    <link rel="stylesheet" href="css/responsive.css">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="css/custom.css">

    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body id="override">
	<!-- Start header -->
	<header class="top-navbar">
		<nav class="navbar navbar-expand-lg navbar-light bg-light">
			<div class="container">
				<a class="navbar-brand" href="index.php">
					<img src="images/logo.png" alt="" />
				</a>
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbars-rs-food" aria-controls="navbars-rs-food" aria-expanded="false" aria-label="Toggle navigation">
				  <span class="navbar-toggler-icon"></span>
				</button>
				<div class="collapse navbar-collapse" id="navbars-rs-food">
					<ul class="navbar-nav ml-auto">
						<li class="nav-item"><a class="nav-link" href="menu.php">Menu</a></li>
                        <li class="nav-item active"><a class="nav-link" href="reservation.php">Reservation</a></li>
						<?php if (!empty($_SESSION['user'])) {?>
						<div class='acc-container'>
							<li class="nav-item"><a class="nav-link" href=""><?php $details = $_SESSION['user']; echo $details['first_name'] ?></a></li>
							<li class="nav-item"><a href="php/logout.php">Logout</a></li>
						</div>
						<?php } else{

						echo "<li class='nav-item'><a class='nav-link' href='register.php'>Register</a></li>";
							//echo var_dump($_SESSION['user']);
							echo isset($_SESSION['login']);
							} ?>
                        <li class="nav-item"><a class="nav-link" href="my_acc.php">My Account</a></li>
                        <li class="nav-item"><a class="nav-link" href="contact.php">Contact</a></li>
						<li class="nav-item"><a class="nav-link" href="about.php">About</a></li>
					</ul>
				</div>
			</div>
		</nav>
	</header>
	<!-- End header -->

	<!-- Start All Pages -->
	<div class="all-page-title page-breadcrumb">
		<div class="container text-center">
			<div class="row">
				<div class="col-lg-12">
					<h1>Reservation</h1>
				</div>
			</div>
		</div>
	</div>
	<!-- End All Pages -->

	<!-- Start Reservation -->
	<div class="reservation-box">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<div class="heading-title text-center">
						
						<p>*Some tables are unavailable due to social distancing.</p>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-lg-12 col-sm-12 col-xs-12">
					<div class="contact-block">
						<form id="" method='post' action=''>
							<div class="row">
								<div class="col-md-6">
									<h3>Book a table</h3>
									<form id='see-tables' method='post' action=''>
									<!-- PICK DATE -->
									<div class="col-md-12">
										<div class="form-group">
											<!-- <input id="input_date" class="datepicker picker__input form-control" name="res_date" type="date" value="" required data-error="Please enter Date"> -->
											
    										<input type='date' id='date' name='res_date' value="<?php if(isset($_POST['res_date'])) {echo $_POST['res_date'];} else {echo "";}?>" required>
											<div class="help-block with-errors"></div>
										</div>
									</div>
									<!-- lunch/dinner -->
									<div class="col-md-12">
										<div class="form-group">
											<select class="custom-select d-block form-control" id="time" name='time' selected="" data-error="Please select time">
												<option disabled selected><?php if(isset($_POST['time'])) {echo $_POST['time'];} else {echo "Select Time*";}?></option>
												<option value="Lunch">Lunch</option>
												<option value="Dinner">Dinner</option>
											</select>
											<div class="help-block with-errors"></div>
										</div>
									</div>
									<!-- SEE AVAILABLE SEATS -->
									<div class="submit-button text-center">
										<button class="btn btn-gray" id="see" type="submit" name='see'>See Available Tables</button>
										<div id="msgSubmit" class="h3 text-center hidden"></div>
										<div class="clearfix"></div>
									</div>
								</div>
						</form>
								<div class="col-md-6">
									<div style="border:2px solid black; width:520px; height:440;">
										<table> 
											<!--<tr>
												#<td colspan="4"></td>
												<td align="right"> <div id="driver"></div> </td>
											</tr>*/ -->

											<tr>

												<td><div class="seat">
                                                    
                                                    <div id="orangeBox"><span id="x">X</span></div>
                                                    
                                                    </div> </td>
                                                <td class="walk">  <br><br><br> </td>
												<td><div class="seat"></div></td>
												<td class="walk2">  </td>
												<td><div class="seat"></div></td>
                                                <td class="walk">  </td>
												<td><div class="seat"></div></td>
											</tr>
											<tr>
												<td><div class="seat"></div> </td>
                                                <td class="walk">  <br><br><br></td>
												<td><div class="seat"x></div></td>
												<td class="walk2">  </td>
												<td><div class="seat"></div></td>
                                                <td class="walk">  </td>
												<td><div class="seat"></div></td>
											</tr>
											<tr>
												<td><div class="seat"></div> </td>
                                                <td class="walk">  <br><br><br></td>
												<td><div class="seat"></div></td>
												<td class="walk2">  </td>
												<td><div class="seat"></div></td>
                                                <td class="walk">  </td>
												<td><div class="seat"></div></td>
											</tr>
											<tr>
												<td><div class="seat"></div> </td>
                                                <td class="walk">  <br><br><br></td>
												<td><div class="seat"></div></td>
												<td class="walk2">  </td>
												<td><div class="seat"></div></td>
                                                <td class="walk">  </td>
												<td><div class="seat"></div></td>
											</tr>
											<tr>
												<td><div class="seat"></div> </td>
                                                <td class="walk">  <br><br><br></td>
												<td><div class="seat"></div></td>
												<td class="walk2">  </td>
												<td><div class="seat"></div></td>
                                                <td class="walk">  </td>
												<td><div class="seat"></div></td>
											</tr>
											<tr>
												<td><div class="seat"></div> </td>
                                                <td class="walk">  <br><br><br></td>
												<td><div class="seat"></div></td>
												<td class="walk2">  </td>
												<td><div class="seat"></div></td>
                                                <td class="walk">  </td>
												<td><div class="seat"></div></td>
											</tr>
											<tr>
												<td><div class="seat" value='b1'></div> </td>
                                                <td class="walk">  <br><br><br></td>
												<td><div class="seat" value='b2'></div></td>
												<td class="walk2">  </td>
												<td><div class="seat" value='b3'></div></td>
                                                <td class="walk">  </td>
												<td><div class="seat" value='b4'></div></td>
											</tr>
										</table>
									</div>
									<input type='text' id='seats' value='' name='reserved' style="display:none;">
									<!-- <input type='date' id='date' name='res_date' required>
									<button type="submit" id="save" name="save">Reserve seats</button> -->
								</div>
								<div class="col-md-12">
									<div class="submit-button text-center">
										<button class="btn btn-common" id="save" type="submit" name='save'>Book Table</button>
										<div id="msgSubmit" class="h3 text-center hidden"></div>
										<div class="clearfix"></div>
									</div>
								</div>
							</div>
					</div>
				</div>
			</div>
		</div>

	</div>
	<!-- End Reservation -->

	<!--popup warning -->
	<!--popup warning -->



	<!-- Start Contact info -->
	<div class="contact-imfo-box">
		<div class="container">
			<div class="row">
				<div class="col-md-4">
					<i class="fa fa-volume-control-phone"></i>
					<div class="overflow-hidden">
						<h4>Phone</h4>
						<p class="lead">
							+02 8374 7948
						</p>
					</div>
				</div>
				<div class="col-md-4">
					<i class="fa fa-envelope"></i>
					<div class="overflow-hidden">
						<h4>Email</h4>
						<p class="lead">
							romanticbaboy.ph
						</p>
					</div>
				</div>
				<div class="col-md-4">
					<i class="fa fa-map-marker"></i>
					<div class="overflow-hidden">
						<h4>Location</h4>
						<p class="lead">
							Double Dragon Plaza, Pasay, Metro Manila
						</p>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- End Contact info -->

	<!-- Start Footer -->
	<footer class="footer-area bg-f">
		<div class="container">
			<div class="row">
				<div class="col-lg-3 col-md-6">
					<h3>About Us</h3>
					<p>Romantic Baboy is a restaurant chain in Metro Manila that serves unlimited Korean BBQ since 2019. Their main menu includes ready-to-grill meats and assorted side dishes!</p>
				</div>
				<div class="col-lg-3 col-md-6">
					<h3>Opening hours</h3>
					<p><span class="text-color">Monday - Sunday :  </span>Closed</p>
					<p><span class="text-color">Hours :</span> 11:00 AM - 2:00 AM</p>
				</div>
				<div class="col-lg-3 col-md-6">
					<h3>Contact information</h3>
					<p class="lead">Ground Level, Double Dragon Plaza, Pasay, Metro Manila</p>
					<p class="lead"><a href="contact.php">(02) 8374 7948</a></p>
					<p><a href="contact.php"> romanticbaboy.ph</a></p>
				</div>
				<div class="col-lg-3 col-md-6">
					<h3>Subscribe</h3>
					<div class="subscribe_form">
						<form class="subscribe_form">
							<input name="EMAIL" id="subs-email" class="form_input" placeholder="Email Address..." type="email">
							<button type="submit" class="submit">SUBSCRIBE</button>
							<div class="clearfix"></div>
						</form>
					</div>
					<ul class="list-inline f-social">
						<li class="list-inline-item"><a href="https://web.facebook.com/RomanticBaboy/?_rdc=1&_rdr"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
					</ul>
				</div>
			</div>
		</div>

		<div class="copyright">
			<div class="container">
				<div class="row">
					<div class="col-lg-12">
						<p class="company-name">All Rights Reserved. &copy; 2018 <a href="https://web.facebook.com/RomanticBaboy/?_rdc=1&_rdr">Romantic Baboy Restaurant</a></p>
					</div>
				</div>
			</div>
		</div>

	</footer>
	<!-- End Footer -->

	<a href="#" id="back-to-top" title="Back to top" style="display: none;">&uarr;</a>

	<!-- ALL JS FILES -->
	<script src="js/jquery-3.2.1.min.js"></script>
	<script src="js/popper.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
    <!-- ALL PLUGINS -->
	<script src="js/jquery.superslides.min.js"></script>
	<script src="js/images-loded.min.js"></script>
	<script src="js/isotope.min.js"></script>
	<script src="js/baguetteBox.min.js"></script>
	<script src="js/picker.js"></script>
	<script src="js/picker.date.js"></script>
	<script src="js/picker.time.js"></script>
	<script src="js/legacy.js"></script>
	<script src="js/form-validator.min.js"></script>
    <script src="js/contact-form-script.js"></script>
    <script src="js/custom.js"></script>
	<script src="js/main.js"></script>
</body>
<?php
	include 'php/reserve.php';
?>
</html>
