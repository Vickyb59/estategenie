<header class="site-header mo-left header style-1">
    <!-- Header Top Bar -->
    <div class="top-bar">
        <div class="container-fluid">
            <div class="dz-topbar-inner d-flex justify-content-between align-items-center">
                <div class="dz-topbar-left">
                    <ul class="dz-social-icon">
                        <li><a class="fab fa-facebook-f" href="javascript:void(0);"></a></li>
                        <li><a class="fab fa-instagram" href="javascript:void(0);"></a></li>
                        <li><a class="fab fa-twitter" href="javascript:void(0);"></a></li>
                        <li><a class="fab fa-youtube" href="javascript:void(0);"></a></li>
                    </ul>
                </div>
                <div class="dz-topbar-right">
                    <ul>
                        <li><i class="fas fa-map-marker-alt"></i> <?php echo $settings->address; ?></li>
                        <li><i class="far fa-envelope"></i> <?php echo $settings->email; ?></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    
    <!-- Main Header -->
    <div class="sticky-header main-bar-wraper navbar-expand-lg">
        <div class="main-bar clearfix ">
            <div class="container-fluid clearfix">
                <!-- Website Logo -->
                <div class="logo-header mostion logo-dark">
                    <a href="<?php echo $baseurl; ?>"><img src="images/logo.png" alt=""></a>
                </div>
                <!-- Nav Toggle Button -->
                <button class="navbar-toggler collapsed navicon justify-content-end" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                    <span></span>
                    <span></span>
                    <span></span>
                </button>
                <!-- Extra Nav -->
                <div class="extra-nav">
                    <div class="extra-cell">
                        <a href="javascript:void();" data-bs-toggle="modal" data-bs-target="#exampleModal" class="btn shadow-primary btn-primary login-btn btn-sm">
                            <i class="fab fa-android"></i>
                            <span>Download App</span>
                        </a>
                        <a href="javascript:void();" data-bs-toggle="modal" data-bs-target="#exampleModal" class="btn shadow-primary btn-primary login-btn btn-sm">
                            <span>Login</span>
                        </a>
                        <div class="menu-btn navicon">
                            <span></span>
                            <span></span>
                            <span></span>
                        </div>
                    </div>
                </div>
                <!-- Extra Nav -->
                <!-- Quik Search -->
                <div class="header-nav navbar-collapse collapse justify-content-end" id="navbarNavDropdown">
                    <div class="logo-header">
                        <a href="<?= $baseurl; ?>"><img src="images/logo.png" alt=""></a>
                    </div>
                    <ul class="nav navbar-nav navbar navbar-left">  
                        <li <?php echo ( $page_name == 'Home' || $page_parent == 'Home') ? 'class="active"' : ''; ?>><a href="<?= $baseurl; ?>">Home</a></li>
                        <li <?php echo ( $page_name == 'About Us' || $page_parent == 'About Us') ? 'class="active"' : ''; ?>><a href="about">About Us</a></li>
                        <li <?php echo ( $page_name == 'Features' || $page_parent == 'Features') ? 'class="active"' : ''; ?>><a href="features">Features</a></li>
                        <li class="sub-menu-down <?php echo ( $page_name == 'Onboarding' || $page_parent == 'Onboarding') ? 'active' : ''; ?> "><a href="onboarding">Onboarding</a>
                            <ul class="sub-menu">
                                <li><a href="vendor-onboarding">Vendor</a></li>
                                <li><a href="resident-onboarding">Resident</a></li>
                            </ul>
                        </li>
                        <!--<li <?= ( $page_name == 'Pricing' || $page_parent == 'Pricing') ? 'class="active"' : ''; ?>><a href="pricing">Pricing</a></li>-->
                        <li <?php echo ( $page_name == 'Blog' || $page_parent == 'Blog') ? 'class="active"' : ''; ?>><a href="blog">Blog</a></li>
                        <li <?php echo ( $page_name == 'Contact Us' || $page_parent == 'Contact Us') ? 'class="active"' : ''; ?>><a href="contact">Contact Us</a></li>
                    </ul>
                    <div class="dz-social-icon">
                        <ul>
                            <li><a class="fab fa-facebook-f" href="javascript:void(0);"></a></li>
                            <li><a class="fab fa-twitter" href="javascript:void(0);"></a></li>
                            <li><a class="fab fa-linkedin-in" href="javascript:void(0);"></a></li>
                            <li><a class="fab fa-instagram" href="javascript:void(0);"></a></li>
                        </ul>
                    </div>  
                </div>
            </div>
        </div>
    </div>
    <!-- Main Header End -->
</header>