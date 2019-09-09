<?php
	require 'config/function.php';
	$page_active = "kontak.php";

?>

<!DOCTYPE HTML>
<html>
	<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Geobak | Kontak</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="Free HTML5 Website Template by freehtml5.co" />
	<meta name="keywords" content="free website templates, free html5, free template, free bootstrap, free website template, html5, css3, mobile first, responsive" />
	<meta name="author" content="freehtml5.co" />

	<!-- 
	//////////////////////////////////////////////////////

	FREE HTML5 TEMPLATE 
	DESIGNED & DEVELOPED by FreeHTML5.co
		
	Website: 		http://freehtml5.co/
	Email: 			info@freehtml5.co
	Twitter: 		http://twitter.com/fh5co
	Facebook: 		https://www.facebook.com/fh5co

	//////////////////////////////////////////////////////
	 -->

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

	<?php include("component/link_style.php"); ?>

	</head>
	<body>
		
	<div class="fh5co-loader"></div>
	
	<div id="page">
	<?php include("component/navbar.php"); ?>
	
		<aside id="fh5co-hero">
			<div class="flexslider">
				<ul class="slides">
					<li style="background-image: url(images/img_bg_4.jpg);">
						<div class="overlay-gradient"></div>
						<div class="container">
							<div class="row">
								<div class="col-md-8 col-md-offset-2 text-center slider-text">
									<div class="slider-text-inner">
										<h1 class="heading-section">Hubungi Kami</h1>
										<!-- <h2>Free html5 templates Made by <a href="http://freehtml5.co/" target="_blank">freehtml5.co</a></h2> -->
									</div>
								</div>
							</div>
						</div>
					</li>
					</ul>
				</div>
		</aside>

		<div id="fh5co-contact">
			<div class="container">
				<div class="row">
					<div class="col-md-5 col-md-push-1 animate-box">
						
						<div class="fh5co-contact-info">
							<h3>Informasi</h3>
							<ul>
								<li class="address">RT.10/RW.5, Pesanggrahan, Kec. Pesanggrahan, <br>Kota Jakarta Selatan, Daerah Khusus Ibukota Jakarta <br>12320</li>
								<li class="phone"><a href="tel://1234567920">+62 896 9391 9042</a></li>
								<li class="email"><a href="mailto:info@yoursite.com">www.geobakindonesia.com</a></li>
								<!-- <li class="url"><a href="http://freehtml5.co">freeHTML5.co</a></li> -->
							</ul>
						</div>

					</div>
					<div class="col-md-6 animate-box">
						<h3>Bantuan</h3>
						<form action="#">
							<div class="row form-group">
								<div class="col-md-6">
									<!-- <label for="fname">First Name</label> -->
									<input type="text" id="fname" class="form-control" placeholder="Nama Depan">
								</div>
								<div class="col-md-6">
									<!-- <label for="lname">Last Name</label> -->
									<input type="text" id="lname" class="form-control" placeholder="Nama Belakang">
								</div>
							</div>

							<div class="row form-group">
								<div class="col-md-12">
									<!-- <label for="email">Email</label> -->
									<input type="text" id="email" class="form-control" placeholder="Alamat email">
								</div>
							</div>

							<div class="row form-group">
								<div class="col-md-12">
									<!-- <label for="subject">Subject</label> -->
									<input type="text" id="subject" class="form-control" placeholder="Tulis Judul anda disini">
								</div>
							</div>

							<div class="row form-group">
								<div class="col-md-12">
									<!-- <label for="message">Message</label> -->
									<textarea name="message" id="message" cols="30" rows="10" class="form-control" placeholder="Tulis Pesan anda disini"></textarea>
								</div>
							</div>
							<div class="form-group">
								<input type="submit" value="Kirim Pesan" class="btn btn-primary">
							</div>

						</form>		
					</div>
				</div>
				
			</div>
		</div>
		<div id="map" class="fh5co-map">
			<iframe
				width="600"
				height="450"
				frameborder="0" style="border:0"
				src="https://www.google.com/maps/embed/v1/place?q=Berkah%20Jaya%20Mart%2C%20RT.10%2FRW.5%2C%20Pesanggrahan%2C%20Kec.%20Pesanggrahan%2C%20Kota%20Jakarta%20Selatan%2C%20Daerah%20Khusus%20Ibukota%20Jakarta%2012320&key=AIzaSyA94vs4dq4EN3jnZsgtwqkMbcwFp0qj9Ws" allowfullscreen>
			</iframe>
		</div>		

	<?php include("component/footer.php"); ?>
	</div>

	<div class="gototop js-top">
		<a href="#" class="js-gotop"><i class="icon-arrow-up"></i></a>
	</div>
	
	<?php include("component/link_script.php") ?>
	</body>
</html>

