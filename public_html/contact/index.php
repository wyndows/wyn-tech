<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<link data-require="bootstrap-css@3.3.6" data-semver="3.3.6" rel="stylesheet"
				href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.css"/>
		<!-- Font Awesome -->
		<link type="text/css" href="//maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css"
				rel="stylesheet"/>
		<!-- Custom -->
		<link rel="stylesheet" href="../css/style.css"/>
		<script data-require="jquery@*" data-semver="2.2.0"
				  src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
		<script data-require="bootstrap.js@*" data-semver="3.3.6"
				  src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
		<script src="script.js"></script>
	</head>

	<body>

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
						<a class="navbar-brand"
							href="https://bootcamp-coders.cnm.edu/~mball15/wyn-tech/public_html/index.php">Wyn-Tech</a>
					</div>

					<!-- Collect the nav links, forms, and other content for toggling -->
					<div class="collapse navbar-collapse" id="main-nav">
						<ul class="nav navbar-nav navbar-right">
							<li><a href="../about/index.php">About Me</a></li>
							<li><a href="../portfolio/index.php">Portfolio</a></li>
							<li><a href="../contact/index.php">Contact Me</a></li>
							<li><a href="../projects/index.php">Personal Projects</a></li>
						</ul>
					</div><!-- /.navbar-collapse -->
				</nav>
			</div>
		</header>

		<div class="container">
			<form class="form-horizontal well" action="email.php">
				<div class="form-group">
					<label for="name">Name</label>
					<div class="input-group">
						<div class="input-group-addon">
							<i class="fa fa-user" aria-hidden="true"></i>
						</div>
						<input type="text" class="form-control" id="name" name="name" placeholder="Name">
					</div>
				</div>
				<div class="form-group">
					<label for="email">Email address</label>
					<div class="input-group">
						<div class="input-group-addon">
							<i class="fa fa-envelope" aria-hidden="true"></i>
						</div>
						<input type="email" class="form-control" id="email" name="email" placeholder="Email">
					</div>
				</div>
				<div class="form-group">
					<label for="subject">Subject</label>
					<div class="input-group">
						<div class="input-group-addon">
							<i class="fa fa-pencil" aria-hidden="true"></i>
						</div>
						<input type="text" class="form-control" id="subject" name="subject" placeholder="Subject">
					</div>
				</div>
				<div class="form-group">
					<label for="message">Message</label>
					<div class="input-group">
						<div class="input-group-addon">
							<i class="fa fa-comment" aria-hidden="true"></i>
						</div>
						<textarea class="form-control" rows="5" id="message" name="message" placeholder="Message"></textarea>
					</div>
				</div>
				<button class="btn btn-success" type="submit"><i class="fa fa-paper-plane"></i> Send</button>
				<button class="btn btn-warning" type="reset"><i class="fa fa-ban"></i> Reset</button>
			</form>
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
						<a href="https://www.linkedin.com/in/marlan-ball-91964a100"><i class="fa fa-linkedin-square"
																											aria-hidden="true"></i></a>
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