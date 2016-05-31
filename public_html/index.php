<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<link data-require="bootstrap-css@3.3.6" data-semver="3.3.6" rel="stylesheet"
				href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.css"/>
		<link rel="stylesheet" href="./css/style.css"/>
		<script data-require="jquery@*" data-semver="2.2.0"
				  src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
		<script data-require="bootstrap.js@*" data-semver="3.3.6"
				  src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
		<script src="script.js"></script>
	</head>

	<body class="sfooter">
		<div class="sfooter-content">

			<!-- header -->
			<header class="p-y-4">
				<div class="container">
					<nav class="navbar navbar-default">
						<!-- Brand and toggle get grouped for better mobile display -->
						<div class="navbar-header">
							<button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
									  data-target="#main-nav" aria-expanded="false">
								<span class="sr-only">Toggle navigation</span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
							</button>
							<a class="navbar-brand" href="#">Wyn-Tech</a>
						</div>

						<!-- Collect the nav links, forms, and other content for toggling -->
						<div class="collapse navbar-collapse" id="main-nav">
							<ul class="nav navbar-nav navbar-right">
								<li><a href="#">Link1</a></li>
								<li><a href="#">Link2</a></li>
								<li><a href="#">Link3</a></li>
								<li><a href="#">Link4</a></li>
							</ul>
						</div><!-- /.navbar-collapse -->
					</nav>
				</div>
			</header>

			<!-- welcome section -->
			<section id="welcome" class="p-y-4">
				<div class="container">
					<div class="jumbotron">
						<h2 class="welcome">Welcome to Wyn-Tech</h2>
						<p></p>
						<p>Hi, you're at the homepage for Marlan Ball, web developer, service engineer, woodworker and amateur
							radio operator.</p>
						<p>Here you'll find apps I've worked on, my professional
							experience and some of my personal projects.</p>
						<br>
					</div>
				</div>
			</section>

			<!-- feature section -->
			<section id="feature" class="p-y-4">
				<div class="container">
					<div class="row">
						<div class="col-md-4">
							<img class="img1" src="media/300/band9.jpg"
								  alt="Kiva in Alcove House, Bandelier National Monument">
						</div>
						<div class="col-md-8">
							<p>After spending 20 years as a Field Service Engineer working on advanced photolithography
								equipment, keeping the semiconductor industry running, I have extended my skills and am now a
								Web Developer. I have been involved
								with hardware for many years and have enjoyed extending my experience to now include the
								software side. My current
								repertoire includes PHP, JavaScript, HMTL, CSS, with work in Angular and Bootstrap
								frameworks. </p>
							<br><br>
							<p class="info">All photographs on this site are of Bandelier National Monument, New Mexico,
								USA.</p>
						</div>
					</div>
				</div>
			</section>

			<!-- thumbnails -->
			<section id="thumbnails" class="p-y-4">
				<div class="container">
					<div class="row">
						<div class="col-md-3">
							<div class="thumbnail">
								<img src="media/200/band2001.jpg" alt="" class="img-responsive img-thumbnail img-circle">
								<div class="caption">
									<h3 class="about">About Me</h3>
									<p>A history of my professional experience, current programming projects and resume.</p>
								</div>
							</div><!--/.thumbnail-->
						</div><!--/.col-md-3-->
						<div class="col-md-3">
							<div class="thumbnail">
								<img src="media/200/band2002.jpg" alt="" class="img-responsive img-thumbnail img-circle">
								<div class="caption">
									<h3 class="port">Portfolio</h3>
									<p>Programming projects I've been involved in.</p>
								</div>
							</div><!--/.thumbnail-->
						</div><!--/.col-md-3-->
						<div class="col-md-3">
							<div class="thumbnail">
								<img src="media/200/band2003.jpg" alt="" class="img-responsive img-thumbnail img-circle">
								<div class="caption">
									<h3 class="contact">Contact Me</h3>
									<p>.</p>
								</div>
							</div><!--/.thumbnail-->
						</div><!--/.col-md-3-->
						<div class="col-md-3">
							<div class="thumbnail">
								<img src="media/200/band2004.jpg" alt="" class="img-responsive img-thumbnail img-circle">
								<div class="caption">
									<h3 class="personal">Personal Projects</h3>
									<p>Some of my personal projects outside of work which I have enjoyed building or making.</p>
								</div>
							</div><!--/.thumbnail-->
						</div><!--/.col-md-3-->
					</div><!--/.row-->
				</div><!--/.container-->
			</section>
		</div>
		
		<footer class="p-y-4">
			<div class="container">
				<div class="copyright text-center">
					&copy; Wyn-Tech 2016
				</div>
			</div>
		</footer>
	</body>

</html>
