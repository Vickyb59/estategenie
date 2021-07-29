<?php
    session_start();
    include('inc/config.php');

    $page_name = 'Onboarding';
    $page_banner_name = 'Vendors’ Onboarding Form';
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
					
		            <?php
		                if(isset($_SESSION['error'])){
		                    echo "
		                        <div class='callout callout-danger'>
		                            ".$_SESSION['error']."
		                        </div>
		                    ";
		                    unset($_SESSION['error']);
		                }

		                if(isset($_SESSION['success'])){
		                    echo "


		                        <div class='success-text'><i class='fa fa-check-circle' aria-hidden='true'></i>
		                            ".$_SESSION['success']."
		                        </div>
		                    ";
		                    unset($_SESSION['success']);
		                }
		            ?>
					<div class="col-lg-12 col-md-12 m-b30 aos-item" data-aos="fade-up" data-aos-duration="800" data-aos-delay="200">
						<div class="icon-bx-wraper style-8 bg-white" data-name="01">
							
							<div class="icon-content">
								<h6 class="sub-title text-primary text-center">This form request for specific information used to set up a vendor’s business profile.</h6>
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
									<input type="text" class="form-control" name="community" placeholder="Residential Community">
								</div>
							</div>
							<div class="col-sm-6 m-b20">
								<div class="input-group">
									<input type="text" class="form-control" name="business" placeholder="Brand/Business Name" required>
								</div>
							</div>
							<div class="col-sm-12 m-b20">
								<div class="input-group">
									<input type="text" class="form-control" name="address" placeholder="Business Address" required>
								</div>
							</div>
							<div class="col-sm-6 m-b20">
								<div class="input-group">
									<input type="number" class="form-control" name="staffnumber" placeholder="Number of Staff" required>
								</div>
							</div>
							<div class="col-sm-6 m-b20">
								<div class="input-group">
									<input type="text" class="form-control" name="businessphnno" placeholder="Business Contact No." required>
								</div>
							</div>
							<div class="col-sm-6 m-b20">
								<div class="input-group">
									<input type="text" class="form-control" name="socials" placeholder="Social Media Handle">
								</div>
							</div>
							<div class="col-sm-6 m-b20">
								<div class="input-group">
									<input type="date" class="form-control" name="businessstart" placeholder="Business Start Date" required>
								</div>
							</div>
							<div class="col-sm-12 m-b20">
								<div class="input-group">
									<textarea name="businesssynopsis" class="form-control" required>Provide a brief synopsis of your Business </textarea>
								</div>
							</div>
							<div class="col-sm-12 m-b20">
								<div class="input-group">
									<textarea name="standout" class="form-control" required>What stands you out?</textarea>
								</div>
							</div>
							<div class="col-sm-12 m-b20 radio-div">
								<p>Grade your service charges in relation to the current market prices:</p>
								<div class="input-group">
									<label for="low"><input id="low" type="radio" name="servicecharge" value="low">Low</label>
									<label for="mid"><input id="mid" type="radio" name="servicecharge" value="mid">Mid</label>
									<label for="high"><input id="high" type="radio" name="servicecharge" value="high">High</label>
									<label for="relative"><input id="relative" type="radio" name="servicecharge" value="relative">Relative</label>
								</div>
							</div>
							<div class="col-sm-12 m-b20 radio-div">
								<p>Select your preferred monthly subscription package:</p>
								<div class="input-group">
									<label for="premium"><input id="premium" type="radio" name="subscription" value="premium">Premium badge: 1 Estate: #2,000</label>
									<label for="professional"><input id="professional" type="radio" name="subscription" value="professional">Professional badge: 1Estate + Immediate residential community: #5000</label>
									<label for="platinum"><input id="platinum" type="radio" name="subscription" value="platinum">Platinum badge: All estates on the platform: #10,000</label>
								</div>
								<p>Note: vendors have a two month free trial period, after which would be required to make payment to continue enjoying our services.</p>
							</div>
							<div class="col-sm-12 m-b20 radio-div">
								<p>Sign up to our Business and Brand development classes?</p>
								<div class="input-group">
									<label for="yes"><input id="yes" type="radio" name="brandclasssub" value="yes">Yes</label>
									<label for="no"><input id="no" type="radio" name="brandclasssub" value="no">No</label>
									<label for="maybe"><input id="maybe" type="radio" name="brandclasssub" value="maybe">Maybe</label>
									
								</div>
							</div>
							<div class="col-sm-12 text-center">
								<button name="onboardVendor" type="submit" value="submit" class="btn btn-primary btn-rounded">Submit <i class="m-l10 fas fa-caret-right"></i></button>
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