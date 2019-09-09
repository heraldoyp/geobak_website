<?php 
  require 'config/function.php';
  $faqs = query("SELECT * FROM faq ORDER BY id_faq ASC");
	$page_active = "faq.php";
?>

<!DOCTYPE HTML>
<html>
	<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Geobak | FAQ</title>
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

	<?php include("component/link_style.php") ?>

	</head>
	<body>
		
	<div class="fh5co-loader"></div>
	
	<div id="page">
		<?php include("component/navbar.php") ?>

		<aside id="fh5co-hero">
			<div class="flexslider">
				<ul class="slides">
					<li style="background-image: url(images/img_bg_4.jpg);">
						<div class="overlay-gradient"></div>
						<div class="container">
							<div class="row">
								<div class="col-md-8 col-md-offset-2 text-center slider-text">
									<div class="slider-text-inner">
										<h1 class="heading-section">FAQ<br>Frequently Asked Question</h1>
										<h2>"Certainty to find each other"</h2>
									</div>
								</div>
							</div>
						</div>
					</li>
					</ul>
				</div>
		</aside>

		<div id="fh5co-course">
			<div class="container">
				<div class="row animate-box">
					<div class="col-md-6 col-md-offset-3 text-center fh5co-heading">
						<h2>Berikut adalah beberapa pertanyaan yang sering diajukan kepada kami</h2>
					</div>
				</div>
				<div class="row">
          <?php foreach($faqs as $faqs_row): ?>
          <div class="col-md-12 animate-box">
						<div class="faq">
							<div class="desc">
								<h3><a href="#"><?php echo $faqs_row["faq_question"] ?></a></h3>
								<p><?php echo $faqs_row["faq_answer"] ?></p>
							</div>
						</div>
					</div>
          <?php endforeach; ?>
				</div>
			</div>
		</div>

		<div id="fh5co-counter" class="fh5co-counters" style="background-image: url(images/img_bg_4.jpg);" data-stellar-background-ratio="0.5">
			<div class="overlay"></div>
			<div class="row animate-box">
				<div class="col-md-6 col-md-offset-3 text-center fh5co-heading">
					<h2>Total Pengguna</h2>
				</div>
			</div>
			<div class="container">
				<div class="row">
					<div class="col-md-10 col-md-offset-1">
						<div class="row">
							<div class="col-md-6 col-sm-6 text-center animate-box">
								<span class="icon"><i class="icon-head"></i></span>
								<span class="fh5co-counter js-counter" data-from="0" data-to="50" data-speed="5000" data-refresh-interval="50"></span>
								<span class="fh5co-counter-label">Mitra</span>
							</div>
							<div class="col-md-6 col-sm-6 text-center animate-box">
								<span class="icon"><i class="icon-head"></i></span>
								<span class="fh5co-counter js-counter" data-from="0" data-to="100" data-speed="5000" data-refresh-interval="50"></span>
								<span class="fh5co-counter-label">User</span>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<?php include("component/footer.php") ?>
	</div>

	<div class="gototop js-top">
		<a href="#" class="js-gotop"><i class="icon-arrow-up"></i></a>
	</div>
	<?php include("component/link_script.php") ?>
	</body>
</html>

