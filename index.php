<?php
include_once('includes/head.php');
?>

<link rel="stylesheet" type="text/css" href="font-awesome/css/font-awesome.css">
<link rel="stylesheet" type="text/css" href="css/mycss/mybootstrap.css">
<link rel="stylesheet" type="text/css" href="css/mycss/slider1.css" />
<link rel="stylesheet" type="text/css" href="css/mycss/slider2.css" />
<script type="text/javascript" src="js/min/myjs/modernizr.custom.86080.js"></script>

<link rel="stylesheet" href="css/fonts.css">
<link rel="stylesheet" href="css/style.css">

<link rel="stylesheet" href="css/sub-page-styles.css">

		<!--
		Remember to include the theme that you are using for the homepage,
		on your sub pages, this will ensure your typography and colour
		scheme is used consistently throughout your site.
	-->

	<!-- jQuery -->
	<script src="js/min/jquery-min.js"></script>

	<!-- Default Fonts -->
	<link href="https://fonts.googleapis.com/css?family=Lato:100,100i,300,300i,400,400i,700,700i,900,900i%7CSource+Sans+Pro:200,200i,300,300i,400,400i,600,600i,700,700i,900,900i" rel="stylesheet">

	<link rel="stylesheet" type="text/css" href="css/mycss/mystyle.css" />

</head>
<body class="flagstone-splash">
	<!--facebook plugin-->
	<div id="fb-root"></div>
	<script>
	(function(d, s, id) {
		var js, fjs = d.getElementsByTagName(s)[0];
		if (d.getElementById(id)) return;
		js = d.createElement(s); js.id = id;
		js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.7";
		fjs.parentNode.insertBefore(js, fjs);
	}(document, 'script', 'facebook-jssdk'));
	</script>
	<!--facebook plugin end-->
	<div class="page-pre-loader">
		<div class="page-pre-loader__container">
			<div class="page-pre-loader__effect"></div>
		</div>
	</div>

	<!-- End of page pre-loader -->

	<?php
	require_once('includes/nav.php');
	?>

	<!-- End of site main header -->

	<section class="borderr">
		<div class="hero-unit hero-unit--banner-4"  id="page">
			<ul class="cb-slideshow">
				<li><span>Image 01</span></li>
				<li><span>Image 02</span></li>
				<li><span>Image 03</span></li>
				<li><span>Image 04</span></li>
				<li><span>Image 05</span></li>
				<li><span>Image 06</span></li>
				
			</ul>
			<div class="hero-unit__content">
				<div class="grid-container">
					<div class="grid-row">
						<div class="column-12 text-center animated-parent">
							<h1 class="text-color-10 font-size-xxlrg animated animate__fade-in-down-short">Beauty, Elegance, Style...</h1>
							<h5 class="text-color-10 text-uppercase animated animate__fade-in-up-short">
								Essential ingredients for any startup.
							</h5>
						</div>
					</div>
				</div>
			</div>
			<a data-scroll href="#firstsection"><span class="scroll-pointer"></span></a>
		</div>
	</section>

	<!-- End of section -->
	<section id="firstsection">
		<div class="grid-container-fluid margin-top-100 margin-bottom-100">
			<div class="grid-row">
				<div class="column-8">
					<h3 class="text-left">Fifty Four, Pravega Racing</h3>
					<p class="text-left padding-10">We are a team of engineers who seek to enhance the learning experience of the student community at VIT University by implementation of engineering fundamentals within the context of building a formula style Racecar. We annually take part in the Formula Student competitions organised by Society of Automotive Engineers (SAE). We strive to achieve a steady growth in the Formula Student Circuit by focusing on world class engineering practices and institutionalising innovation.</p>
				</div>
				<div class="column-4 fbdiv">
					<!--facebook plugin-->
					<div class="fb-page" data-href="https://www.facebook.com/pravegaracing/?fref=ts" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="false">
						<blockquote cite="https://www.facebook.com/pravegaracing/?fref=ts" class="fb-xfbml-parse-ignore">
							<a href="https://www.facebook.com/pravegaracing/?fref=ts">Pravega Racing</a>
						</blockquote>
					</div>
					<!-- <iframe src="https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fwww.facebook.com%2Fpravegaracing%2F%3Ffref%3Dts&tabs=timeline&small_header=false&adapt_container_width=true&hide_cover=false&show_facepile=true&appId" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true"></iframe> -->
				</div>
			</div>
		</div>
	</section>
	<section>
		<div class="grid-container-fluid margin-top-100 margin-bottom-100">
			<div class="grid-row">
				<div class="column-2 text-center">
					<div>&nbsp;</div>
					<img src="img/general/chancellor.png" class="img-circle chancellor-img valign-m text-center">

				</div>
				<div class="column-8">
					<p>
						<div class="text-left"><i class="fa fa-quote-left fa-2x" aria-hidden="true"></i></div>
						I am happy and proud to inform you that Pravega Racing is the official Formula SAE (FSAE) team of VIT University. The team comprises of a group of able and resolute students of our institution from all academic divisions aiming for excellence. Pravega Racing is among the top three Formula SAE teams of India.
						<div class="text-right"><i class="fa fa-quote-right fa-2x" aria-hidden="true"></i></div>
					</p>
					<p><b>
						Dr. G Vishwanathan
						<br>Founder and Chancellor, VIT University
						<br>Former Member of Parliament
						<br>Former Minister, Govt. of Tamil Nadu
						<br>President, Education Promotion Society of India, New Delhi
					</b></p>
				</div>
			</div>
		</div>
	</section>
	<section id="intro-text">
		<div class="grid-container margin-top-100 margin-bottom-100">
			<div class="grid-row">
				<div class="column-12 text-left">
					<h2>Recent Events</h2>
				</div>
			</div>
		</div>
	</section>

	<!-- End of section -->

	<section>
		<div class="grid-container-fluid">
			<div class="grid-row animated-parent" data-appear-top-offset="-300">
				<div class="column-4 animated animate__fade-in-down-short">
					<div class="overlay homepage-preview">
						<div class="overlay__background"></div>
						<div class="overlay__content text-center text-color-2">
							<span class="overlay__content-heading">Design Studio</span>
							<span class="overlay__content-text">
								<a class="link text-uppercase" href="design-studio.html">View this homepage</a>
							</span>
						</div>
						<img src="img/general/overview--design-studio.jpg" alt="" class="overlay__image overlay__image--skew">
					</div>
				</div>
				<div class="column-4 animated animate__fade-in-down-short">
					<div class="overlay homepage-preview">
						<div class="overlay__background"></div>
						<div class="overlay__content text-center text-color-2">
							<span class="overlay__content-heading">Interior Design</span>
							<span class="overlay__content-text">
								<a class="link text-uppercase" href="interior-design.html">View this homepage</a>
							</span>
						</div>
						<img src="img/general/overview--interior-design.jpg" alt="" class="overlay__image overlay__image--skew">
					</div>
				</div>
				<div class="column-4 animated animate__fade-in-down-short">
					<div class="overlay homepage-preview">
						<div class="overlay__background"></div>
						<div class="overlay__content text-center text-color-2">
							<span class="overlay__content-heading">Photography Studio</span>
							<span class="overlay__content-text">
								<a class="link text-uppercase" href="photography.html">View this homepage</a>
							</span>
						</div>
						<img src="img/general/overview--photography.jpg" alt="" class="overlay__image overlay__image--skew">
					</div>
				</div>
			</div>
		</div>
	</section>

	<!-- End of section -->

	<section class="margin-top-30 margin-bottom-100">
		<div class="grid-container-fluid animated-parent" data-appear-top-offset="-300">
			<div class="grid-row">
				<div class="column-4 animated animate__fade-in-down-short">
					<div class="overlay homepage-preview">
						<div class="overlay__background"></div>
						<div class="overlay__content text-center text-color-2">
							<span class="overlay__content-heading">Architects</span>
							<span class="overlay__content-text">
								<a class="link text-uppercase" href="architect.html">View this homepage</a>
							</span>
						</div>
						<img src="img/general/overview--architect.jpg" alt="" class="overlay__image overlay__image--skew">
					</div>
				</div>
				<div class="column-4 animated animate__fade-in-down-short">
					<div class="overlay homepage-preview">
						<div class="overlay__background"></div>
						<div class="overlay__content text-center text-color-2">
							<span class="overlay__content-heading">Coffee Shop</span>
							<span class="overlay__content-text">
								<a class="link text-uppercase" href="coffee-shop.html">View this homepage</a>
							</span>
						</div>
						<img src="img/general/overview--coffee-shop.jpg" alt="" class="overlay__image overlay__image--skew">
					</div>
				</div>
				<div class="column-4 animated animate__fade-in-down-short">
					<div class="overlay homepage-preview">
						<div class="overlay__background"></div>
						<div class="overlay__content text-center text-color-2">
							<span class="overlay__content-heading">Artist</span>
							<span class="overlay__content-text">
								<a class="link text-uppercase" href="artist.html">View this homepage</a>
							</span>
						</div>
						<img src="img/general/overview--artist.jpg" alt="" class="overlay__image overlay__image--skew">
					</div>
				</div>
			</div>
		</div>
	</section>
<?php
include_once("includes/footer.php");
?>


<a href="#" class="back-to-top--floating"><i class="ion-ios-arrow-up"></i></a>

<!-- End of section -->
<script src="https://maps.google.com/maps/api/js?key=AIzaSyAz0cXZ6M5SiJMoqPT9qNXSLI2GiJM2SmM"></script>
<script src="js/min/main-min.js"></script>
<script src="js/min/scripts-min.js"></script>

</body>
</html>