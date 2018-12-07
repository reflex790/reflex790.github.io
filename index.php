<!DOCTYPE html>
<html lang="en">

<head>

<meta charset="utf-8">
<meta name="viewport"
	content="width=device-width, initial-scale=1, shrink-to-fit=no">
<meta name="description" content="">
<meta name="author" content="">

<title>NPNC</title>

<!-- Bootstrap core CSS -->
<link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

<!-- Custom fonts for this template -->
<link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Varela+Round"
	rel="stylesheet">
<link
	href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
	rel="stylesheet">

<!-- Custom styles for this template -->
<link href="css/grayscale.css" rel="stylesheet">

</head>

<body id="page-top">

	<!-- Navigation -->
	<nav class="navbar navbar-expand-lg navbar-light fixed-top"
		id="mainNav">
		<div class="container">
			<a class="navbar-brand js-scroll-trigger" href="#page-top">No Pay No
				Cure</a>
			<button class="navbar-toggler navbar-toggler-right" type="button"
				data-toggle="collapse" data-target="#navbarResponsive"
				aria-controls="navbarResponsive" aria-expanded="false"
				aria-label="Toggle navigation">
				Menu <i class="fas fa-bars"></i>
			</button>
			<div class="collapse navbar-collapse" id="navbarResponsive">
				<ul class="navbar-nav ml-auto">
					<li class="nav-item"><a class="nav-link js-scroll-trigger"
						href="#about">About</a></li>
					<li class="nav-item"><a class="nav-link js-scroll-trigger"
						href="#solutions">Solutions</a></li>
					<li class="nav-item"><a class="nav-link js-scroll-trigger"
						href="#news">News</a></li>
					<li class="nav-item"><a class="nav-link js-scroll-trigger"
						href="#team">Team</a></li>
					<li class="nav-item"><a class="nav-link js-scroll-trigger"
						href="#signup">Contact</a></li>
				</ul>
			</div>
		</div>
	</nav>

	<!-- Header -->
	<header class="masthead">
		<div class="container d-flex h-100 align-items-center">
			<div class="mx-auto text-center">
				<h1 class="mx-auto my-0 text-uppercase">NPNC</h1>
				<h2 class="text-white-50 mx-auto mt-2 mb-5">Smart invoicing and
					collection.</h2>
				<a href="#about" class="btn btn-primary js-scroll-trigger">Learn
					more</a>
			</div>
		</div>
	</header>

	<!-- About Section -->
	<section id="about" class="about-section text-center">
		<div class="container">
			<div class="row">
				<div class="col-lg-8 mx-auto">
					<h2 class="text-white mb-4">ABOUT NPNC</h2>
					<p class="text-white-50">
						NPNC provides innovative credit management solutions for high
						volume invoicing. We focus mainly on small consumer and business
						receivables. Our network consists of experienced credit managers,
						collection specialists and legal specialists. We believe current
						debt collection processes can be greatly improved with added
						transparency.<br> <br> We provide a transparent way to collect
						overdue invoices. Settlement is exactly as programmed, without
						fraud and the possibility of tampering.
					</p>
				</div>
			</div>
			<!--  <img src="img/ipad.png" class="img-fluid" alt=""> -->
		</div>
	</section>

	<!-- Projects Section -->
	<section id="solutions" class="projects-section bg-light">
		<div class="container">

			<!-- Featured Project Row -->
			<!--  <div class="row align-items-center no-gutters mb-4 mb-lg-5">
				<div class="col-xl-8 col-lg-7">
					<img class="img-fluid mb-3 mb-lg-0" src="img/intro-bg.jpg" alt="">
				</div>-->
			<div class="col-lg-8 mx-auto">
				<div class="text-center">
					<h2>Solutions</h2>
					<p class="text-black-50 mb-0">
						NPNC can coordinate your invoicing process and follow through on
						any discrepancies. You will not lose your invoices in a 'black
						box'. We will keep your hard won customers in mind. All relevant
						actors will be connected to keep the process objective. Any
						disputes will be cleared during the judicial process. All this
						will lead to an efficient judicial process as a last resort. <br>
						<a href="https://blog.nopaynocure.com/en/solutions/"
							class="btn btn-default btn-lg">Learn More</a>
					</p>
				</div>
			</div>
		</div>
		</div>
	</section>

	<!-- News Section -->
	<section id="news" class="projects-section text-center bg-light">
		<div class="container">
			<div class="row">
				<div class="col-lg-8 mx-auto">
					<h2>NEWS</h2>
					<?php $html = ""; $url = "https://blog.nopaynocure.com/feed/"; $xml = simplexml_load_file($url); for($i = 0; $i < 3; $i++){ $title = $xml->channel->item[$i]->title; $link = $xml->channel->item[$i]->link; $description = $xml->channel->item[$i]->description; $pubDate = $xml->channel->item[$i]->pubDate;$html .= "<a href='$link'><h4>$title</h4></a>"; $html .= "$description $pubDate <br><hr>"; } echo $html; ?>
					<a href="https://blog.nopaynocure.com/nieuws/"
						class="btn btn-default btn-lg">More News</a>
				</div>
			</div>
		</div>
	</section>

	<!-- Team Members -->
	<section id="team" class="projects-section text-center bg-light">
		<div class="container">
			
		</div>

	</section>
	<!-- /.row -->

	<!-- Signup Section -->
	<section id="signup" class="signup-section">
		<div class="container">
			<div class="row">
				<div class="col-md-10 col-lg-8 mx-auto text-center">

					<i class="far fa-paper-plane fa-2x mb-2 text-white"></i>
					<h2 class="text-white mb-5">info@nopaynocure.com</h2>

					<!-- <form class="form-inline d-flex">
						<input type="email"
							class="form-control flex-fill mr-0 mr-sm-2 mb-3 mb-sm-0"
							id="inputEmail" placeholder="Enter email address...">
						<button type="submit" class="btn btn-primary mx-auto">Subscribe</button>
					</form> -->

				</div>
			</div>
		</div>
	</section>


	<!-- Footer -->
	<footer class="bg-black small text-center text-white-50">
		<div class="container">Copyright &copy; NPNC <?php echo date("Y"); ?></div>
	</footer>

	<!-- Bootstrap core JavaScript -->
	<script src="vendor/jquery/jquery.min.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

	<!-- Plugin JavaScript -->
	<script src="vendor/jquery-easing/jquery.easing.min.js"></script>

	<!-- Custom scripts for this template -->
	<script src="js/grayscale.min.js"></script>

</body>

</html>
