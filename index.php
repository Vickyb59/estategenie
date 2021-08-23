<?php
   session_start();
   include('inc/config.php');
   
   $page_name = 'Home';
   $page_parent = '';
   $page_title = 'Welcome to the Official Website of '.$settings->siteTitle;
   $page_description = 'Bridging the gap between Managers and Residents...';
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
		<!-- Slider -->
		<?php include('inc/slider.php'); ?>
		
		<!-- Clients Logo -->
		<div class="clients-section-1  pb-0">
			<div class="container">
				<div class="swiper-container clients-swiper">
					<div class="swiper-wrapper">
						<div class="swiper-slide">
							<div class="clients-logo aos-item" data-aos="fade-in" data-aos-duration="1000" data-aos-delay="100">
								<img class="logo-main" src="images/logo/logo-gray1.png" alt="">
								<img class="logo-hover" src="images/logo/logo-brown1.png" alt="">
							</div>
						</div>	
						<div class="swiper-slide">
							<div class="clients-logo aos-item" data-aos="fade-in" data-aos-duration="1000" data-aos-delay="200">
								<img class="logo-main" src="images/logo/logo-gray2.png" alt="">
								<img class="logo-hover" src="images/logo/logo-brown2.png" alt="">
							</div>
						</div>
						<div class="swiper-slide">
							<div class="clients-logo aos-item" data-aos="fade-in" data-aos-duration="1000" data-aos-delay="300">
								<img class="logo-main" src="images/logo/logo-gray3.png" alt="">
								<img class="logo-hover" src="images/logo/logo-brown3.png" alt="">
							</div>
						</div>	
						<div class="swiper-slide">
							<div class="clients-logo aos-item" data-aos="fade-in" data-aos-duration="1000" data-aos-delay="400">
								<img class="logo-main" src="images/logo/logo-gray4.png" alt="">
								<img class="logo-hover" src="images/logo/logo-brown4.png" alt="">
							</div>
						</div>
						<div class="swiper-slide">
							<div class="clients-logo aos-item" data-aos="fade-in" data-aos-duration="1000" data-aos-delay="500">
								<img class="logo-main" src="images/logo/logo-gray5.png" alt="">
								<img class="logo-hover" src="images/logo/logo-brown5.png" alt="">
							</div>
						</div>
						<div class="swiper-slide">
							<div class="clients-logo aos-item" data-aos="fade-in" data-aos-duration="1000" data-aos-delay="600">
								<img class="logo-main" src="images/logo/logo-gray6.png" alt="">
								<img class="logo-hover" src="images/logo/logo-brown6.png" alt="">
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- About Us -->
		<section class="content-inner-2">
			<div class="container">
				<div class="row align-items-center about-bx1">
					<div class="col-lg-6 m-lg-b30">
						<div class="dz-media">
							<img src="images/about/about.jpg" alt="" class="aos-item" data-aos="fade-down" data-aos-duration="800" data-aos-delay="400">
							<div class="year-exp aos-item" data-aos="fade-up" data-aos-duration="800" data-aos-delay="500">
								<h2 class="year text-primary">25</h2>
								<h4 class="text">Years Of<br/>Experience</h4>
							</div>
						</div>
					</div>
					<div class="col-lg-6 aos-item" data-aos="fade-in" data-aos-duration="1500" data-aos-delay="800">
						<div class="section-head style-1">
							<h6 class="text-primary sub-title">Who we are </h6>
							<h2 class="title">The Link Between Management and Residents</h2>
						</div>
						<p>Orion LTD, is a dynamic organization focused on crafting unique and innovative digital solutions to daily problems.<br>
							Our primary focus is on the previously unexplored residential industry. <br>
							It is our ambition to create the first and only network of online residential neighborhoods.<br>						We are aggressively positioning our company to take the dominant share of the nations’ residential market.
						</p>
						<div class="row">
							<div class="col-md-6">
								<div class="about-text-bx">
									<h4>Managers</h4>
									<p>Our app holds a specially structured management center created for the Estate Managers.</p>
								</div>
							</div>
							<div class="col-md-6">
								<div class="about-text-bx">
									<h4>Residents</h4>
									<p>Adding value and convenience to the lives of Residents is the main aim of this digital solution.</p>
								</div>
							</div>
						</div>
						<a href="about" class="btn shadow-primary btn-primary">Learn More</a>
					</div>
				</div>
			</div>
		</section>
		<!-- About Us -->
		<!-- Our Features -->
		<section class="content-inner pt-5">
			<div class="container">
				<div class="row">
					<div class="col-lg-3 col-sm-6 aos-item" data-aos="fade-up" data-aos-duration="800" data-aos-delay="200">
						<div class="icon-bx-wraper style-6 m-b30" data-name="25">
							<h2 class="counter text-primary">25</h2>
							<h4 class="title">Trusted<br/>Partners</h4>
						</div>
					</div>
					<div class="col-lg-3 col-sm-6 aos-item" data-aos="fade-up" data-aos-duration="800" data-aos-delay="400">
						<div class="icon-bx-wraper style-6 m-b30" data-name="16">
							<h2 class="counter text-primary">16</h2>
							<h4 class="title">Estate<br/>Managed</h4>
						</div>
					</div>
					<div class="col-lg-3 col-sm-6 aos-item" data-aos="fade-up" data-aos-duration="800" data-aos-delay="600">
						<div class="icon-bx-wraper style-6 m-b30" data-name="571">
							<h2 class="counter text-primary">571</h2>
							<h4 class="title">Happy<br/>Clients</h4>
						</div>
					</div>
					<div class="col-lg-3 col-sm-6 aos-item" data-aos="fade-up" data-aos-duration="800" data-aos-delay="800">
						<div class="icon-bx-wraper style-6 m-b30" data-name="1255">
							<h2 class="counter text-primary">1255</h2>
							<h4 class="title">Estate <br/>Users</h4>
						</div>
					</div>
				</div>
			</div>
		</section>
		
		<!-- Our Features -->
		<section class="content-inner-2 bg-gray service-area" style="background-image:url(images/background/pattern3.png)">
			<div class="container">
				<div class="row m-b70 m-md-b10">
					<div class="col-lg-4 col-md-12 aos-item" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="200">
						<div class="section-head style-1">
							<h6 class="text-primary sub-title">What Our App Does</h6>
							<h2 class="title">See how we can make managing your estate a lot easier</h2>
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
										<h4 class="title m-b10">Simple</h4>
										<p>We can have your Estate Genie application up and running within a matter of hours, and we are entirely confident that our app will change your life and the way your estate connects residents and management.</p>
									</div>
								</div>
							</div>
							<div class="col-lg-6 col-sm-6 aos-item" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="400">
								<div class="icon-bx-wraper style-2 left m-b50">
									<div class="icon-bx-sm bg-primary icon-bx text-white">
										<i class="flaticon-furniture"></i> 
									</div>
									<div class="icon-content">
										<h4 class="title m-b10">Customisable</h4>
										<p>Our app is completely customisable and we can package the app to suit the needs of management, residents, service providers and everyone else involved.</p>
									</div>
								</div>
							</div>
							<div class="col-lg-6 col-sm-6 aos-item" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="600">
								<div class="icon-bx-wraper style-2 left m-b50">
									<div class="icon-bx-sm bg-primary icon-bx text-white">
										<i class="flaticon-support"></i> 
									</div>
									<div class="icon-content">
										<h4 class="title m-b10">A Connected Community</h4>
										<p>Eliminate disconnection and miscommunication between management and residents. Communicate through the mobile app and provide a bigger and better service than ever before.</p>
									</div>
								</div>
							</div>
							<div class="col-lg-6 col-sm-6 aos-item" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="800">
								<div class="icon-bx-wraper style-2 left m-b50">
									<div class="icon-bx-sm bg-primary icon-bx text-white">
										<i class="flaticon-home"></i> 
									</div>
									<div class="icon-content">
										<h4 class="title m-b10">Two Way System</h4>
										<p>Management can communicate with residents, and they can communicate back. This two-way communication on this mobile app removes the need for phone numbers, email addresses and conversation tracking.</p>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-12">
						<div class="video-bx content-media style-1">
							<img src="images/pic1.jpg" alt="">
							<div class="video-btn aos-item" data-aos="zoom-in" data-aos-duration="1500" data-aos-delay="200">
								<a href="https://www.youtube.com/" class="popup-youtube"><i class="fa fa-play"></i></a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
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
												<span class="testimonial-position text-primary">Magodo GRA</span> 
											</div>
										</div>
										<div class="testimonial-info">
											<div class="testimonial-text">
												<p>Since I started using the Estate-genie , I can easily schedule visits and permit my guest to exit my estate without hassles or delays, awesome.</p>
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
												<span class="testimonial-position text-primary">Harmony Estate</span> 
											</div>
										</div>
										<div class="testimonial-info">
											<div class="testimonial-text">
												<p>I recently rented a lovely flat through the estate genie platform, what’s more; I was able to hire all my interior design staff straight from the app, best quality.</p>
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
												<h5 class="testimonial-name">Fatima</h5> 
												<span class="testimonial-position text-primary">Atlantic Homes, Lekki(Vendor)</span> 
											</div>
										</div>
										<div class="testimonial-info">
											<div class="testimonial-text">
												<p>Moving to the island was daunting, but with the estate genie I was able to develop and expose my brand to my estate residents, now I have more clients than ever before,from the comfort of my home, use fully.</p>
											</div>
											<div class="testimonial-review">
												<ul class="star-rating text-primary">
													<li><i class="fa fa-star"></i></li>
													<li><i class="fa fa-star"></i></li>
													<li><i class="fa fa-star"></i></li>
													<li><i class="fa fa-star"></i></li>
													<li><i class="fa fa-star"></i></li>
												</ul>
												<h4 class="review">User Friendly</h4>
											</div>
										</div>
									</div>
								</div>
								<div class="swiper-slide aos-item" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="200">
									<div class="testimonial-1">
										<div class="testimonial-pic">
											<img src="images/testimonials/pic1.jpg" alt="">
											<div class="info">
												<h5 class="testimonial-name">Engr. Tokumbo</h5> 
												<span class="testimonial-position text-primary">Crown Estate, Lekki</span> 
											</div>
										</div>
										<div class="testimonial-info">
											<div class="testimonial-text">
												<p>Using the estate genie’s social-hub, I’ve established new connections and created  a social bubble, Liverpool for life, never walk alone.</p>
											</div>
											<div class="testimonial-review">
												<ul class="star-rating text-primary">
													<li><i class="fa fa-star"></i></li>
													<li><i class="fa fa-star"></i></li>
													<li><i class="fa fa-star"></i></li>
													<li><i class="fa fa-star"></i></li>
													<li><i class="fa fa-star"></i></li>
												</ul>
												<h4 class="review">Creating Network</h4>
											</div>
										</div>
									</div>
								</div>
								<div class="swiper-slide aos-item" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="400">
									<div class="testimonial-1">
										<div class="testimonial-pic">
											<img src="images/testimonials/pic2.jpg" alt="">
											<div class="info">
												<h5 class="testimonial-name">Dr Akeredolu</h5> 
												<span class="testimonial-position text-primary">Deputy Chairman; Dideolu Housing Estate, Ogba</span> 
											</div>
										</div>
										<div class="testimonial-info">
											<div class="testimonial-text">
												<p>Residents are more cooperative and social, the community's welfare and levies are attended to promptly, we love it.</p>
											</div>
											<div class="testimonial-review">
												<ul class="star-rating text-primary">
													<li><i class="fa fa-star"></i></li>
													<li><i class="fa fa-star"></i></li>
													<li><i class="fa fa-star"></i></li>
													<li><i class="fa fa-star"></i></li>
													<li><i class="fa fa-star"></i></li>
												</ul>
												<h4 class="review">Effective</h4>
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
		<!-- Content Box -->
		<section class="bg-gray" style="background-image:url(images/background/pattern3.png)">
			<div class="">
				<div class="row spno">
					<div class="col-lg-4 aos-item" data-aos="fade-in" data-aos-duration="1000" data-aos-delay="200">
						<img src="images/pic2.jpg" class="img-cover" alt=""/>
					</div>
					<div class="col-lg-4 aos-item" data-aos="fade-in" data-aos-duration="1000" data-aos-delay="400">
						<div class="mapouter"><div class="gmap_canvas"><iframe width="100%" height="100%" id="gmap_canvas" src="https://maps.google.com/maps?q=Lagos%20Island&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe><a href="https://123movies-to.org"></a><br><style>.mapouter{position:relative;text-align:right;height:100%;width:100%;}</style><a href="https://www.embedgooglemap.net">embed maps</a><style>.gmap_canvas {overflow:hidden;background:none!important;height:100%;width:100%;}</style></div></div>
					</div>
					<div class="col-lg-4 align-self-center aos-item" data-aos="fade-in" data-aos-duration="1000" data-aos-delay="600">
						<div class="newsletter-bx">
							<div class="section-head style-1">
								<h6 class="text-primary sub-title">Newsletter</h6>
								<h2 class="title">Stay Updated With Our Newsletter</h2>
							</div>
							<div class="dzFormMsg"></div>
							<form action="#" class="dzForm" method="post">
								<div class="form-group mb-3">
									<input type="text" name="dzName" required class="form-control" placeholder="Your Name">
								</div>
								<div class="form-group m-b30">
									<input type="email" name="dzEmail" required class="form-control" placeholder="Your Email Address">
								</div>
								<div class="form-group">
									<button name="submit" type="submit" value="Submit" class="btn btn-primary">Submit Now</button>
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- Blog -->
		<section class="content-inner-1">
			<div class="container">
				<div class="section-head style-1 text-center">
					<h6 class="text-primary sub-title">Our Blog</h6>
					<h2 class="title">Latest News Feed</h2>
				</div> 
				<div class="blog-area">
					<div class="swiper-container blog-swiper">
						<div class="swiper-wrapper">
							<div class="swiper-slide">
								<div class="dz-card blog-grid style-1 aos-item" data-aos="fade-up" data-aos-duration="2000" data-aos-delay="200">
									<div class="dz-media">
										<a href="#"><img src="images/blog/blog-grid/pic1.jpg" alt=""></a>
									</div>
									<div class="dz-info text-center">
										<div class="dz-meta">
											<ul>
												<li class="post-date">14 Feb 2021</li>
											</ul>
										</div>
										<h5 class="dz-title"><a href="#">Become a Registered Estate Agent.</a></h5>
										<div class="dz-post-text text">
											<p>You can become a registered Estate Agent from the comfort of your home. Just Sign Up now...</p>
										</div>
										<a href="#" class="btn-link">Read More</a>
									</div>
								</div>
							</div>
							<div class="swiper-slide">
								<div class="dz-card blog-grid style-1 aos-item" data-aos="fade-up" data-aos-duration="2000" data-aos-delay="500">
									<div class="dz-media">
										<a href="#"><img src="images/blog/blog-grid/pic2.jpg" alt=""></a>
									</div>
									<div class="dz-info text-center">
										<div class="dz-meta">
											<ul>
												<li class="post-date">25 March 2021</li>
											</ul>
										</div>
										<h5 class="dz-title"><a href="#">Estate Genie Mobile App.</a></h5>
										<div class="dz-post-text text">
											<p>Whatever your need, the Estate Genie Mobile App has got you covered. Request for help through the...</p>
										</div>
										<a href="#" class="btn-link">Read More</a>
									</div>
								</div>
							</div>
							<div class="swiper-slide">
								<div class="dz-card blog-grid style-1 aos-item" data-aos="fade-up" data-aos-duration="2000" data-aos-delay="800">
									<div class="dz-media">
										<a href="#"><img src="images/blog/blog-grid/pic3.jpg" alt=""></a>
									</div>
									<div class="dz-info text-center">
										<div class="dz-meta">
											<ul>
												<li class="post-date">7 June 2021</li>
											</ul>
										</div>
										<h5 class="dz-title"><a href="#">Estate Genie Farmers Market.</a></h5>
										<div class="dz-post-text text">
											<p>Get updated about the freshest farm produced from local concessionaires...</p>
										</div>
										<a href="#" class="btn-link">Read More</a>
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