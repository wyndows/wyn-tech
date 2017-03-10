<?php
/*grab current directory*/
$CURRENT_DIR = __DIR__;
/*set page title here*/
$PAGE_TITLE = "wyn-tech portfolio";
/*load head-utils.php*/
require_once(dirname(__DIR__) . "/php/partials/head-utils.php");
?>
<div class="container">
	<div id="portfolio">
		<div class="row">
			<div class="col-md-12">
				<h4 align="center"><strong>Programming Portfolio</strong></h4><br>
				<h4><strong>ROMuLess</strong></h4>
				<p>This web application is the capstone project for Deep Dive Coding Bootcamp. As part of a team of 3, I
					have
					worked on both the front end and back end of the application. Our assignment was to create an e-commerce
					website for the buying and selling of gaming cartridges. It is an ongoing project which I am working on.</p>
					<p>It utilizes PHP, MySQL, JavaScript, HTML, CSS3, Bootstrap, Angular 1, Composer and Mailgun.</p>
				<br>
				<h4><strong>wyn-tech.com</strong></h4>
				<p>This is my personal website. This is an ongoing fun project that was part of Deep Dive Coding Bootcamp.
					This
					was
					an exercise where we were allowed to be creative. It has a home, background, portfolio and contact page.
					I
					added a page to it that shows some of my woodturning projects I was able to do recently.</p> <p>It utilizes HTML, CSS3, JQuery, Composer, Bootstrap and Angular 1.</p>
				<br>
				<h4><strong>Angular Attack 2016</strong></h4>
				<p>As part of a team of 4, I participated in Angular Attack 2016 on May 14 and 15. This was an international
					hackathon that
					ran for 48hrs where we
					were to create an app in Angular. We worked on an app that would show the New Mexico RailRunner
					schedules. We
					had a lot of fun during the hackathon and used the opportunity to gain knowledge in Angular 2. The
					project is still ongoing as we find time.</p>
				<br>
				<h4><strong>ABQ-parks</strong></h4>
				<p>This is an app I have been working on in my spare time. It shows the various parks available in
					Albuquerque, New Mexico. As a future capability, I want to add the ability to use your location to give
					you a
					list of nearby parks.</p>
				<p>It utilizes JavaScript, HTML and Angular 2</p>
				<br><br>
				<p>My github is linked at the bottom of the page.</p>
			</div>
		</div>
	</div>
</div><p><br><br><br></p>

<?php require_once(dirname(__DIR__) . "/php/partials/footer.php"); ?>
</body>
</html>