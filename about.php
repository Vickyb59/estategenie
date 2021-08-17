<?php
    session_start();
    include('inc/config.php');

    $page_name = 'About Us';
    $page_banner_name = 'About';
    $page_parent = '';
    $page_parent_url = '';
    $page_title = 'Welcome to the Official Website of '.$settings->siteTitle;
    $page_description = 'Bridging the gap between Managers and Residents...';
    $banner_img_url = 'images/banner/about.jpg';
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

		<!-- About Us -->
		<section class="content-inner-2">
			<div class="container">
				<div class="row align-items-center about-bx1">
					<div class="col-lg-6 m-lg-b30">
						<div class="dz-media">
							<img src="images/about/about1.jpg" alt="" class="aos-item" data-aos="fade-down" data-aos-duration="800" data-aos-delay="400">
							<div class="year-exp aos-item" data-aos="fade-up" data-aos-duration="800" data-aos-delay="500">
								<h2 class="year text-primary">25</h2>
								<h4 class="text">Years Of<br/>Experience</h4>
							</div>
						</div>
					</div>
					<div class="col-lg-6 aos-item" data-aos="fade-in" data-aos-duration="1500" data-aos-delay="800">
						<div class="section-head style-1">
							<h6 class="text-primary sub-title">Welcome To Estate Genie</h6>
							<h2 class="title">We Can Create More Than You Expect</h2>
						</div>
						<p>Orion LTD, is a dynamic organization focused on crafting unique and innovative digital solutions to daily problems.<br>
							Our primary focus is on the previously unexplored residential industry. <br>
							It is our ambition to create the first and only network of online residential neighborhoods.<br>						We are aggressively positioning our company to take the dominant share of the nations’ residential market.
						</p>
						<div class="row">
							<div class="col-md-6">
								<div class="about-text-bx">
									<h4>Managers</h4>
									<p>Curabitur vel auctor nibh. Curabitur egestas posuere mi, sed pulvinar ligula.</p>
								</div>
							</div>
							<div class="col-md-6">
								<div class="about-text-bx">
									<h4>Residents</h4>
									<p>Curabitur vel auctor nibh. Curabitur egestas posuere mi, sed pulvinar ligula.</p>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- About Us -->
		<div class="about-video-box">
			<div class="video-bx content-media style-1">
				<img src="images/background/video-bg.jpg" alt="">
				<div class="video-btn aos-item" data-aos="zoom-in" data-aos-duration="1500" data-aos-delay="200">
					<a href="https://www.youtube.com/" class="popup-youtube"><i class="fa fa-play"></i></a>
				</div>
			</div>
		</div>
		<!-- Testimonials -->
		<section class="content-inner section-title style-1">
			<div class="container">
				<div class="row ">
					<div class="col-md-12">
						<div class="section-head style-1 text-center">
							<h6 class="text-primary sub-title">Testimonial</h6>
							<h2 class="title">See What Our Clients Says</h2>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-lg-12 m-b20">
						<div class="swiper-container testimonial-swiper">
							<div class="swiper-wrapper">
								<div class="swiper-slide aos-item" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="200">
									<div class="testimonial-1">
										<div class="testimonial-pic">
											<img src="images/testimonials/pic1.jpg" alt="">
											<div class="info">
												<h5 class="testimonial-name">John</h5> 
												<span class="testimonial-position text-primary">Estate A</span> 
											</div>
										</div>
										<div class="testimonial-info">
											<div class="testimonial-text">
												<p>Suspendisse sem est, eleifend id vulputate sit amet, rhoncus mollis justo. Cras iaculis justo ac dictum vestibulum. Cras id arcu turpis. Nulla ligula velit, condimentum ut orci eget, semper efficitur odio. applale Dgafgad</p>
											</div>
											<div class="testimonial-review">
												<ul class="star-rating text-primary">
													<li><i class="fa fa-star"></i></li>
													<li><i class="fa fa-star"></i></li>
													<li><i class="fa fa-star"></i></li>
													<li><i class="fa fa-star"></i></li>
													<li><i class="fa fa-star"></i></li>
												</ul>
												<h4 class="review">Awesome</h4>
											</div>
										</div>
									</div>
								</div>
								<div class="swiper-slide aos-item" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="400">
									<div class="testimonial-1">
										<div class="testimonial-pic">
											<img src="images/testimonials/pic2.jpg" alt="">
											<div class="info">
												<h5 class="testimonial-name">Caroline</h5> 
												<span class="testimonial-position text-primary">Estate B</span> 
											</div>
										</div>
										<div class="testimonial-info">
											<div class="testimonial-text">
												<p>Suspendisse sem est, eleifend id vulputate sit amet, rhoncus mollis justo. Cras iaculis justo ac dictum vestibulum. Cras id arcu turpis. Nulla ligula velit, condimentum ut orci eget, semper efficitur odio.</p>
											</div>
											<div class="testimonial-review">
												<ul class="star-rating text-primary">
													<li><i class="fa fa-star"></i></li>
													<li><i class="fa fa-star"></i></li>
													<li><i class="fa fa-star"></i></li>
													<li><i class="fa fa-star"></i></li>
													<li><i class="fa fa-star"></i></li>
												</ul>
												<h4 class="review">Best Quality</h4>
											</div>
										</div>
									</div>
								</div>
								<div class="swiper-slide aos-item" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="600">
									<div class="testimonial-1">
										<div class="testimonial-pic">
											<img src="images/testimonials/pic3.jpg" alt="">
											<div class="info">
												<h5 class="testimonial-name">Kimberly</h5> 
												<span class="testimonial-position text-primary">Estate C</span> 
											</div>
										</div>
										<div class="testimonial-info">
											<div class="testimonial-text">
												<p>Suspendisse sem est, eleifend id vulputate sit amet, rhoncus mollis justo. Cras iaculis justo ac dictum vestibulum. Cras id arcu turpis. Nulla ligula velit, condimentum ut orci eget, semper efficitur odio.</p>
											</div>
											<div class="testimonial-review">
												<ul class="star-rating text-primary">
													<li><i class="fa fa-star"></i></li>
													<li><i class="fa fa-star"></i></li>
													<li><i class="fa fa-star"></i></li>
													<li><i class="fa fa-star"></i></li>
													<li><i class="fa fa-star"></i></li>
												</ul>
												<h4 class="review">Use Fully</h4>
											</div>
										</div>
									</div>
								</div>
								<div class="swiper-slide aos-item" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="200">
									<div class="testimonial-1">
										<div class="testimonial-pic">
											<img src="images/testimonials/pic1.jpg" alt="">
											<div class="info">
												<h5 class="testimonial-name">Ginger Plantq</h5> 
												<span class="testimonial-position text-primary">Estate D</span> 
											</div>
										</div>
										<div class="testimonial-info">
											<div class="testimonial-text">
												<p>Suspendisse sem est, eleifend id vulputate sit amet, rhoncus mollis justo. Cras iaculis justo ac dictum vestibulum. Cras id arcu turpis. Nulla ligula velit, condimentum ut orci eget, semper efficitur odio.</p>
											</div>
											<div class="testimonial-review">
												<ul class="star-rating text-primary">
													<li><i class="fa fa-star"></i></li>
													<li><i class="fa fa-star"></i></li>
													<li><i class="fa fa-star"></i></li>
													<li><i class="fa fa-star"></i></li>
													<li><i class="fa fa-star"></i></li>
												</ul>
												<h4 class="review">Grateful</h4>
											</div>
										</div>
									</div>
								</div>
								<div class="swiper-slide aos-item" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="400">
									<div class="testimonial-1">
										<div class="testimonial-pic">
											<img src="images/testimonials/pic2.jpg" alt="">
											<div class="info">
												<h5 class="testimonial-name">Fay Daway</h5> 
												<span class="testimonial-position text-primary">Estate E</span> 
											</div>
										</div>
										<div class="testimonial-info">
											<div class="testimonial-text">
												<p>Suspendisse sem est, eleifend id vulputate sit amet, rhoncus mollis justo. Cras iaculis justo ac dictum vestibulum. Cras id arcu turpis. Nulla ligula velit, condimentum ut orci eget, semper efficitur odio.</p>
											</div>
											<div class="testimonial-review">
												<ul class="star-rating text-primary">
													<li><i class="fa fa-star"></i></li>
													<li><i class="fa fa-star"></i></li>
													<li><i class="fa fa-star"></i></li>
													<li><i class="fa fa-star"></i></li>
													<li><i class="fa fa-star"></i></li>
												</ul>
												<h4 class="review">Awesome</h4>
											</div>
										</div>
									</div>
								</div>
							</div>
							<!-- Add Navigation -->
							<div class="swiper-pagination1 text-center"></div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- Team -->
		<section class="content-inner section-title">
			<div class="container">
				<div class="section-head style-1 text-center">
					<h6 class="text-primary sub-title">Our Team</h6>
					<h2 class="title">Our Creative Expertise</h2>
				</div>
				<div class="row">
					<div class="col-lg-12 m-b30">
						<div class="swiper-container team-swiper">
							<div class="swiper-wrapper">
								<div class="swiper-slide">
									<div class="dz-team style-1 text-center m-b30 overlay-shine aos-item" data-aos="fade-up" data-aos-duration="1500" data-aos-delay="200">
										<div class="dz-media">
											<a href="javascript:void(0);"><img src="images/team/pic1.jpg" alt=""></a>
											<ul class="team-social">
												<li><a href="javascript:void(0);"><i class="fab fa-facebook-f"></i></a></li>
												<li><a href="javascript:void(0);"><i class="fab fa-instagram"></i></a></li>
												<li><a href="javascript:void(0);"><i class="fab fa-twitter"></i></a></li>
											</ul>
										</div>
										<div class="dz-content">
											<h5 class="dz-name"><a href="javascript:void(0);">Akinseloye Kehinde</a></h5>
											<h6 class="dz-position text-primary">CEO</h6>
										</div>
									</div>
								</div>	
								<div class="swiper-slide">
									<div class="dz-team style-1 text-center m-b30 overlay-shine aos-item" data-aos="fade-up" data-aos-duration="1500" data-aos-delay="400">
										<div class="dz-media">
											<a href="javascript:void(0);"><img src="images/team/pic2.jpg" alt=""></a>
											<ul class="team-social">
												<li><a href="javascript:void(0);"><i class="fab fa-facebook-f"></i></a></li>
												<li><a href="javascript:void(0);"><i class="fab fa-instagram"></i></a></li>
												<li><a href="javascript:void(0);"><i class="fab fa-twitter"></i></a></li>
											</ul>
										</div>
										<div class="dz-content">
											<h5 class="dz-name"><a href="javascript:void(0);">Rebecca Ruth</a></h5>
											<h6 class="dz-position text-primary">Director</h6>
										</div>
									</div>
								</div>
								<div class="swiper-slide">
									<div class="dz-team style-1 text-center m-b30 overlay-shine aos-item" data-aos="fade-up" data-aos-duration="1500" data-aos-delay="600">
										<div class="dz-media">
											<a href="javascript:void(0);"><img src="images/team/pic3.jpg" alt=""></a>
											<ul class="team-social">
												<li><a href="javascript:void(0);"><i class="fab fa-facebook-f"></i></a></li>
												<li><a href="javascript:void(0);"><i class="fab fa-instagram"></i></a></li>
												<li><a href="javascript:void(0);"><i class="fab fa-twitter"></i></a></li>
											</ul>
										</div>
										<div class="dz-content">
											<h5 class="dz-name"><a href="javascript:void(0);">Austin Doe</a></h5>
											<h6 class="dz-position text-primary">Director</h6>
										</div>
									</div>
								</div>	
								<div class="swiper-slide">
									<div class="dz-team style-1 text-center m-b30 overlay-shine aos-item" data-aos="fade-up" data-aos-duration="1500" data-aos-delay="800">
										<div class="dz-media">
											<a href="javascript:void(0);"><img src="images/team/pic4.jpg" alt=""></a>
											<ul class="team-social">
												<li><a href="javascript:void(0);"><i class="fab fa-facebook-f"></i></a></li>
												<li><a href="javascript:void(0);"><i class="fab fa-instagram"></i></a></li>
												<li><a href="javascript:void(0);"><i class="fab fa-twitter"></i></a></li>
											</ul>
										</div>
										<div class="dz-content">
											<h5 class="dz-name"><a href="javascript:void(0);">Lala Rose</a></h5>
											<h6 class="dz-position text-primary">Director</h6>
										</div>
									</div>
								</div>
								<div class="swiper-slide">
									<div class="dz-team style-1 text-center m-b30 overlay-shine aos-item" data-aos="fade-up" data-aos-duration="1500" data-aos-delay="200">
										<div class="dz-media">
											<a href="javascript:void(0);"><img src="images/team/pic2.jpg" alt=""></a>
											<ul class="team-social">
												<li><a href="javascript:void(0);"><i class="fab fa-facebook-f"></i></a></li>
												<li><a href="javascript:void(0);"><i class="fab fa-instagram"></i></a></li>
												<li><a href="javascript:void(0);"><i class="fab fa-twitter"></i></a></li>
											</ul>
										</div>
										<div class="dz-content">
											<h5 class="dz-name"><a href="javascript:void(0);">Andrey Carol</a></h5>
											<h6 class="dz-position text-primary">Director</h6>
										</div>
									</div>
								</div>
							</div>
							<div class="swiper-pagination2 text-center"></div>
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