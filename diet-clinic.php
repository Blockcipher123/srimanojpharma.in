<!DOCTYPE html>
<html lang="en">

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
	$First_Name = $_POST['First-Name'];
	$Last_Name = $_POST['Last-Name'];
	$Email = $_POST['Email'];
	$Mobile = $_POST['Mobile'];
	$Problem = $_POST['Problem'];
	// echo($First_Name);
	// echo($Last_Name);
	// echo($Email);
	// echo($Problem);
	$from = "support@srimanojpharma.in";
	$to = "anujdietician@gmail.com";
	$subject = "Diet Clinic Appointment Form";
	$headers = "From:" . $from;
	$message = "Name=" . $First_Name . $Last_Name . ",Email=" . $Email . ",Mobile=" . $Mobile . ",Problem=" . $Problem;
	if (mail($to, $subject, $message, $headers)) {
		echo ("<script>alert('We Will Connect You Soon')</script>");
	}
}

?>

<head>
	<!-- Global site tag (gtag.js) - Google Analytics -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=G-FMX4HKVCDH"></script>
	<script>
		window.dataLayer = window.dataLayer || [];

		function gtag() {
			dataLayer.push(arguments);
		}
		gtag('js', new Date());

		gtag('config', 'G-FMX4HKVCDH');
	</script>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Diet Clinic</title>
	<meta name="description" content="SriManojPharma is the best Pharmaceutical and Diet Clinic in Anpara">
	<link href="image/circle-cropped.png" rel="icon">
	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" />
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
	<style type="text/css">
		/* ============ only desktop view ============ */
		@media all and (min-width: 992px) {
			.navbar .nav-item .dropdown-menu {
				display: block;
				opacity: 0;
				visibility: hidden;
				transition: .3s;
				margin-top: 0;
			}

			.navbar .nav-item:hover .nav-link {
				color: red;
			}

			.navbar .dropdown-menu.fade-down {
				top: 80%;
				transform: rotateX(-75deg);
				transform-origin: 0% 0%;
			}

			.navbar .dropdown-menu.fade-up {
				top: 180%;
			}

			.navbar .nav-item:hover .dropdown-menu {
				transition: .3s;
				opacity: 1;
				visibility: visible;
				top: 100%;
				transform: rotateX(0deg);
			}
		}

		/* ============ desktop view .end// ============ */
	</style>
	<!--  nav bar -->

	<nav class="navbar navbar-expand-lg navbar-light " style="background-color: white">
		<a class="navbar-brand" href="index.php">
			<img src="image/logo_tm.jpeg" width="70" height="60" alt="" style="border-radius: 30px; margin-left:25px;">
		</a>
		<!--<img src="image/flag1.gif" width="110" height="60" alt="">-->
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#main_nav" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>
		<div class="collapse navbar-collapse" id="main_nav">
			<ul class="navbar-nav ml-auto">
				<li class="nav-item"><a class="nav-link" href="about-terms-and-conditions.php"> About </a></li>
				<li class="nav-item"><a class="nav-link" href="diet-clinic.php"><b style="color:red"><u> Diet Clinic</u></b> </a></li>
				<li class="nav-item"><a class="nav-link" href="why-srimanojpharma.php"> Why SriManojPharma </a></li>
				<li class="nav-item dropdown">
					<a class="nav-link  dropdown-toggle" href="our-products.php" data-toggle="dropdown"> Our Products </a>
					<ul class="dropdown-menu dropdown-menu-right fade-down">
						<li><a class="dropdown-item" href="our-products.php"> All Products</a></li>
						<li><a class="dropdown-item" href="our-products.php"> Upcoming Products </a></li>
						<!--<li><a class="dropdown-item" href="#"> Submenu item 3</a></li>-->
					</ul>
				</li>
				<li class="nav-item"><a class="nav-link" href="medicine-inquiry.php"> Medicine Inquiry </a></li>
				<li class="nav-item"><a class="nav-link" href="career.php"> Career </a></li>
				<li class="nav-item"><a class="nav-link" href="contact.php"> Contact </a></li>
			</ul>
		</div>
	</nav>
	<marquee width="100%" direction="right" style="color:red" behavior="alternate" onmouseover="this.stop();" onmouseout="this.start();">
		<h5><a href="trade-mark.pdf" style="color:red" target="_blank">Trade Mark Registered</a></h5>
	</marquee>
</head>

<body style="background-color:#FFDDDD">
	<!-- image carousel -->
	<!-- <div class="carousel">
		<div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
			<div class="carousel-inner">
				<div class="carousel-item active">
					<img class="d-block w-100" src="image/image crousel galary/one.png" alt="First slide">
				</div>
				<div class="carousel-item">
					<img class="d-block w-100" src="image/image crousel galary/two.png" alt="Second slide">
				</div>
				<div class="carousel-item">
					<img class="d-block w-100" src="image/image crousel galary/one.png" alt="Third slide">
				</div>
			</div>
			<a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
				<span class="carousel-control-prev-icon" aria-hidden="true"></span>
				<span class="sr-only">Previous</span>
			</a>
			<a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
				<span class="carousel-control-next-icon" aria-hidden="true"></span>
				<span class="sr-only">Next</span>
			</a>
		</div>
	</div> -->
	<!-- image carousel end -->
	<main>
		<!-- Dietician Details-->
		<div class="card-deck">
			<div class="card" style="margin:5% 5% 5% 5% ;border-radius:3%; background-color:#EDF4E0">
				<div class="card-body text-center">
					<p class="card-text">
						<img class="card-img-top" src="image/dietician.jpeg" alt="Card image" style="height:400px;width:250px;border-radius:10px">
						<!-- <img src="image/dietician.jpeg" class="img-fluid " alt="Responsive image"> -->
					</p>
				</div>
			</div>
			<div class="card bg-warning" style="margin:5% 5% 5% 5%; border-radius:3%">
				<div class="card-body text-center">
					<p class="card-text">
					<h2>Dt. Anuj Kumar Prjapati <br></h2>
					<h5>(Consultant Dietitian)
						<br>B.Sc.(Hons),M.Sc.(DFSM),D.N.H.E.
					</h5>
					<br>
					<h5>
						<h5>B.Sc.(Hons),M.Sc.(DFSM),D.N.H.E.</h5>
					</h5>
					<br>
					<h5>Ex. Health Instructor of-F.M. Medical <br>College and Hospital, Agra</h5>
					<h5>Heritage Institute of Medical Sciences, Varanasi</h5>
					</p>
				</div>
			</div>
		</div>
	</main>
	<!-- Dietician Details end-->
	<!-- book appointment form -->
	<!-- heading -->
	<div>
		<u>
			<h3 style="text-align:center">Book Appointment</h3>
		</u>
	</div>
	<!-- heading end -->
	<!-- contact form -->
	<div>
		<form class="form-register" action="diet-clinic.php" method="POST">
			<div class="row">
				<div class="form-group col-md-6">
					<label>First name *</label>
					<input type="" class="form-control" name="First-Name" id="First-Name" aria-describedby="emailHelp" placeholder="" required style="background-color:white">
				</div>
				<div class="form-group col-md-6">
					<label>Last name *</label>
					<input type="" class="form-control" name="Last-Name" id="Last-Name" aria-describedby="emailHelp" placeholder="" required style="background-color:white">
				</div>
			</div>
			<div class="form-group">
				<label>Mobile *</label>
				<input type="number" class="form-control" name="Mobile" id="Mobile" placeholder="" required>
			</div>
			<div class="form-group">
				<label>Email</label>
				<input type="email" class="form-control" name="Email" id="Email" placeholder="">
			</div>
			<div class="form-group">
				<label for="exampleFormControlTextarea1">Express Problem in Brief</label>
				<textarea class="form-control" name="Problem" id="exampleFormControlTextarea1" rows="3"></textarea>
			</div>
			<button type="submit" class="btn btn-primary btn-lg">Submit</button>
		</form>
	</div>
	<!-- contact form end -->
	<!-- book appointment form  end-->
	<!-- Image Galary -->
	<div>
		<u>
			<h3 style="text-align:center">Image Galary</h3>
		</u>
	</div>
	<br>
	<!-- Gallery -->
	<div class="row">
		<div class="col-lg-4 col-md-12 mb-4 mb-lg-0">
			<img src="image/diet clinic galary/31.jpeg" class="w-100 shadow-1-strong rounded mb-4" alt="" />
			<img src="image/diet clinic galary/32.jpeg" class="w-100 shadow-1-strong rounded mb-4" alt="" />
			<img src="image/diet clinic galary/1.jpg" class="w-100 shadow-1-strong rounded mb-4" alt="" />
			<img src="image/diet clinic galary/2.jpg" class="w-100 shadow-1-strong rounded mb-4" alt="" />
			<img src="image/diet clinic galary/3.jpg" class="w-100 shadow-1-strong rounded mb-4" alt="" />
			<img src="image/diet clinic galary/4.jpg" class="w-100 shadow-1-strong rounded mb-4" alt="" />
			<img src="image/diet clinic galary/5.jpg" class="w-100 shadow-1-strong rounded mb-4" alt="" />
			<img src="image/diet clinic galary/6.jpg" class="w-100 shadow-1-strong rounded mb-4" alt="" />
			<img src="image/diet clinic galary/7.jpg" class="w-100 shadow-1-strong rounded mb-4" alt="" />
			<img src="image/diet clinic galary/8.jpg" class="w-100 shadow-1-strong rounded mb-4" alt="" />
			<img src="image/diet clinic galary/9.jpg" class="w-100 shadow-1-strong rounded mb-4" alt="" />
			<img src="image/diet clinic galary/10.jpg" class="w-100 shadow-1-strong rounded mb-4" alt="" />
			<img src="image/diet clinic galary/30.jpg" class="w-100 shadow-1-strong rounded mb-4" alt="" />
		</div>

		<div class="col-lg-4 mb-4 mb-lg-0">
			<img src="image/diet clinic galary/33.jpeg" class="w-100 shadow-1-strong rounded mb-4" alt="" />
			<img src="image/diet clinic galary/34.jpeg" class="w-100 shadow-1-strong rounded mb-4" alt="" />
			<img src="image/diet clinic galary/11.jpg" class="w-100 shadow-1-strong rounded mb-4" alt="" />
			<img src="image/diet clinic galary/12.jpg" class="w-100 shadow-1-strong rounded mb-4" alt="" />
			<img src="image/diet clinic galary/13.jpg" class="w-100 shadow-1-strong rounded mb-4" alt="" />
			<img src="image/diet clinic galary/14.jpg" class="w-100 shadow-1-strong rounded mb-4" alt="" />
			<img src="image/diet clinic galary/15.jpg" class="w-100 shadow-1-strong rounded mb-4" alt="" />
			<img src="image/diet clinic galary/16.jpg" class="w-100 shadow-1-strong rounded mb-4" alt="" />
			<img src="image/diet clinic galary/17.jpg" class="w-100 shadow-1-strong rounded mb-4" alt="" />
			<img src="image/diet clinic galary/18.jpg" class="w-100 shadow-1-strong rounded mb-4" alt="" />
			<img src="image/diet clinic galary/19.jpg" class="w-100 shadow-1-strong rounded mb-4" alt="" />
			<img src="image/diet clinic galary/20.jpg" class="w-100 shadow-1-strong rounded mb-4" alt="" />
		</div>
		<div class="col-lg-4 mb-4 mb-lg-0">
			<img src="image/diet clinic galary/35.jpeg" class="w-100 shadow-1-strong rounded mb-4" alt="" />
			<img src="image/diet clinic galary/36.jpeg" class="w-100 shadow-1-strong rounded mb-4" alt="" />
			<img src="image/diet clinic galary/21.jpg" class="w-100 shadow-1-strong rounded mb-4" alt="" />
			<img src="image/diet clinic galary/22.jpg" class="w-100 shadow-1-strong rounded mb-4" alt="" />
			<img src="image/diet clinic galary/23.jpg" class="w-100 shadow-1-strong rounded mb-4" alt="" />
			<img src="image/diet clinic galary/24.jpg" class="w-100 shadow-1-strong rounded mb-4" alt="" />
			<img src="image/diet clinic galary/25.jpg" class="w-100 shadow-1-strong rounded mb-4" alt="" />
			<img src="image/diet clinic galary/26.jpg" class="w-100 shadow-1-strong rounded mb-4" alt="" />
			<img src="image/diet clinic galary/27.jpg" class="w-100 shadow-1-strong rounded mb-4" alt="" />
			<img src="image/diet clinic galary/28.jpg" class="w-100 shadow-1-strong rounded mb-4" alt="" />
			<img src="image/diet clinic galary/29.jpg" class="w-100 shadow-1-strong rounded mb-4" alt="" />

		</div>
	</div>
	<!-- Gallery -->
	<!-- Image Galary  End-->
	<!-- fotter -->
	<footer id="footer" class="footer-1">
		<div class="main-footer widgets-dark typo-light">
			<div class="container">
				<div class="row">
					<!-- company name -->
					<div class="col-xs-12 col-sm-6 col-md-3">
						<div class="widget subscribe no-box">
							<h5>Sri Manoj Pharma</h5>
							<a class="navbar-brand" href="index.php">
								<img src="image/logo_tm.jpeg" width="70" height="60" alt="" style="border-radius: 30px;">
							</a>
							<p>About the company, little description will goes here.. </p>
							<p> <a href="iso certificate.pdf" target="_blank" style="color: white">ISO Certification</a> <b style="color: red">new</b> </p>
							<p> <a href="trade-mark.pdf" target="_blank" style="color: white">Trade Mark</a> <b style="color: red">new</b> </p>
							<p>GSTIN : 09BMZPP5926J1ZZ <br>DL No: UP6420B0000034 <br> UP6421B0000034</p>

						</div>
					</div>
					<!-- company name end-->
					<!-- quick links -->
					<div class="col-xs-12 col-sm-6 col-md-3">
						<div class="widget no-box">
							<h5 class="widget-title">Quick Links<span></span></h5>
							<ul class="thumbnail-widget">
								<li><a href="index.php">Home</a></li>
								<li><a href="diet-clinic.php">Diet Clinic</a></li>
								<li><a href="about-terms-and-conditions.php">About</a></li>
								<li><a href="career.php">Career</a></li>
								<li><a href="contact.php">Contact</a></li>
								<li><a href="about-terms-and-conditions.php">Terms & Conditions</a></li>
							</ul>
						</div>
					</div>
					<!-- quick links end here-->
					<!--  social media widget -->
					<div class="col-xs-12 col-sm-6 col-md-3">
						<div class="widget no-box">
							<h5 class="widget-title">Follow up<span></span></h5>
							<a href="https://api.whatsapp.com/send?phone=https://api.whatsapp.com/send?phone=https://api.whatsapp.com/send/?phone=+9174083%2082626"> <i class="fa fa-whatsapp"> </i> </a>
							<a href="https://srimanojpharma.in/diet-clinic/#"> <i class="fa fa-facebook"> </i> </a>
							<a href="https://www.youtube.com/channel/UC5ebBi7b5-shzZpYLvVoo_g"> <i class="fa fa-youtube"> </i> </a>
							<a href="#"> <i class="fa fa-instagram"> </i> </a>
						</div>
					</div>
					<!--  social media widget end -->
					<br>
					<br>
					<!-- contact us -->
					<div class="col-xs-12 col-sm-6 col-md-3">
						<div class="widget no-box">
							<h5 class="widget-title">Contact Us<span></span></h5>
							<p>Sri Radha Krishna Gali, E Parasi Rd, <b>Anpara</b>, District – Sonebhadra (Uttar Pradesh) 231225<br>
								Mobile: 07408382626<br>
								Whatsapp: 07408382626<br>
								Email: contact@srimanojpharma.in</p>
						</div>
					</div>
				</div>
				<!-- co	ntact us end -->
				<!-- developer details -->
				<!-- <div>
					<p style="text-align:center">Developer Details</p>
				</div> -->
				<!-- developer details end -->
				<!-- copy right -->
				<div class="footer-copyright">
					<div class="container">
						<div class="row">
							<div class="col-md-12 text-center">
								<p>Copyright© 2021 SriManojPharma</p>
							</div>
						</div>
					</div>
				</div>
				<!-- copy right end -->
			</div>
		</div>
	</footer>
	<!-- fotter end -->
</body>

</html>