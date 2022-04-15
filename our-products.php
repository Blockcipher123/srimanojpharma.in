<!DOCTYPE html>
<html lang="en">

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
	<title>Welcome To SriManojPharma</title>
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

	<nav class="navbar navbar-expand-lg navbar-light " style="background-color: #FFDDDD;">
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
				<li class="nav-item"><a class="nav-link" href="diet-clinic.php"><b> Diet Clinic</b> </a></li>
				<li class="nav-item"><a class="nav-link" href="why-srimanojpharma.php"> Why SriManojPharma </a></li>
				<li class="nav-item dropdown">
					<a class="nav-link  dropdown-toggle" href="our-products.php" data-toggle="dropdown"> <b style="color:red"><u> Our Products</u></b> </a>
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
		<div>
			<u>
				<h3 style="text-align:center">Our Products</h3>
			</u>
		</div>
		<div class="card-deck">
			<div class="card" style="margin:5% 5% 5% 5% ;border-radius:3%; background-color:#EDF4E0">
				<!-- <div class="card-body text-center">
                        <p class="card-text">
                            <img class="card-img-top" src="image/Presentation-page-001.jpg" alt="Card image" style="border-radius:10px">
                            <img src="image/dietician.jpeg" class="img-fluid " alt="Responsive image">
                        </p>
                    </div> -->
				<div class="carousel">
					<div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
						<div class="carousel-inner">
							<div class="carousel-item active">
								<img class="d-block w-100" src="image/our product/gas nasak churan/Presentation-page-001.jpg" alt="First slide">
							</div>
							<div class="carousel-item">
								<img class="d-block w-100" src="image/our product/gas nasak churan/4.jpg" alt="six slide">
							</div>
							<div class="carousel-item">
								<img class="d-block w-100" src="image/our product/gas nasak churan/Copy of Health Newsletter - Made with PosterMyWall (7) (1).jpg" alt="Second slide">
							</div>
							<div class="carousel-item">
								<img class="d-block w-100" src="image/our product/gas nasak churan/Presentation-page-001.jpg" alt="Third slide">
							</div>
							<div class="carousel-item">
								<img class="d-block w-100" src="image/our product/gas nasak churan/1.jpeg" alt="fourth slide">
							</div>
							<div class="carousel-item">
								<img class="d-block w-100" src="image/our product/gas nasak churan/2.jpg" alt="fifth slide">
							</div>
							<div class="carousel-item">
								<img class="d-block w-100" src="image/our product/gas nasak churan/3.jpg" alt="six slide">
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
				</div>
			</div>
			<div class="card " style="margin:5% 5% 5% 5%; border-radius:3%;background-color:#66FCF1">
				<div class="card-body text-center">
					<p class="card-text">
					<h2>Gas Vinashak Churna<br></h2>
					<h5>(Ayurvedic Medicine)
						<br>Helpful in <br>Gas <br>Acidity<br>Indigestion<br>Constipation
					</h5>
					<br>
					<h5>
						<h5></h5>
					</h5>
					<br>
					<h5></h5>
					<h5></h5>
					</p>
				</div>
			</div>
		</div>
		<div>
			<u>
				<h3 style="text-align:center">Our Upcoming Products</h3>
			</u>
		</div>
	</main>
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