<footer>
	<div class="container">
		<div class="row">
			<div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
				<div class="box-footer info-contact">
					<h3>Contact</h3>
					<div class="content-contact">
						<p>
							<strong>Email: </strong> long.hp182651@sis.hust.edu.vn
						</p>
						<p>
							<strong>Phone: </strong> 0345664009
						</p>
						<p>
							<strong>Website: </strong> https://facebook.com/Mchanmanhme
						</p>
					</div>
				</div>
			</div>
			<div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
				<div class="box-footer info-contact">
					<h3>Our policy</h3>
					<div class="content-list">
						<?php wp_nav_menu(
							array(
								'theme_location' => 'footer-menu',
								'container' => 'false',
								'menu_id' => 'footer-menu',
								'menu_class' => 'footer-menu'
							)
						); ?>
					</div>
				</div>
			</div>
			<div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
				<div class="box-footer info-contact">
					<h3>Feedback</h3>
					<div class="content-contact">
						<form action="/" method="GET" role="form">
							<div class="row">
								<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
									<input type="text" name="" id="" class="form-control" placeholder="Your full name">
								</div>
								<div class="col-xs-12 col-sm-12 col-md-12 col-lg-6">
									<input type="email" name="" id="" class="form-control" placeholder="Your email">
								</div>
								<div class="col-xs-12 col-sm-12 col-md-12 col-lg-6">
									<input type="text" name="" id="" class="form-control" placeholder="Your phone">
								</div>
								<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
									<input type="text" name="" id="" class="form-control" placeholder="Title">
								</div>
								<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
									<textarea name="" id="" cols="30" rows="10" class="form-control" placeholder="Message"></textarea>
								</div>
							</div>
							<div class="btn-box"><button type="submit" class="btn-contact">Submit</button></div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="copyright">
		<p>Copyright © 2021 | All Rights Reserved</p>
	</div>
</footer>
</div>
<script src="<?php bloginfo('template_directory') ?>/libs/jquery-3.4.1.min.js"></script>
<script src="<?php bloginfo('template_directory') ?>/libs/bootstrap/js/bootstrap.min.js"></script>
<script src="<?php bloginfo('template_directory') ?>/js/main.js"></script>
<div id="fb-root"></div>
<script async defer crossorigin="anonymous" src="https://connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v6.0"></script>
</body>

</html>