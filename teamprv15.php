<?php
$title="Pravega Racing - PRV15 Team";
include_once('includes/head.php');
?>
<link rel="stylesheet" type="text/css" href="css/mycss/nothome.css">
<style>
.sub-header-banner-teams15{
		background-image:  url('img/general/bgs/teamprv15bg.jpg');
		background-position: 0px 15px;
	}
</style>
</head>
<body class="flagstone-about-us flagstone-parallax">
	<div class="page-pre-loader">
		<div class="page-pre-loader__container">
			<div class="page-pre-loader__effect"></div>
		</div>
	</div>

	<!-- End of page pre-loader -->

	<?php
	$navactive="team";
	require_once('includes/nav.php');
	?>

	<!-- End of site main header -->
	<section class="background-color-11 sub-header parallax">
		<div class="parallax__background sub-header-banner-teams15">
			<div class="layer"></div>
		</div>
		<div class="grid-container">
			<div class="grid-row">
				<div class="column-12 animated-parent">
					<h2 class="text-color-10 animated animate__fade-in-left-short text-center">Team</h2>
					<h5 class="text-color-10 animated animate__fade-in-right-short text-center">
						<span class="text-decor animated animate__roll-in"></span>The A-team who made it happen.
					</h5>
				</div>
			</div>
		</div>
	</section>
	<div class="container">
		<div class="row">
			<div class="col-md-12 col-xs-12">
				<section class="first-section margin-bottom-20">
					<div class="grid-container-fluid">
						<h1 class="text-center">PRV 15 - Team</h1>
						<div class="roww member-prv16-wrapper">
							<ul class="teamprv-ul col-sm-offset-3 col-sm-4 teamprv-ul-first">
								<?php
								$team_prv16=["Kushagra Sinha","Shyam Mohan","Sidharth Dahiya",
								"Rohan Patel","Rishabh Rathi","Sri Vaishnav",
								"Tanmay Prasad","Ashwin Sande","Yash Chhabra",
								"Arshmeet Singh","Amit Karmakar","Dheeraj Nandhuri",
								"Naman Gupta","Vyom Goutam","Tribhuvan Singh",
								"Rishabh Bahuguna","Ritesh Tekriwal","Arjun Wadhwa",
								"Rohan Gupta","Sehdev Sikka","Kamal Chaghla",
								"Aditya Tiwary","Arsel Hasan"
								];
								$no_prv16=count($team_prv16);
								for($i=0;$i<$no_prv16/2;$i++)
								{
									$name=$team_prv16[$i];
									echo "<li>".$name."</li>";
								}
								?>
								</ul>
								<ul class="teamprv-ul col-sm-4">
								<?php
								
								$no_prv16=count($team_prv16);
								for($i=$no_prv16/2 +1;$i<$no_prv16;$i++)
								{
									$name=$team_prv16[$i];
									echo "<li>".$name."</li>";
								}
								?>
								</ul>
								</div>
							</div>
						</section>
					</div>
				</div>
			</div>
			<a href="#" class="back-to-top--floating"><i class="ion-ios-arrow-up"></i></a>
			<div class="col-xs-12 padding-left-0 padding-right-0">
				<?php
				include_once("includes/footer.php");
				?>
			</div>
		</body>
		</html>