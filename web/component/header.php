<?php require_once "./static/iso_menu.php" ?>

<!-- Start PreLoader 
    ============================================= -->
<div class="preloader">
	<div class="preloader-container">
		<span class="preloader-text">Bizzar</span>
		<div class="preloader-animation">
		</div>
	</div>
</div>
<!-- Start PreLoader-->

<!-- Start header
    ============================================= -->
<header class="header header-before-off">
	<div class="main-wrapper">
		<div class="navbar navbar-expand-lg bsnav bsnav-sticky bsnav-sticky-slide bsnav-transparent">
			<span class="navbar-bar-shape"></span>
			<div class="navbar-container">
				<div class="navbar-extra-logo">
					<a href="index.html">
						<img src="<?= rootURL(); ?>assets/img/logo/logo-white.png" class="logo-outside" alt="thumb">
					</a>
				</div>
				<div class="top-header-menu">
					<div class="top-bar-area pos-rel topbar-white">
						<span class="top-bar-shape"></span>
						<div class="row">
							<div class="col-xl-10 col-lg-6">
								<div class="top-box-wrp d-flex justify-content-md-center align-items-center">
									<div class="top-box top-location mr-30">
										<i class="fa-solid fa-location-dot"></i>
										<span>55/72 Moo 2, Bangbuathong, Nonthaburi</span>
									</div>
									<div class="top-email top-box mr-30">
										<i class="fa-solid fa-envelope"></i>
										<span>Onestopiso2565@gmail.com</span>
									</div>
									<div class="top-phone top-box">
										<i class="fa-solid fa-phone"></i>
										<span> 064-645-1525 </span>
									</div>
								</div>
							</div>

						</div>
					</div>
					<div class="navbar-menu-opt">
						<div class="navbar-brand-tog">
							<a class="navbar-brand g-nop" href="index.html">
								<img src="<?= rootURL(); ?>assets/img/logo/logo-white.png" class="logo-display" alt="thumb">
								<img src="<?= rootURL(); ?>assets/img/logo/logo.png" class="logo-scrolled" alt="thumb">
							</a>
							<button class="navbar-toggler toggler-spring">
								<span class="navbar-toggler-icon"></span>
							</button>
						</div>
						<div class="collapse navbar-collapse justify-content-md-between">
							<a class="navbar-brand nop" href="index.html">
								<img src="<?= rootURL(); ?>assets/img/logo/logo-white.png" class="logo-display" alt="thumb">
								<img src="<?= rootURL(); ?>assets/img/logo/logo.png" class="logo-scrolled" alt="thumb">
							</a>
							<ul class="navbar-nav navbar-mobile justify-content-md-center w-100">
								<li class="nav-item dropdown fadeup">
									<a class="nav-link" href="/">หน้าหลัก</a>
								</li>
								<!-- <li class="nav-item dropdown fadeup">
										<a class="nav-link" href="#">Pages <i class="ti-plus"></i></a>
										<ul class="navbar-nav">
											<li class="nav-item"><a class="nav-link" href="service.html">Services</a></li>
											<li class="nav-item"><a class="nav-link" href="service-single.html">Service Single</a></li>
											<li class="nav-item"><a class="nav-link" href="gallery.html">Projects</a></li>
											<li class="nav-item"><a class="nav-link" href="project-single.html">Project Single</a></li>
											<li class="nav-item"><a class="nav-link" href="team.html">Team</a></li>
											<li class="nav-item"><a class="nav-link" href="price.html">Pricing Table</a></li>
											<li class="nav-item"><a class="nav-link" href="register.html">Register Page</a></li>
											<li class="nav-item"><a class="nav-link" href="login.html">Login Page</a></li>
											<li class="nav-item"><a class="nav-link" href="faq.html">Faq</a></li>
											<li class="nav-item"><a class="nav-link" href="404.html">404</a></li>
										</ul>
									</li> -->
								<li class="nav-item"><a class="nav-link" href="about.html">เกี่ยวกับเรา</a></li>
								<li class="nav-item dropdown fadeup">
									<a class="nav-link" href="#">มาตรฐาน ISO <i class="ti-plus"></i></a>
									<ul class="navbar-nav">
										<?php
										foreach ($iso_standards as $standard => $details) {
											echo "<li class='nav-item'><a class='nav-link' href='#'>$standard</a></li>";
										}
										?>
									</ul>
								</li>
								<!-- <li class="nav-item dropdown fadeup">
										<a class="nav-link" href="#">Blog <i class="ti-plus"></i></a>
										<ul class="navbar-nav">
											<li class="nav-item"><a class="nav-link" href="blog.html">Blog</a></li>
											<li class="nav-item"><a class="nav-link" href="blog-standard.html">Blog Standard</a></li>
											<li class="nav-item"><a class="nav-link" href="single.html">Blog Single</a></li>
										</ul>
									</li> -->
								<li class="nav-item"><a class="nav-link" href="contact.html">ติดต่อเรา</a></li>
							</ul>
							<!-- <div class="search-cart nav-profile">
									<a href="contact.html" class="btn-1 btn-sm">Let's Begin</a>
								</div> -->
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="bsnav-mobile">
			<div class="bsnav-mobile-overlay"></div>
			<div class="navbar"></div>
		</div>
	</div>
</header>
<!-- End header -->