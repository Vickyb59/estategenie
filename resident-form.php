<?php
    session_start();
    include('inc/config.php');

    $page_name = 'Onboarding';
    $page_banner_name = 'Resident’s Form';
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
					<div class="col-lg-12 col-md-12 m-b30 aos-item" data-aos="fade-up" data-aos-duration="800" data-aos-delay="200">
						<div class="icon-bx-wraper style-8 bg-white" data-name="01">
							
							<div class="icon-content">
								<h6 class="sub-title text-primary text-center">This form requests basic information used to set up the individual resident’s dashboard.</h6>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>

		<!-- Contact Form -->
		<section class="content-inner-1 pt-0">
			<div class="container">
				<div class="contact-area onboard-area aos-item" data-aos="fade-up" data-aos-duration="800" data-aos-delay="400">
					<form class="" method="POST" action="inc/onboard-helper.php">
						<div class="row sp10">
							<div class="col-sm-6 m-b20">
								<div class="input-group">
									<input type="text" class="form-control" name="fullname" placeholder="Full Name" required>
								</div>
							</div>
							<div class="col-sm-6 m-b20">
								<div class="input-group">
									<input type="text" class="form-control" name="email" placeholder="Email" required>
								</div>
							</div>
							<div class="col-sm-6 m-b20">
								<div class="input-group">
									<input type="text" class="form-control" name="phonenumber" placeholder="Phone No." required>
								</div>
							</div>
							<div class="col-sm-6 m-b20">
								<div class="input-group">
									<input type="text" class="form-control" name="estate" placeholder="Residential Estate">
								</div>
							</div>
							<div class="col-sm-12 m-b20">
								<div class="input-group">
									<input type="text" class="form-control" name="address" placeholder="Address" required>
								</div>
							</div>
							<div class="col-sm-6 m-b20">
								<div class="input-group">
									<input type="text" class="form-control" name="socials" placeholder="Social Media Handle">
								</div>
							</div>
							<div class="col-sm-6 m-b20 radio-div">
								<p>Property status:</p>
								<div class="input-group">
									<label for="owned"><input id="owned" type="radio" name="propertystatus" value="owned">Owned</label>
									<label for="rented"><input id="rented" type="radio" name="propertystatus" value="rented">Rented</label>
								</div>
							</div>
							<div class="col-sm-6 m-b20 radio-div">
								<p>Marital status:</p>
								<div class="input-group">
									<label for="single"><input id="single" type="radio" name="maritalstatus" value="single">Single</label>
									<label for="married"><input id="married" type="radio" name="maritalstatus" value="married">Married</label>
									<label for="kids"><input id="kids" type="radio" name="maritalstatus" value="kids">Kids</label>
								</div>
							</div>
							<div class="col-sm-6 m-b20">
								<div class="input-group">
									<input type="date" class="form-control" name="occupation" placeholder="Occupation" required>
								</div>
							</div>
							<div class="col-sm-6 m-b20 radio-div">
								<p>Occupational status:</p>
								<div class="input-group">
									<label for="corporate"><input id="corporate" type="radio" name="occupationalstatus" value="corporate">Corporate Employment</label>
									<label for="self"><input id="self" type="radio" name="occupationalstatus" value="self">Self Employed</label>
								</div>
							</div>
							<div class="col-sm-12 text-center">
								<button name="onboardResident" type="submit" value="submit" class="btn btn-primary btn-rounded">Submit <i class="m-l10 fas fa-caret-right"></i></button>
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