<?php
    session_start();
    include('inc/config.php');

    $page_name = 'Contact Us';
    $page_banner_name = 'Contact';
    $page_parent = '';
    $page_parent_url = '';
    $page_title = 'Welcome to the Official Website of '.$settings->siteTitle;
    $page_description = 'Bridging the gap between Managers and Residents...';
    $banner_img_url = 'images/banner/contact.jpg';
    include('inc/head.php');

?>
<body>
<?php include('inc/preloader.php'); ?>
<div class="page-wraper">
	<!-- Header -->
	<?php include('inc/header.php'); ?>
	<!-- Header End -->

	<!-- Contact Sidebar -->
	<?php include('inc/contact-sidebar.php'); ?>
	<!-- Contact Sidebar End -->

	<!-- Login Modal -->
	<?php include('inc/login-modal.php'); ?>
	<!-- Login Modal End -->

	<div class="page-content bg-white">
		<!-- Banner  -->
		<?php include('inc/page-banner.php'); ?>
		<!-- Banner End -->

		<section class="content-inner">
			<div class="container">
				<div class="row">
					<div class="col-lg-4 col-md-6 m-b30 aos-item" data-aos="fade-up" data-aos-duration="800" data-aos-delay="200">
						<div class="icon-bx-wraper style-8 bg-white" data-name="01">
							<div class="icon-md m-r20">
								<span class="icon-cell text-primary"><i class="flaticon-telephone"></i></span> 
							</div>
							<div class="icon-content">
								<h4 class="tilte m-b10">Call Now</h4>
								<p class="m-b0"><?php echo $settings->phoneNumber; ?></p>
							</div>
						</div>
					</div>
					<div class="col-lg-4 col-md-6 m-b30 aos-item" data-aos="fade-up" data-aos-duration="800" data-aos-delay="400">
						<div class="icon-bx-wraper style-8 bg-white" data-name="02">
							<div class="icon-md m-r20">
								<span class="icon-cell text-primary"><i class="flaticon-email"></i></span> 
							</div>
							<div class="icon-content">
								<h4 class="tilte m-b10">Email</h4>
								<p class="m-b0"><?php echo $settings->email; ?></p>
							</div>
						</div>
					</div>
					<div class="col-lg-4 col-md-12 m-b30 aos-item" data-aos="fade-up" data-aos-duration="800" data-aos-delay="600">
						<div class="icon-bx-wraper style-8 bg-white" data-name="03">
							<div class="icon-md m-r20">
								<span class="icon-cell text-primary"><i class="flaticon-placeholder"></i></span> 
							</div>
							<div class="icon-content">
								<h4 class="tilte m-b10">Location</h4>
								<p class="m-b0"><?php echo $settings->address; ?></p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- Contact Form -->
		<section class="content-inner-1 pt-0">
			<div class="map-iframe">
				<div class="mapouter"><div class="gmap_canvas"><iframe width="100%" height="100%" id="gmap_canvas" src="https://maps.google.com/maps?q=Lagos%20Island&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe><a href="https://123movies-to.org"></a><br><style>.mapouter{position:relative;text-align:right;height:100%;width:100%;}</style><a href="https://www.embedgooglemap.net">embed maps</a><style>.gmap_canvas {overflow:hidden;background:none!important;height:100%;width:100%;}</style></div></div>
			</div>
			<div class="container">
				<div class="contact-area aos-item" data-aos="fade-up" data-aos-duration="800" data-aos-delay="400">
					<div class="section-head style-1 text-center">
						<h6 class="sub-title text-primary">Contact Us</h6>
						<h2 class="title">Get In Touch With Us</h2>
					</div>
					<form class="dz-form style-1 dzForm" method="POST" action="#">
						<input type="hidden" class="form-control" name="dzToDo" value="Contact">
						<div class="dzFormMsg"></div>							
						<div class="row sp10">
							<div class="col-sm-6 m-b20">
								<div class="input-group">
									<input type="text" class="form-control" name="name" placeholder="Name">
								</div>
							</div>
							<div class="col-sm-6 m-b20">
								<div class="input-group">
									<input type="text" class="form-control" name="email" placeholder="Email">
								</div>
							</div>
							<div class="col-sm-6 m-b20">
								<div class="input-group">
									<input type="text" class="form-control" name="phone-number" placeholder="Phone No.">
								</div>
							</div>
							<div class="col-sm-12 m-b20">
								<div class="input-group">
									<input type="text" class="form-control" name="subject" placeholder="Subject">
								</div>
							</div>
							<div class="col-sm-12 m-b20">
								<div class="input-group">
									<textarea name="message" class="form-control">Message</textarea>
								</div>
							</div>
							<div class="col-sm-12 m-b20">
								<div class="input-group">
									<div class="g-recaptcha" data-sitekey="6LefsVUUAAAAADBPsLZzsNnETChealv6PYGzv3ZN" data-callback="verifyRecaptchaCallback" data-expired-callback="expiredRecaptchaCallback"></div>
									<input class="form-control d-none" style="display:none;" data-recaptcha="true" required data-error="Please complete the Captcha">
								</div>
							</div>
							<div class="col-sm-12 text-center">
								<button name="submit" type="submit" value="submit" class="btn btn-primary btn-rounded">SEND MESSAGE <i class="m-l10 fas fa-caret-right"></i></button>
							</div>
						</div>
					</form>
				</div>
			</div>
		</section>
		
	</div>
	
	<!-- Footer -->
    <?php include('inc/footer.php'); ?>
    <!-- Footer End -->
</div>
<!-- JAVASCRIPT FILES ========================================= -->
<?php include('inc/scripts.php'); ?>
</body>

<!-- Mirrored from archcode.dexignzone.com/xhtml/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 29 Apr 2021 16:05:41 GMT -->
</html>