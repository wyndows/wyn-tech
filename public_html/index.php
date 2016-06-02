<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<link data-require="bootstrap-css@3.3.6" data-semver="3.3.6" rel="stylesheet"
				href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.css"/>
		<!-- Font Awesome -->
		<link type="text/css" href="//maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css" rel="stylesheet" />
		<!-- Custom -->
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
								<li><a href="./about/index.php">About Me</a></li>
								<li><a href="./portfolio/index.php">Portfolio</a></li>
								<li><a href="./contact/index.php">Contact Me</a></li>
								<li><a href="./projects/index.php">Personal Projects</a></li>
							</ul>
						</div><!-- /.navbar-collapse -->
					</nav>
				</div>
			</header>


			<!-- feature section -->
			<section id="feature" class="p-y-4">
				<div class="container">
					<div class="row">
						<div class="col-md-4">
							<!-- Photo Carousel -->
							<div id="myCarousel" class="carousel slide" data-ride="carousel">
								<!-- Carousel indicators -->
								<ol class="carousel-indicators">
									<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
									<li data-target="#myCarousel" data-slide-to="1"></li>
									<li data-target="#myCarousel" data-slide-to="2"></li>
									<li data-target="#myCarousel" data-slide-to="3"></li>
									<li data-target="#myCarousel" data-slide-to="4"></li>
									<li data-target="#myCarousel" data-slide-to="5"></li>
									<li data-target="#myCarousel" data-slide-to="6"></li>
									<li data-target="#myCarousel" data-slide-to="7"></li>
									<li data-target="#myCarousel" data-slide-to="8"></li>
									<li data-target="#myCarousel" data-slide-to="9"></li>
									<li data-target="#myCarousel" data-slide-to="10"></li>
									<li data-target="#myCarousel" data-slide-to="11"></li>
									<li data-target="#myCarousel" data-slide-to="12"></li>
									<li data-target="#myCarousel" data-slide-to="13"></li>
								</ol>
								<!-- Wrapper for carousel items -->
								<div class="carousel-inner">
									<div class="item active">
										<img src="media/300/band1.jpg" alt="First Slide">
									</div>
									<div class="item">
										<img src="media/300/band2.jpg" alt="Second Slide">
									</div>
									<div class="item">
										<img src="media/300/band3.jpg" alt="Third Slide">
									</div>
									<div class="item">
										<img src="media/300/band4.jpg" alt="Fourth Slide">
									</div>
									<div class="item">
										<img src="media/300/band5.jpg" alt="Fifth Slide">
									</div>
									<div class="item">
										<img src="media/300/band6.jpg" alt="Sixth Slide">
									</div>
									<div class="item">
										<img src="media/300/band7.jpg" alt="Seventh Slide">
									</div>
									<div class="item">
										<img src="media/300/band8.jpg" alt="Eighth Slide">
									</div>
									<div class="item">
										<img src="media/300/band9.jpg" alt="Ninth Slide">
									</div>
									<div class="item">
										<img src="media/300/band10.jpg" alt="Tenth Slide">
									</div>
									<div class="item">
										<img src="media/300/band11.jpg" alt="Eleventh Slide">
									</div>
									<div class="item">
										<img src="media/300/band12.jpg" alt="Twelfth Slide">
									</div>
									<div class="item">
										<img src="media/300/band13.jpg" alt="Thirteenth Slide">
									</div>
									<div class="item">
										<img src="media/300/band14.jpg" alt="Fourteenth Slide">
									</div>
								</div>
								<!-- Carousel controls -->
								<a class="carousel-control left" href="#myCarousel" data-slide="prev">
									<span class="glyphicon glyphicon-chevron-left"></span>
								</a>
								<a class="carousel-control right" href="#myCarousel" data-slide="next">
									<span class="glyphicon glyphicon-chevron-right"></span>
								</a>
							</div>

						</div>
						<div class="col-md-8">
							<h2>Welcome to Wyn-Tech</h2>
							<p>Hi, you're at the homepage for Marlan Ball, web developer, service engineer, woodworker and amateur radio operator.</p>
							<p>After spending 20 years as a Field Service Engineer working on advanced photolithography
								equipment for the semiconductor industry, I have extended my skills and am now a
								Web Developer. I have been involved
								with hardware for many years and have enjoyed extending my experience to now include the
								software side. My current
								repertoire includes PHP, JavaScript, mySQL, HTML, CSS, with work in Angular and Bootstrap
								frameworks. </p>

							<p class="info">All photographs on this site were taken during hikes at Bandelier National Monument, New Mexico,
								USA.</p>
						</div>
					</div>
				</div>
			</section>

			<!-- thumbnails -->
			<section id="thumbnails" class="p-y-4">
				<div class="container">
					<div class="row">
						<div class="col-md-3 col-sm-6">
							<div class="thumbnail">
								<a href="./about/index.php"><img src="media/200/band2001.jpg" alt="Tree across trail, Bandelier National Monument" class="img-responsive img-thumbnail img-circle"></a>
								<div class="caption">
									<h3 class="about">About Me</h3>
									<p>Professional experience and resume.&#160;&#160;&#160;&#160;&#160;&#160;</p>
								</div>
							</div><!--/.thumbnail-->
						</div><!--/.col-md-3-->
						<div class="col-md-3 col-sm-6">
							<div class="thumbnail">
								<a href="./portfolio/index.php"><img src="media/200/band2002.jpg" alt="Fall leaves at Bandelier National Monument" class="img-responsive img-thumbnail img-circle"></a>
								<div class="caption">
									<h3 class="port">Portfolio</h3>
									<p>Programming projects, past and present.&#160;&#160;&#160;&#160;&#160;&#160;</p>
								</div>
							</div><!--/.thumbnail-->
						</div><!--/.col-md-3-->
						<div class="col-md-3 col-sm-6">
							<div class="thumbnail">
								<a href="./contact/index.php"><img src="media/200/band2003.jpg" alt="Fall leaves at Bandelier National Monument" class="img-responsive img-thumbnail img-circle"></a>
								<div class="caption">
									<h3 class="contact">Contact Me</h3>
									<p>Get in contact with me and interesting links.</p>
								</div>
							</div><!--/.thumbnail-->
						</div><!--/.col-md-3-->
						<div class="col-md-3 col-sm-6">
							<div class="thumbnail">
								<a href="./projects/index.php"><img src="media/200/band2004.jpg" alt="Looking down trail, Bandelier National Monument" class="img-responsive img-thumbnail img-circle"></a>
								<div class="caption">
									<h3 class="personal">For Fun</h3>
									<p>Enjoyable projects outside of work.&#160;&#160;&#160;&#160;&#160;&#160;</p>
								</div>
							</div><!--/.thumbnail-->
						</div><!--/.col-md-3-->
					</div><!--/.row-->
				</div><!--/.container-->
			</section>
		</div>

		<footer class="p-y-4">
			<div class="container text-center">

				<div class="col-md-6 col-md-offset-3">
					<div class="copyright text-center">
						© Wyn-Tech 2016
					</div>
				</div>

				<div class="col-md-3">
					<div class="link1">
						<a href="https://www.linkedin.com/in/marlan-ball-91964a100"><i class="fa fa-linkedin-square" aria-hidden="true"></i></a>
					</div>
					<div class="link3">
						<a href="#">&#160;&#160;&#160;</a>
					</div>
					<div class="link2">
						<a href="https://github.com/wyndows"><i class="fa fa-github" aria-hidden="true"></i></a>
					</div>
				</div>

			</div>
		</footer>
	</body>

</html>
