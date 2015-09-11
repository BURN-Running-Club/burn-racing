<section id="contact-us" class="container">
	<h2 class="text-center">CONTACT US</h2>
	<div class="col-xs-12 col-sm-6">
		<p>Write us at <br> info@burnrunning.org</p>
		<p>Follow us at </p>
		<div class="row">
			<a class="col-xs-2" href="http://facebook.com">
				<i class="fa fa-facebook fa-3x"></i>
			</a>
			<a class="col-xs-2" href="http://twitter.com">
				<i class="fa fa-twitter fa-3x"></i>
			</a>
			<a class="col-xs-2" href="http://flickr.com">
				<i class="fa fa-flickr fa-3x"></i>
			</a>
		</div>
	</div>
	<div class="col-xs-12 col-sm-6">
		<p>Comments and Suggestions? </p>
		<p><strong>Leave us a message (all fields required)</strong></p>
		<form id="contact-form" class="row" action="index.php" method="post">
			<div class="form-group col-xs-12 col-sm-6">
				<label for="contact-name">Name</label>
				<input type="text" class="form-control name" name="name" required />
			</div>
			<div class="form-group col-xs-12 col-sm-6">
				<label for="contact-email">Email</label>
				<input type="email" class="form-control name" name="email" required />
			</div>
			<div class="form-group col-xs-12">
				<label for="contact-message">Message</label>
				<textarea name="message" class="form-control message required "></textarea>
			</div>
			<div class="form-group col-xs-12">
				<label>Enter the contents of image</label>
				<input type="text" name="captcha" class="captcha" required />
				<img src='captcha.php' />
			</div>
			<div class="col-xs-12 form-group captcha-status"></div>
			<div class="form-group col-xs-12">
				<button type="submit" class="submit btn btn-danger">Submit</button>
			</div>
		</form>
	</div>
</section>