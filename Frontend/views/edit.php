<!DOCTYPE HTML>
<html>
	<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Profile</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="" />
	<meta name="keywords" content="" />
	<meta name="author" content="" />
    			<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
  <!-- Facebook and Twitter integration -->
	<meta property="og:title" content=""/>
	<meta property="og:image" content=""/>
	<meta property="og:url" content=""/>
	<meta property="og:site_name" content=""/>
	<meta property="og:description" content=""/>
	<meta name="twitter:title" content="" />
	<meta name="twitter:image" content="" />
	<meta name="twitter:url" content="" />
	<meta name="twitter:card" content="" />

	<link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,700,900" rel="stylesheet">
	
	<!-- Animate.css -->
	<link rel="stylesheet" href="css/animate.css">
	<!-- Icomoon Icon Fonts-->
	<link rel="stylesheet" href="css/icomoon.css">
	<!-- Bootstrap  -->
	<link rel="stylesheet" href="css/bootstrap.css">

	<!-- Magnific Popup -->
	<link rel="stylesheet" href="css/magnific-popup.css">

	<!-- Flexslider  -->
	<link rel="stylesheet" href="css/flexslider.css">

	<!-- Owl Carousel -->
	<link rel="stylesheet" href="css/owl.carousel.min.css">
	<link rel="stylesheet" href="css/owl.theme.default.min.css">
	
	<!-- Flaticons  -->
	<link rel="stylesheet" href="fonts/flaticon/font/flaticon.css">

	<!-- Theme style  -->
	<link rel="stylesheet" href="css/style.css">

	<!-- Modernizr JS -->
	<script src="js/modernizr-2.6.2.min.js"></script>
	<!-- FOR IE9 below -->
	<!--[if lt IE 9]>
	<script src="js/respond.min.js"></script>
	<![endif]-->

	</head>
	<body>
	<?php
	session_start(); 
				if (!isset($_SESSION['userid'])) 
				{
					header("Location: login.php");
				}
	?>
	<div class="colorlib-loader"></div>
	<div id="page">
		<nav class="colorlib-nav" role="navigation">
			<div class="top-menu">
				<div class="container">
					<div class="row">
						<div class="col-md-2">
							<div id="colorlib-logo"><a href="home.php">AnyFitness</a></div>
						</div>
						<div class="col-md-10 text-right menu-1">
							<ul>
								<li><a href="home.php">Home</a></li>
								<li class="has-dropdown">
									<a href="classes.html">Classes</a>
									<ul class="dropdown">
										<li><a href="classes-single.html">Classes Single</a></li>
										<li><a href="#">Cardio Classes</a></li>
										<li><a href="#">Muscle Classes</a></li>
										<li><a href="#">Fitness Classes</a></li>
										<li><a href="#">Body Building</a></li>
									</ul>
								</li>
								<li><a href="schedule.html">Schedule</a></li>
								<li><a href="about.html">Trainers</a></li>
								<li><a href="event.html">Events</a></li>
								<li class="has-dropdown active">
								<a href="edit.php?userid=<?PHP echo $_SESSION['userid']; ?>">Account Management</a>
								<ul class="dropdown">
								<li><a href="disconnect.php?deconnexion=true">Disconnect</a></li>
								</ul>
								</li>
								<!-- <li class="active"><a href="blog.html">Blog</a></li> -->
								<li><a href="contact.html">Contact</a></li>
								<li class="btn-cta"><a href="#"><span><i class="icon-cart"></i></span></a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</nav>
		<aside id="colorlib-hero">
			<div class="flexslider">
				<ul class="slides">
			   	<li style="background-image: url(images/img_bg_2.jpg);">
			   		<div class="overlay"></div>
			   		<div class="container-fluid">
			   			<div class="row">
				   			<div class="col-md-6 col-sm-12 col-md-offset-3 slider-text">
				   				<div class="slider-text-inner text-center">
				   					<h1>Account</h1>
				   					<h2><span><a href="index.html">Home</a> | Edit Profile</span></h2>
				   				</div>
				   			</div>
				   		</div>
			   		</div>
			   	</li>
			  	</ul>
		  	</div>
		</aside>
		
	
	<div id="colorlib-contact">
			<div class="container">
				<div class="row">
					
					<div class="col-md-10 col-md-offset-1 animate-box">
						<h2>Edit Your Profile</h2>
						<?PHP
include "../entities/userH.php";
include "../core/user.php";
if (isset($_GET['userid'])){
	$userC=new userC();
    $result=$userC->recupererUser($_GET['userid']);
	foreach($result as $row){
		$userid=$row['userid'];
		$nom=$row['nom'];
		$prenom=$row['prenom'];
		$email=$row['email'];
		$password=$row['password'];
?>
						<form method="POST" >
						  
							<div class="row form-group">
								<div class="col-md-12">
									<!-- <label for="userid">Userid</label> -->
									<input type="number" id="email" min="1" max="999999999999999" class="form-control" placeholder="Your UserId" name="userid" value="<?PHP echo $userid ?>" readonly>
								</div>
							</div>
							
                            <div class="row form-group">
							    <div class="col-md-6">
									<!-- <label for="lname">Last Name</label> -->
									<input type="text" id="lname" maxlength="15" class="form-control" placeholder="Your lastname" name="nom" value="<?PHP echo $nom ?>" required>
								</div>
								<div class="col-md-6">
									<!-- <label for="fname">First Name</label> -->
									<input type="text" id="fname" maxlength="15" class="form-control" placeholder="Your firstname" name="prenom"  value="<?PHP echo $prenom ?>" required>
								</div>
								
							</div>
							
							<div class="row form-group">
								<div class="col-md-12">
									<!-- <label for="email">Email</label> -->
									<input type="email" id="email" maxlength="40" class="form-control" placeholder="Your email address" name="email" value="<?PHP echo $email ?>" required>
								</div>
							</div>
							
							<div class="row form-group">
								<div class="col-md-12">
									<!-- <label for="subject">Subject</label> -->
									<input type="password" id="subject" maxlength="15" class="form-control" placeholder="Password" name="password" value="<?PHP echo $password ?>" required>
								</div>
							</div>

							<div class="form-group">
								<input type="submit" name="modifier" value="Edit" class="btn btn-primary">
							</div>
							
					
						    <input type="hidden" name="userid1" value="<?PHP echo $_GET['userid'];?>">
						</form>		
						<?PHP
	}
}
if (isset($_POST['modifier'])){
	$user=new user($_POST['userid'],$_POST['nom'],$_POST['prenom'],$_POST['email'],$_POST['password']);
	$userC->modifierUser($user,$_POST['userid1']);
}
?>
					</div>
				</div>
			</div>
		</div>	
		
		
		<footer id="colorlib-footer">
			<div class="container">
				<div class="row row-pb-md">
					<div class="col-md-3 colorlib-widget">
						<h4>About AnyFitness Gym</h4>
						<p>A very modern gym where you can enjoy sports.</p>
						<p>
							<ul class="colorlib-social-icons">
								<li><a href="#"><i class="icon-twitter"></i></a></li>
								<li><a href="#"><i class="icon-facebook"></i></a></li>
								<li><a href="#"><i class="icon-linkedin"></i></a></li>
								<li><a href="#"><i class="icon-dribbble"></i></a></li>
							</ul>
						</p>
					</div>
					<div class="col-md-3 colorlib-widget">
						<h4>Quick Links</h4>
						<p>
							<ul class="colorlib-footer-links">
								<li><a href="#"><i class="icon-check"></i> About Us</a></li>
								<li><a href="#"><i class="icon-check"></i> Testimonials</a></li>
								<li><a href="#"><i class="icon-check"></i> Classes</a></li>
								<li><a href="#"><i class="icon-check"></i> Blog</a></li>
								<li><a href="edit.php?userid=<?PHP echo $_SESSION['userid']; ?>"><i class="icon-check"></i> Account Management</a></li>
								<li><a href="#"><i class="icon-check"></i> Contact</a></li>
							</ul>
						</p>
					</div>


					<div class="col-md-3 colorlib-widget">
						<h4>Contact Info</h4>
						<ul class="colorlib-footer-links">
							<li>L'aouina, <br> Residence X</li>
							<li><a href="tel://1234567920"><i class="icon-phone"></i> +216 28 000 000 </a></li>
							<li><a href="mailto:info@yoursite.com"><i class="icon-envelope"></i> AnyFitness@gmail.com</a></li>
							<li><a href="http://luxehotel.com"><i class="icon-location4"></i> AnyFitness.tn</a></li>
						</ul>
					</div>
				</div>
			</div>
			<div class="copy">
				<div class="container">
					<div class="row">
						<div class="col-md-12 text-center">
							<p>
								<small class="block">&copy; <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | <i class="icon-heart" aria-hidden="true"></i> by <a href="https://twitter.com/fieresaesports" target="_blank">Sidkom Firas</a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></small><br> 

							</p>
						</div>
					</div>
				</div>
			</div>
		</footer>
	</div>

	<div class="gototop js-top">
		<a href="#" class="js-gotop"><i class="icon-arrow-up2"></i></a>
	</div>
	
	<!-- jQuery -->
	<script src="js/jquery.min.js"></script>
	<!-- jQuery Easing -->
	<script src="js/jquery.easing.1.3.js"></script>
	<!-- Bootstrap -->
	<script src="js/bootstrap.min.js"></script>
	<!-- Waypoints -->
	<script src="js/jquery.waypoints.min.js"></script>
	<!-- Stellar Parallax -->
	<script src="js/jquery.stellar.min.js"></script>
	<!-- Flexslider -->
	<script src="js/jquery.flexslider-min.js"></script>
	<!-- Owl carousel -->
	<script src="js/owl.carousel.min.js"></script>
	<!-- Magnific Popup -->
	<script src="js/jquery.magnific-popup.min.js"></script>
	<script src="js/magnific-popup-options.js"></script>
	<!-- Counters -->
	<script src="js/jquery.countTo.js"></script>
	<!-- Main -->
	<script src="js/main.js"></script>

	</body>
</html>

