<?php
    session_start();
    include('inc/config.php');

    $page_name = 'News';
    $page_banner_name = 'News';
    $page_parent = '';
    $page_parent_url = '';
    $page_title = 'Welcome to the Official Website of '.$settings->siteTitle;
    $page_description = 'Bridging the gap between Managers and Residents...';
    $banner_img_url = 'images/banner/news.jpg';
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


		<!-- Blog Large -->
		<div class="content-inner">
			<div class="container">
				<div class="row" id="masonry">
					<div class="col-xl-6 col-lg-6 card-container">
						<div class="dz-card blog-grid style-1 m-b50 aos-item" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="200">
							<div class="dz-media">
								<a href="#"><img src="images/blog/large/pic1.jpg" alt=""></a>
							</div>
							<div class="dz-info">
								<div class="dz-meta">
									<ul>
										<li class="post-date">25 Feb 2021</li>
										<li class="post-user">By <a href="javascript:void(0);">John Doe</a></li>
									</ul>
								</div>
								<h3 class="dz-title"><a href="#">Estate Troubles? 5 Ways To Alert Managers and Security.</a></h3>
								<div class="dz-post-text text">
									<p>Sed non sapien urna. Cras quis porta risus, vitae pulvinar nibh. In hac habitasse platea dictumst. Integer congue et enim cursus porttitor. Vestibulum mattis placerat magna, sit amet laoreet sapien.</p>
								</div>
								<a href="#" class="btn-link">Read More</a>
							</div>
						</div>
					</div>
					<div class="col-xl-6 col-lg-6 card-container">	
						<div class="dz-card blog-grid style-1 m-b50 aos-item" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="200">
							<div class="dz-media">
								<div class="swiper-container post-swiper">
									<div class="swiper-wrapper">
										<div class="swiper-slide">
											<a href="#"><img src="images/blog/large/pic2.jpg" alt=""></a>
										</div>
										<div class="swiper-slide">
											<a href="#"><img src="images/blog/large/pic1.jpg" alt=""></a>
										</div>
										<div class="swiper-slide">
											<a href="#"><img src="images/blog/large/pic3.jpg" alt=""></a>
										</div>
									</div>
									<div class="prev-post-swiper-btn"><i class="la fa-angle-left"></i></div>
									<div class="next-post-swiper-btn"><i class="la fa-angle-right"></i></div>
								</div>
							</div>
							<div class="dz-info">
								<div class="dz-meta">
									<ul>
										<li class="post-date">24 March 2021</li>
										<li class="post-user">By <a href="javascript:void(0);">John Doe</a></li>
									</ul>
								</div>
								<h3 class="dz-title"><a href="#">Estate Troubles? 5 Ways To Alert Managers and Security.</a></h3>
								<div class="dz-post-text text">
									<p>Sed non sapien urna. Cras quis porta risus, vitae pulvinar nibh. In hac habitasse platea dictumst. Integer congue et enim cursus porttitor. Vestibulum mattis placerat magna, sit amet laoreet sapien.</p>
								</div>
								<a href="#" class="btn-link">Read More</a>
							</div>
						</div>
					</div>
					<div class="col-xl-6 col-lg-6 card-container">		
						<div class="dz-card blog-grid style-1 m-b50 post-video aos-item" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="200">
							<div class="dz-media">
								<a href="#">
									<img src="images/blog/large/pic3.jpg" alt="">
									<div class="post-video-icon"><i class="fas fa-play"></i></div>
								</a>
							</div>
							<div class="dz-info">
								<div class="dz-meta">
									<ul>
										<li class="post-date">04 April 2021</li>
										<li class="post-user">By <a href="javascript:void(0);">John Doe</a></li>
									</ul>
								</div>
								<h3 class="dz-title"><a href="#">Estate Troubles? 5 Ways To Alert Managers and Security.</a></h3>
								<div class="dz-post-text text">
									<p>Sed non sapien urna. Cras quis porta risus, vitae pulvinar nibh. In hac habitasse platea dictumst. Integer congue et enim cursus porttitor. Vestibulum mattis placerat magna, sit amet laoreet sapien.</p>
								</div>
								<a href="#" class="btn-link">Read More</a>
							</div>
						</div>
					</div>
					<div class="col-xl-6 col-lg-6 card-container">		
						<div class="dz-card blog-grid style-1 m-b50 aos-item" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="200">
							<div class="dz-info">
								<div class="dz-meta">
									<ul>
										<li class="post-date">2 May 2021</li>
										<li class="post-user">By <a href="javascript:void(0);">John Doe</a></li>
									</ul>
								</div>
								<h3 class="dz-title"><a href="#">Estate Troubles? 5 Ways To Alert Managers and Security.</a></h3>
								<div class="dz-post-text text">
									<p>Sed non sapien urna. Cras quis porta risus, vitae pulvinar nibh. In hac habitasse platea dictumst. Integer congue et enim cursus porttitor. Vestibulum mattis placerat magna, sit amet laoreet sapien.</p>
								</div>
								<a href="#" class="btn-link">Read More</a>
							</div>
						</div>
					</div>
					<div class="col-xl-6 col-lg-6 card-container">
						<div class="dz-card blog-grid style-1 m-b50 aos-item" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="200">
							<div class="dz-media">
								<a href="#"><img src="images/blog/large/pic2.jpg" alt=""></a>
							</div>
							<div class="dz-info">
								<div class="dz-meta">
									<ul>
										<li class="post-date">4 June 2021</li>
										<li class="post-user">By <a href="javascript:void(0);">John Doe</a></li>
									</ul>
								</div>
								<h3 class="dz-title"><a href="#">Estate Troubles? 5 Ways To Alert Managers and Security.</a></h3>
								<div class="dz-post-text text">
									<p>Sed non sapien urna. Cras quis porta risus, vitae pulvinar nibh. In hac habitasse platea dictumst. Integer congue et enim cursus porttitor. Vestibulum mattis placerat magna, sit amet laoreet sapien.</p>
								</div>
								<a href="#" class="btn-link">Read More</a>
							</div>
						</div>
					</div>
					<div class="col-xl-6 col-lg-6 card-container">		
						<div class="dz-card blog-grid style-1 m-b50 aos-item" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="200">
							<div class="dz-info">
								<div class="dz-meta">
									<ul>
										<li class="post-date">7 March 2021</li>
										<li class="post-user">By <a href="javascript:void(0);">John Doe</a></li>
									</ul>
								</div>
								<h3 class="dz-title"><a href="#">Estate Troubles? 5 Ways To Alert Managers and Security.</a></h3>
								<div class="dz-post-text text">
									<p>Sed non sapien urna. Cras quis porta risus, vitae pulvinar nibh. In hac habitasse platea dictumst. Integer congue et enim cursus porttitor. Vestibulum mattis placerat magna, sit amet laoreet sapien.</p>
								</div>
								<a href="#" class="btn-link">Read More</a>
							</div>
						</div>
					</div>
				</div>
				<div class="row">		
					<div class="col-xl-12 col-lg-12">		
						<nav aria-label="Blog Pagination">
							<ul class="pagination text-center m-b30">
								<li class="page-item"><a class="page-link prev" href="javascript:void(0);"><i class="la la-angle-left"></i></a></li>
								<li class="page-item"><a class="page-link active" href="javascript:void(0);">1</a></li>
								<li class="page-item"><a class="page-link" href="javascript:void(0);">2</a></li>
								<li class="page-item"><a class="page-link" href="javascript:void(0);">3</a></li>
								<li class="page-item"><a class="page-link next" href="javascript:void(0);"><i class="la la-angle-right"></i></a></li>
							</ul>
						</nav>
					</div>
				</div>
			</div>
		</div>
	
		
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