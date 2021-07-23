<?php
    session_start();
    include('inc/config.php');

    $page_name = 'Onboarding';
    $page_banner_name = 'Onboarding';
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
							
					<div class="col-lg-6 col-md-6 m-b30 aos-item" data-aos="fade-up" data-aos-duration="800" data-aos-delay="200">
						<a href="resident-form">
							<div class="icon-bx-wraper style-8 bg-white" data-name="01">
								<div class="icon-md m-r20">
									<span class="icon-cell text-primary"><i class="flaticon-telephone"></i></span> 
								</div>
								<div class="icon-content">
									<h4 class="tilte m-b10">Resident</h4>
								</div>
							</div>
						</a>
					</div>
					
						
					<div class="col-lg-6 col-md-6 m-b30 aos-item" data-aos="fade-up" data-aos-duration="800" data-aos-delay="400">
						<a href="vendor-form">
							<div class="icon-bx-wraper style-8 bg-white" data-name="02">
								<div class="icon-md m-r20">
									<span class="icon-cell text-primary"><i class="flaticon-email"></i></span> 
								</div>
								<div class="icon-content">
									<h4 class="tilte m-b10">Vendor</h4>
								</div>
							</div>
						</a>
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