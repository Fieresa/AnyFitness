<?PHP
include "../entities/commandes.php";
include "../core/commandesc.php";
if (isset($_GET['numcmd'])){
	$commandesc=new commandesc();
    $result=$commandesc->recuperercommandes($_GET['numcmd']);
?>
<!DOCTYPE HTML>
<html>
	<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Robust Template</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="" />
	<meta name="keywords" content="" />
	<meta name="author" content="" />

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
		
	<div class="colorlib-loader"></div>

	<div id="page">
		<nav class="colorlib-nav" role="navigation">
			<div class="top-menu">
				<div class="container">
					<div class="row">
						<div class="col-md-2">
							<div id="colorlib-logo"><a href="index.html">Robust</a></div>
						</div>
						<div class="col-md-10 text-right menu-1">
							<ul>
								<li><a href="index.html">Home</a></li>
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
								<li class=""><a href="blog.html">Blog</a></li>
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
				   						<link rel="stylesheet" href="A.css">
				   					<h1>Modifier commande</h1>
				   					<table border="1" width="100%" id="tablepanier">

<HTML>
<head>
</head>
<body>
<?PHP
	foreach($result as $row){
		$numcmd=$row['numcmd'];
		$client=$row['client'];
		$produit=$row['produit'];
		$prixu=$row['prixu'];
		$quantite=$row['quantite'];
		$date=$row['date'];
		$heure=$row['heure'];
		$panier=$row['panier'];
?>
<form method="POST">
<table>
<caption>Modifier commandes</caption>
<tr>
<td>numcmd</td>
<td><input type="number" name="numcmd" value="<?PHP echo $numcmd ?>"></td>
</tr>
<tr>
<td>client</td>
<td><input type="number" name="client" value="<?PHP echo $client ?>"></td>
</tr>
<tr>
<td>produit</td>
<td><input type="number" name="produit" value="<?PHP echo $produit ?>"></td>
</tr>
<tr>
<td>prixu</td>
<td><input type="number" name="prixu" value="<?PHP echo $prixu ?>"></td>
</tr>
<td>quantite</td>
<td><input type="number" name="quantite" value="<?PHP echo $quantite ?>"></td>
</tr>
<tr>
<td>date</td>
<td><input type="date" name="date" value="<?PHP echo $date ?>"></td>
</tr>
<td>heure</td>
<td><input type="time" name="heure" value="<?PHP echo $heure ?>"></td>
</tr>
<td>panier</td>
<td><input type="numcmd" name="panier" value="<?PHP echo $panier ?>"></td>
</tr>
<tr>
<td></td>
<td><input type="submit" name="modifier" value="modifier"></td>
</tr>
<tr>
<td></td>
<td><input type="hidden" name="numcmd_ini" value="<?PHP echo $_GET['numcmd'];?>"></td>
</tr>
</table>
</form>
<?PHP
	}
}
if (isset($_POST['modifier'])){
	$commandes=new commandes($_POST['numcmd'],$_POST['client'],$_POST['produit'],$_POST['prixu'],$_POST['quantite'],$_POST['date'],$_POST['heure'],$_POST['panier']);
	$commandesc->modifiercommandes($commandes,$_POST['numcmd_ini']);
	echo $_POST['numcmd_ini'];
	header('Location: affichercommandes.php');
}
?>
</body>
</HTMl>


<!--				   					<h2><span><a href="index.html">Home</a> | Blog</span></h2> -->
				   				</div>
				   			</div>
				   		</div>
			   		</div>
			   	</li>
			  	</ul>
		  	</div>
		</aside>
		
	<!--	<div class="colorlib-blog">




			<div class="container">
				<div class="row">
					<div class="col-md-4 animate-box">
						<article class="article-entry">
							<a href="blog.html" class="blog-img" style="background-image: url(images/blog-1.jpg);">
								<p class="meta"><span class="day">18</span><span class="month">Apr</span></p>
							</a>
							<div class="desc">
								<p class="admin"><span>Posted by:</span> <span>Noah Henderson</span></p>
								<h2><a href="blog.html">Need workout motivation</a></h2>
								<p>Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life</p>
							</div>
						</article>
					</div>
					<div class="col-md-4 animate-box">
						<article class="article-entry">
							<a href="blog.html" class="blog-img" style="background-image: url(images/blog-2.jpg);">
								<p class="meta"><span class="day">18</span><span class="month">Apr</span></p>
							</a>
							<div class="desc">
								<p class="admin"><span>Posted by:</span> <span>Noah Henderson</span></p>
								<h2><a href="blog.html">Need workout motivation</a></h2>
								<p>Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life</p>
							</div>
						</article>
					</div>
					<div class="col-md-4 animate-box">
						<article class="article-entry">
							<a href="blog.html" class="blog-img" style="background-image: url(images/blog-3.jpg);">
								<p class="meta"><span class="day">18</span><span class="month">Apr</span></p>
							</a>
							<div class="desc">
								<p class="admin"><span>Posted by:</span> <span>Noah Henderson</span></p>
								<h2><a href="blog.html">Need workout motivation</a></h2>
								<p>Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life</p>
							</div>
						</article>
					</div>
				</div>
				<div class="row">
					<div class="col-md-4 animate-box">
						<article class="article-entry">
							<a href="blog.html" class="blog-img" style="background-image: url(images/blog-4.jpg);">
								<p class="meta"><span class="day">18</span><span class="month">Apr</span></p>
							</a>
							<div class="desc">
								<p class="admin"><span>Posted by:</span> <span>Noah Henderson</span></p>
								<h2><a href="blog.html">Need workout motivation</a></h2>
								<p>Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life</p>
							</div>
						</article>
					</div>
					<div class="col-md-4 animate-box">
						<article class="article-entry">
							<a href="blog.html" class="blog-img" style="background-image: url(images/blog-5.jpg);">
								<p class="meta"><span class="day">18</span><span class="month">Apr</span></p>
							</a>
							<div class="desc">
								<p class="admin"><span>Posted by:</span> <span>Noah Henderson</span></p>
								<h2><a href="blog.html">Need workout motivation</a></h2>
								<p>Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life</p>
							</div>
						</article>
					</div>
					<div class="col-md-4 animate-box">
						<article class="article-entry">
							<a href="blog.html" class="blog-img" style="background-image: url(images/blog-6.jpg);">
								<p class="meta"><span class="day">18</span><span class="month">Apr</span></p>
							</a>
							<div class="desc">
								<p class="admin"><span>Posted by:</span> <span>Noah Henderson</span></p>
								<h2><a href="blog.html">Need workout motivation</a></h2>
								<p>Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life</p>
							</div>
						</article>
					</div>
				</div>
			</div> 
		</div>-->

	
		<div id="colorlib-subscribe" class="subs-img" style="background-image: url(images/img_bg_2.jpg);" data-stellar-background-ratio="0.5">
			<div class="overlay"></div>
			<div class="container">
				<div class="row">
					<div class="col-md-8 col-md-offset-2 text-center colorlib-heading animate-box">
						<h2>Subscribe Newsletter</h2>
						<p>Subscribe our newsletter and get latest update</p>
					</div>
				</div>
				<div class="row animate-box">
					<div class="col-md-6 col-md-offset-3">
						<div class="row">
							<div class="col-md-12">
							<form class="form-inline qbstp-header-subscribe">
								<div class="col-three-forth">
									<div class="form-group">
										<input type="text" class="form-control" id="email" placeholder="Enter your email">
									</div>
								</div>
								<div class="col-one-third">
									<div class="form-group">
										<button type="submit" class="btn btn-primary">Subscribe Now</button>
									</div>
								</div>
							</form>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<footer id="colorlib-footer">
			<div class="container">
				<div class="row row-pb-md">
					<div class="col-md-3 colorlib-widget">
						<h4>About Robust Gym</h4>
						<p>Far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics</p>
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
								<li><a href="#"><i class="icon-check"></i> Blog</a></li>
								<li><a href="#"><i class="icon-check"></i> Contact</a></li>
							</ul>
						</p>
					</div>

					<div class="col-md-3 colorlib-widget">
						<h4>Recent Post</h4>
						<div class="f-blog">
							<a href="blog.html" class="blog-img" style="background-image: url(images/blog-1.jpg);">
							</a>
							<div class="desc">
								<h2><a href="blog.html">Tips for sexy body</a></h2>
								<p class="admin"><span>18 April 2018</span></p>
							</div>
						</div>
						<div class="f-blog">
							<a href="blog.html" class="blog-img" style="background-image: url(images/blog-2.jpg);">
							</a>
							<div class="desc">
								<h2><a href="blog.html">Tips for sexy body</a></h2>
								<p class="admin"><span>18 April 2018</span></p>
							</div>
						</div>
						<div class="f-blog">
							<a href="blog.html" class="blog-img" style="background-image: url(images/blog-3.jpg);">
							</a>
							<div class="desc">
								<h2><a href="blog.html">Tips for sexy body</a></h2>
								<p class="admin"><span>18 April 2018</span></p>
							</div>
						</div>
					</div>

					<div class="col-md-3 colorlib-widget">
						<h4>Contact Info</h4>
						<ul class="colorlib-footer-links">
							<li>291 South 21th Street, <br> Suite 721 New York NY 10016</li>
							<li><a href="tel://1234567920"><i class="icon-phone"></i> + 1235 2355 98</a></li>
							<li><a href="mailto:info@yoursite.com"><i class="icon-envelope"></i> info@yoursite.com</a></li>
							<li><a href="http://luxehotel.com"><i class="icon-location4"></i> yourwebsite.com</a></li>
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
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="icon-heart" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></small><br> 
								<small class="block">Demo Images: <a href="http://unsplash.co/" target="_blank">Unsplash</a>, <a href="http://pexels.com/" target="_blank">Pexels</a></small>
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

