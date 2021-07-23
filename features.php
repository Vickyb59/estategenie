<?php
    session_start();
    include('inc/config.php');

    $page_name = 'Features';
    $page_banner_name = 'App Features';
    $page_parent = '';
    $page_parent_url = '';
    $page_title = 'Welcome to the Official Website of '.$settings->siteTitle;
    $page_description = 'Bridging the gap between Managers and Residents...';
    $banner_img_url = 'images/banner/features.jpg';
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
		
		<!-- Our Features -->
		<section class="content-inner">
			<div class="container">
				<div class="row">
					<div class="col-lg-4 col-md-12 aos-item" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="200">
						<div class="section-head style-1">
							<h6 class="text-primary sub-title">Our App Features</h6>
							<h2 class="title">What Our App Contains</h2>
						</div>
					</div>
					<div class="col-lg-8 col-md-12">
						<div class="row">
							<div class="col-lg-6 col-sm-6 aos-item" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="200">
								<div class="icon-bx-wraper style-2 left m-b50">
									<div class="icon-bx-sm bg-primary icon-bx text-white">
										<i class="flaticon-blueprint-1"></i> 
									</div>
									<div class="icon-content">
										<h4 class="title m-b10">Push Notifications</h4>
										<p>Management can push notifications, news and feedback to either all app users or selected users. It is simple to communicate with residents.</p>
									</div>
								</div>
							</div>
							<div class="col-lg-6 col-sm-6 aos-item" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="400">
								<div class="icon-bx-wraper style-2 left m-b50">
									<div class="icon-bx-sm bg-primary icon-bx text-white">
										<i class="flaticon-furniture"></i> 
									</div>
									<div class="icon-content">
										<h4 class="title m-b10">Community Information</h4>
										<p>All the information you need to connect your community; from rules & regulations, to management details, to contracted service providers.</p>
									</div>
								</div>
							</div>
							<div class="col-lg-6 col-sm-6 aos-item" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="600">
								<div class="icon-bx-wraper style-2 left m-b50">
									<div class="icon-bx-sm bg-primary icon-bx text-white">
										<i class="flaticon-crane"></i> 
									</div>
									<div class="icon-content">
										<h4 class="title m-b10">Controlled Live Chat</h4>
										<p>Using the LIVE chat function enables the residents to contact management and the body corporate immediately through the app. Management has the ability to respond with a message or communicate and discuss further in a group chat.</p>
									</div>
								</div>
							</div>
							<div class="col-lg-6 col-sm-6 aos-item" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="800">
								<div class="icon-bx-wraper style-2 left m-b50">
									<div class="icon-bx-sm bg-primary icon-bx text-white">
										<i class="flaticon-home"></i> 
									</div>
									<div class="icon-content">
										<h4 class="title m-b10">Request Approvals</h4>
										<p>Would you like approval for your cute pet? or are you wanting to enclose your patio? Use the app to request approvals. Management can approve or reject the requests with ease, notifying you of the decision in no time.</p>
									</div>
								</div>
							</div>
							<div class="col-lg-6 col-sm-6 aos-item" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="1000">
								<div class="icon-bx-wraper style-2 left m-b50">
									<div class="icon-bx-sm bg-primary icon-bx text-white">
										<i class="flaticon-interior-design-1"></i> 
									</div>
									<div class="icon-content">
										<h4 class="title m-b10">Report an Issue</h4>
										<p>Residents can report anything from general maintenance, to security concerns, to general complaints, all with a geolocation. Management is immediately notified through the app and can therefore address issues quickly and efficiently.</p>
									</div>
								</div>
							</div>
							<div class="col-lg-6 col-sm-6 aos-item" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="1200">
								<div class="icon-bx-wraper style-2 left m-b50">
									<div class="icon-bx-sm bg-primary icon-bx text-white">
										<i class="flaticon-support"></i> 
									</div>
									<div class="icon-content">
										<h4 class="title m-b10">Contact Security</h4>
										<p>Use the security panic button to request immediate geolocated security response, or send a community alert, or an anonymous tip-off. Connect to security immediately.</p>
									</div>
								</div>
							</div>
						</div>
					</div>
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