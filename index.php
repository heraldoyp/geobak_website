<?php
	require 'config/function.php';
	$page_active = "index.php";
	
	$news = query("SELECT * FROM article ORDER BY id_article DESC");
	// foreach ($news as $row) {
	// 	echo $row["id_article"];
	// 	echo $row["title_article"];
	// 	echo $row["content_article"];
	// }
?>

<!DOCTYPE HTML>
<html>
	<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Geobak | Beranda</title>
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
	
	<style>
		/* #anjingemangcss h2{
			color: red;
		} */
	</style>
	<?php include("component/link_style.php"); ?>
	
	</head>
	<body>
		
	<div class="fh5co-loader"></div>
	
	<div id="page">
		<!-- Navbar	 -->
		<?php include("component/navbar.php"); ?>
		
		<aside id="fh5co-hero">
			<div class="flexslider">
				<ul class="slides">
					<li style="background-image: url(images/img_bg_1.jpg);">
						<div class="overlay-gradient"></div>
						<div class="container">
							<div class="row">
								<div class="col-md-8 col-md-offset-2 text-center slider-text">
									<div class="slider-text-inner">
										<h1>Geobak Indonesia Mempersembahkan Layanan Dalam Mencari pedagang keliling</h1>
										<h2>Certainty to find each other</h2>
										<p><a class="btn btn-primary btn-lg" href="tentang_kami.php">Pelajari lebih lanjut</a></p>
									</div>
								</div>
							</div>
						</div>
					</li>
					<li style="background-image: url(images/img_bg_2.jpg);">
						<div class="overlay-gradient"></div>
						<div class="container">
							<div class="row">
								<div class="col-md-8 col-md-offset-2 text-center slider-text">
									<div class="slider-text-inner">
										<h1>Gabut dan Lapar?</h1>
										<h2>Gunakan Smartphone kalian untuk menemukan pedagang keliling disekitar kalian. Dan dapatkan layanan terbaik dengan harga terjangkau bersama kami.</h2>
										<p><a class="btn btn-primary btn-lg btn-learn" href="tentang_kami.php">Pelajari lebih lanjut</a></p>
									</div>
								</div>
							</div>
						</div>
					</li>   	
				</ul>
			</div>
		</aside>

		<div id="fh5co-course-categories">
			<div class="container">
				<div class="row animate-box">
					<div class="col-md-6 col-md-offset-3 text-center fh5co-heading">
						<h2>mengapa harus geobak?</h2>
						<p>Berikut layanan yang kami berikan kepada anda demi kepuasan anda dalam beraktifitas</p>
					</div>
				</div>
				<div class="row">
					<div class="col-md-3 col-sm-6 text-center animate-box">
						<div class="services">
							<span class="icon">
								<i class="icon-location-outline"></i>
							</span>
							<div class="desc">
								<h3><a href="#">Pasti</a></h3>
								<p>Gak cuma gebetan doang yang butuh kepastian. Pedagang keliling juga butuh kepastian. Dengan geobak, pedagang keliling tidak perlu lagi membuang banyak waktu dan tenaga untuk mencari pembeli</p>
							</div>
						</div>
					</div>
					<div class="col-md-3 col-sm-6 text-center animate-box">
						<div class="services">
							<span class="icon">
								<i class="icon-clock3"></i>
							</span>
							<div class="desc">
								<h3><a href="#">Cepat</a></h3>
								<p>
									Kebutuhan pedagang keliling yang tidak terduga sangat menyulitkan
									masyarakat dalam mencari. Sekarang masalah tersebut tidak lagi terjadi
									dengan menggunakan aplikasi Geobak.
								</p>
							</div>
						</div>
					</div>
					<div class="col-md-3 col-sm-6 text-center animate-box">
						<div class="services">
							<span class="icon">
								<i class="icon-banknote"></i>
							</span>
							<div class="desc">
								<h3><a href="#">Murah</a></h3>
								<p>
									Pesan makanan dari pedagang keliling dengan harga yang sangat terjangkau
									untuk seluruh kalangan masyarakat.
								</p>
							</div>
						</div>
					</div>
					<div class="col-md-3 col-sm-6 text-center animate-box">
						<div class="services">
							<span class="icon">
								<i class="icon-messages"></i>
							</span>
							<div class="desc">
								<h3><a href="#">Tanpa Ragu</a></h3>
								<p>
									Fitur yang akan disematkan pada aplikasi nanti dapat membantu
									pedagang dengan pembeli untuk dapat berkomunikasi dengan baik.
								</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

		<div id="fh5co-counter" class="fh5co-counters" style="background-image: url(images/img_bg_4.jpg);" data-stellar-background-ratio="0.5">
			<div class="overlay"></div>
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

		<div id="fh5co-testimonial" style="background-image: url(images/school.jpg);">
			<div class="overlay"></div>
			<div class="container">
				<div class="row animate-box">
					<div class="col-md-6 col-md-offset-3 text-center fh5co-heading">
						<h2><span>Testimoni</span></h2>
					</div>
				</div>
				<div class="row">
					<div class="col-md-10 col-md-offset-1">
						<div class="row animate-box">
							<div class="owl-carousel owl-carousel-fullwidth">
								<div class="item">
									<div class="testimony-slide active text-center">
										<div class="user" style="background-image: url(images/person1.jpg);"></div>
										<span>Mary Walker<br><small>Students</small></span>
										<blockquote>
											<p>&ldquo;Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.&rdquo;</p>
										</blockquote>
									</div>
								</div>
								<div class="item">
									<div class="testimony-slide active text-center">
										<div class="user" style="background-image: url(images/person2.jpg);"></div>
										<span>Mike Smith<br><small>Students</small></span>
										<blockquote>
											<p>&ldquo;Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.&rdquo;</p>
										</blockquote>
									</div>
								</div>
								<div class="item">
									<div class="testimony-slide active text-center">
										<div class="user" style="background-image: url(images/person3.jpg);"></div>
										<span>Rita Jones<br><small>Teacher</small></span>
										<blockquote>
											<p>&ldquo;Far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.&rdquo;</p>
										</blockquote>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

		<div id="fh5co-blog">
			<div class="container">
				<div class="row animate-box">
					<div class="col-md-8 col-md-offset-2 text-center fh5co-heading">
						<h2>Artikel &amp; Berita</h2>
					</div>
				</div>
				<div class="row">
					<?php foreach($news as $news_row): ?>
					<div class="col-lg-4 col-md-4">
						<div class="fh5co-blog animate-box">
							<a href="#" class="blog-img-holder" style="background-image: url(images/project-1.jpg);"></a>
							<div class="blog-text">
								<h3><a href="#"><?php echo $news_row["title_article"] ?></a></h3>
								<span class="posted_on"><?php echo $news_row["date_add"] ?></span>
								<!-- <span class="comment"><a href="">21<i class="icon-speech-bubble"></i></a></span> -->
								<p><?php echo $news_row["content_article"] ?></p>
							</div> 
						</div>
					</div>
					<?php endforeach; ?>
				</div>
			</div>
		</div>

		<div id="fh5co-gallery" class="fh5co-bg-section">
			<div class="row text-center">
				<h2><span>Instagram Gallery</span></h2>
			</div>
			<div class="row">
				<div class="col-md-3 col-padded">
					<a href="#" class="gallery" style="background-image: url(images/project-5.jpg);"></a>
				</div>
				<div class="col-md-3 col-padded">
					<a href="#" class="gallery" style="background-image: url(images/project-2.jpg);"></a>
				</div>
				<div class="col-md-3 col-padded">
					<a href="#" class="gallery" style="background-image: url(images/project-3.jpg);"></a>
				</div>
				<div class="col-md-3 col-padded">
					<a href="#" class="gallery" style="background-image: url(images/project-4.jpg);"></a>
				</div>
			</div>
		</div>
		<!-- Footer -->
		<?php include("component/footer.php") ?>
	</div>

	<div class="gototop js-top">
		<a href="#" class="js-gotop"><i class="icon-arrow-up"></i></a>
	</div>
	
	<?php include("component/link_script.php") ?>
	</body>
</html>

