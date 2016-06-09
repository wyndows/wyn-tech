<?php
/*grab current directory*/
$CURRENT_DIR = __DIR__;
/*set page title here*/
$PAGE_TITLE = "wyn-tech contact";
/*load head-utils.php*/
require_once(dirname(__DIR__) . "/php/partials/head-utils.php");
?>
<!-- code based on work by Rochelle Lewis -->
<div class="container">
	<div id="contact">
		<div class="row">
			<div class="col-md-12">
								<!-- begin main content area -->
				<form id="contact-form" action="<?php echo $PREFIX; ?>php/mailer.php" method="post">
					<div class="form-group">
						<label for="name">Name <span class="text-danger">*</span></label>
						<div class="input-group">
							<div class="input-group-addon">
								<i class="fa fa-user" aria-hidden="true"></i>
							</div>
							<input type="text" class="form-control" id="name" name="name" placeholder="Name">
						</div>
					</div>
					<div class="form-group">
						<label for="email">Email <span class="text-danger">*</span></label>
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
							<input type="text" class="form-control" id="subject" name="subject"
									 placeholder="Subject">
						</div>
					</div>
					<div class="form-group">
						<label for="message">Message <span class="text-danger">*</span></label>
						<div class="input-group">
							<div class="input-group-addon">
								<i class="fa fa-comment" aria-hidden="true"></i>
							</div>
							<textarea class="form-control" rows="5" id="message" name="message"
										 placeholder="Message (2000 characters max)"></textarea>
						</div>
					</div>

					<!-- reCAPTCHA -->
					<div class="g-recaptcha" data-sitekey="6Lf1FSITAAAAAKoW3nqMGk_QW7achr8C4jHGOH6E"></div>

					<button class="btn btn-info" type="submit"><i class="fa fa-paper-plane"></i> Send</button>
					<button class="btn btn-default" type="reset"><i class="fa fa-ban"></i> Reset</button>
				</form>

				<!--empty area for form error/success output-->
				<div class="row">
					<div class="col-xs-12">
						<div id="output-area"></div>
					</div>
				</div>
				<!--				</main>-->
			</div>
		</div>
	</div>
</div><p><br><br><br></p>

<!--/.sfooter-content-->
<?php require_once(dirname(__DIR__) . "/php/partials/footer.php"); ?>

</body>
</html>
