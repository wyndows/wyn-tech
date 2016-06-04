<?php
/*grab current directory*/
$CURRENT_DIR = __DIR__;
/*set page title here*/
$PAGE_TITLE = "wyn-tech";
/*load head-utils.php*/
require_once("php/partials/head-utils.php");
?>

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
								</ol>
								<!-- Wrapper for carousel items -->
								<div class="carousel-inner">
									<div class="item active">
										<img src="media/300/band2.jpg" alt="First Slide">
									</div>
									<div class="item">
										<img src="media/300/band3.jpg" alt="Second Slide">
									</div>
									<div class="item">
										<img src="media/300/band4.jpg" alt="Third Slide">
									</div>
									<div class="item">
										<img src="media/300/band5.jpg" alt="Fourth Slide">
									</div>
									<div class="item">
										<img src="media/300/band6.jpg" alt="Fifth Slide">
									</div>
									<div class="item">
										<img src="media/300/band7.jpg" alt="Sixth Slide">
									</div>
									<div class="item">
										<img src="media/300/band8.jpg" alt="Seventh Slide">
									</div>
									<div class="item">
										<img src="media/300/band9.jpg" alt="Eighth Slide">
									</div>
									<div class="item">
										<img src="media/300/band10.jpg" alt="Ninth Slide">
									</div>
									<div class="item">
										<img src="media/300/band11.jpg" alt="Tenth Slide">
									</div>
									<div class="item">
										<img src="media/300/band12.jpg" alt="Eleventh Slide">
									</div>
									<div class="item">
										<img src="media/300/band13.jpg" alt="Twelfth Slide">
									</div>
									<div class="item">
										<img src="media/300/band14.jpg" alt="Thirteenth Slide">
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
									<a href="./about/index.php"><h3 class="about">About Me</h3></a>
									<p>Professional experience and resume.&#160;&#160;&#160;&#160;&#160;&#160;</p>
								</div>
							</div><!--/.thumbnail-->
						</div><!--/.col-md-3-->
						<div class="col-md-3 col-sm-6">
							<div class="thumbnail">
								<a href="./portfolio/index.php"><img src="media/200/band2002.jpg" alt="Fall leaves at Bandelier National Monument" class="img-responsive img-thumbnail img-circle"></a>
								<div class="caption">
									<a href="./portfolio/index.php"><h3 class="port">Portfolio</h3></a>
									<p>Programming projects, past and present.&#160;&#160;&#160;&#160;&#160;&#160;</p>
								</div>
							</div><!--/.thumbnail-->
						</div><!--/.col-md-3-->
						<div class="col-md-3 col-sm-6">
							<div class="thumbnail">
								<a href="./contact/index.php"><img src="media/200/band2003.jpg" alt="Fall leaves at Bandelier National Monument" class="img-responsive img-thumbnail img-circle"></a>
								<div class="caption">
									<a href="./contact/index.php"><h3 class="contact">Contact Me</h3></a>
									<p>Get in contact with me and interesting links.</p>
								</div>
							</div><!--/.thumbnail-->
						</div><!--/.col-md-3-->
						<div class="col-md-3 col-sm-6">
							<div class="thumbnail">
								<a href="./projects/index.php"><img src="media/200/band2004.jpg" alt="Looking down trail, Bandelier National Monument" class="img-responsive img-thumbnail img-circle"></a>
								<div class="caption">
									<a href="./projects/index.php"><h3 class="personal">For Fun</h3></a>
									<p>Enjoyable projects outside of work.&#160;&#160;&#160;&#160;&#160;&#160;</p>
								</div>
							</div><!--/.thumbnail-->
						</div><!--/.col-md-3-->
					</div><!--/.row-->
				</div><!--/.container-->
			</section>
		</div>

		<?php require_once ("php/partials/footer.php"); ?>
	</body>

</html>
