<?php
/**
 * Get the relative path.
 * @see https://raw.githubusercontent.com/kingscreations/farm-to-you/master/php/lib/_header.php FarmToYou Header
 **/

// include the appropriate number of dirname() functions
// on line 8 to correctly resolve your directory's path
require_once(dirname(dirname(__DIR__)) . "/root-path.php");
$CURRENT_DEPTH = substr_count($CURRENT_DIR, "/");
$ROOT_DEPTH = substr_count($ROOT_PATH, "/");
$DEPTH_DIFFERENCE = $CURRENT_DEPTH - $ROOT_DEPTH;
$PREFIX = str_repeat("../", $DEPTH_DIFFERENCE);
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<link data-require="bootstrap-css@3.3.6" data-semver="3.3.6" rel="stylesheet"
				href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.css"/>
		<!-- Font Awesome -->
		<link type="text/css" href="//maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css" rel="stylesheet" />
		<!-- Custom -->
		<link rel="stylesheet" href="<?php echo $PREFIX; ?>css/style.css"/>
		<script data-require="jquery@*" data-semver="2.2.0"
				  src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
		<script data-require="bootstrap.js@*" data-semver="3.3.6"
				  src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
		<title><?php echo $PAGE_TITLE; ?></title>
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
							<a class="navbar-brand" href="<?php echo $PREFIX; ?>">Wyn-Tech</a>
						</div>

						<!-- Collect the nav links, forms, and other content for toggling -->
						<div class="collapse navbar-collapse" id="main-nav">
							<ul class="nav navbar-nav navbar-right">
								<li><a href="<?php echo $PREFIX; ?>about/index.php">About Me</a></li>
								<li><a href="<?php echo $PREFIX; ?>portfolio/index.php">Portfolio</a></li>
								<li><a href="<?php echo $PREFIX; ?>contact/index.php">Contact Me</a></li>
								<li><a href="<?php echo $PREFIX; ?>projects/index.php">Personal Projects</a></li>
							</ul>
						</div><!-- /.navbar-collapse -->
					</nav>
				</div>
			</header>