<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-PDFL6WQN" height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->

<?php require_once "./static/iso_menu.php" ?>


<!-- Start PreLoader 
    ============================================= -->
<div class="preloader">
	<div class="preloader-container">
		<span class="preloader-text">one stop iso</span>
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
					<a href="/">
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
										<span>saleonestopiso@gmail.com</span>
									</div>
									<div class="top-phone top-box">
										<i class="fa-solid fa-phone"></i>
										<span> (+66) 63-645-2424 </span>
									</div>
								</div>
							</div>

						</div>
					</div>
					<div class="navbar-menu-opt">
						<div class="navbar-brand-tog">
							<a class="navbar-brand g-nop" href="/">
								<img src="<?= rootURL(); ?>assets/img/logo/logo-white.png" class="logo-display" alt="thumb">
								<img src="<?= rootURL(); ?>assets/img/logo/logo.png" class="logo-scrolled" alt="thumb">
							</a>
							<button class="navbar-toggler toggler-spring">
								<span class="navbar-toggler-icon"></span>
							</button>
						</div>
						<div class="collapse navbar-collapse justify-content-md-between">
							<a class="navbar-brand nop" href="/">
								<img src="<?= rootURL(); ?>assets/img/logo/logo-white.png" class="logo-display" alt="thumb">
								<img src="<?= rootURL(); ?>assets/img/logo/logo.png" class="logo-scrolled" alt="thumb">
							</a>
							<ul class="navbar-nav navbar-mobile justify-content-md-center w-100">
								<li class="nav-item"><a class="nav-link" href="/">หน้าหลัก</a></li>
								<li class="nav-item"><a class="nav-link" href="<?= rootURL(); ?>about-us/">เกี่ยวกับเรา</a></li>
								<li class="nav-item dropdown fadeup">
									<a class="nav-link" href="/services/">บริการของเรา<i class="ti-plus"></i></a>
									<ul class="navbar-nav">
										<li class="nav-item"><a class="nav-link" href="/services/traning/">Traning ISO</a></li>
										<li class="nav-item"><a class="nav-link" href="/services/consult/">Consult ISO</a></li>
										<li class="nav-item"><a class="nav-link" href="/services/preaudit/">Pre audit</a></li>

									</ul>
								</li>
								<li class="nav-item dropdown fadeup">
									<a class="nav-link" href="/">มาตรฐาน ISO <i class="ti-plus"></i></a>
									<ul class="navbar-nav">

										<?php
										require_once './static/services_data.php';
										$services_from_index_1 = array_slice($services, 1);
										foreach ($services_from_index_1 as $service) :
											echo "<li class='nav-item'><a class='nav-link' href='" . htmlspecialchars($service['link']) . "'>" . htmlspecialchars($service['title']) . "</a></li>";
										endforeach;
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
								<li class="nav-item"><a class="nav-link" href="<?= rootURL(); ?>contact-us/">ติดต่อเรา</a></li>
							</ul>
							<!-- <div class="search-cart nav-profile">
									<a href="/contact.php" class="btn-1 btn-sm">Let's Begin</a>
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