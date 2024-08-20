<!DOCTYPE html>
<html lang="en">

<head>

	<?php require_once "./head.php"; ?>

</head>

<body id="bdy">

	<?php require_once "./component/header.php"; ?>

	<main class="main">

		<!-- Start Slider
		============================================= -->
		<div class="hero-area home-2 mt-160 pos-rel">
			<div class="swiper hero-sldr">
				<div class="swiper-wrapper">
					<div class="swiper-slide hero-single-2">
						<div class="hero-bg-animate hero-bg animate-pos hero-overlay" style="background-image: url(assets/img/pictures/slider-1.png)">
						</div>
						<img src="<?= rootURL(); ?>assets/img/vector/mix-clean-5.png" class="mix-clean-5" alt="no image">
						<div class="container g-0">
							<div class="hero-wpr">
								<div class="row g-0">
									<div class="col-xl-8 offset-xl-2">
										<div class="hero-content text-center">
											<div class="hero-content-desc">
												<span class="hero-sub-title">
													<span class="hero-line"></span>
													ISO: ใบเบิกทางสู่ความสำเร็จทางธุรกิจ
												</span>
												<h2 class="hero-title">
													เพราะคุณภาพคือหัวใจ ISO คือคำตอบ
												</h2>
												<div class="hero-btn">
													<a href="<?= rootURL(); ?>contact-us/" class="btn-5 btn-md btn-white">Contact Us</a>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="swiper-slide hero-single-2">
						<div class="hero-bg-animate hero-bg animate-pos hero-overlay" style="background-image: url(assets/img/pictures/slider-2.png)">
						</div>
						<img src="<?= rootURL(); ?>assets/img/vector/mix-clean-5.png" class="mix-clean-5" alt="no image">
						<div class="container g-0">
							<div class="hero-wpr">
								<div class="row g-0">
									<div class="col-xl-8 offset-xl-2">
										<div class="hero-content text-center">
											<div class="hero-content-desc">
												<span class="hero-sub-title">
													<span class="hero-line"></span>
													ยกระดับธุรกิจคุณสู่มาตรฐานโลกกับ ISO
												</span>
												<h2 class="hero-title">
													ISO ไม่ใช่เรื่องยาก แค่เลือกผู้เชี่ยวชาญที่ใช่
												</h2>
												<div class="hero-btn">
													<a href="<?= rootURL(); ?>contact-us/" class="btn-5 btn-md btn-white">Contact Us</a>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="swiper-button-next"></div>
				<div class="swiper-button-prev"></div>
			</div>
		</div>
		<!-- End Slider -->

		<!-- Start About
		============================================= -->
		<div class="about-area-2 de-padding">
			<div class="container">
				<div class="about-wpr-2 grid-2">
					<div class="about-left-2">
						<div class="about-left-pics-2 pos-rel">
							<img src="<?= rootURL(); ?>assets/img/pictures/about-2-1.jpg" class="about-2-1" alt="no image">
							<img src="<?= rootURL(); ?>assets/img/pictures/about-2-2.jpg" class="about-2-2" alt="no image">
							<div class="about-exp-yr pos-rel">
								<div class="about-exp">
									<h2 class="heading-2">15+</h2>
									<h5 class="heading-5 mb-0">Years Experience</h5>
								</div>
								<img src="<?= rootURL(); ?>assets/img/person/person-1.png" alt="no image" class="about-exp-pic">
							</div>
						</div>
					</div>
					<div class="about-right-2 pl-30">
						<div class="about-right-up mb-30">
							<span class="hero-sub-title mb-20">
								<span class="hero-line"></span>
								about us
							</span>
							<h2 class="heading-1 mb-0">
								ONE STOP ISO พลิกโฉมธุรกิจคุณด้วยมาตรฐานระดับโลก
							</h2>
						</div>
						<p class="mb-30">
							เราคือทีมผู้เชี่ยวชาญที่พร้อมยกระดับธุรกิจของคุณสู่มาตรฐานสากล ด้วยประสบการณ์จากการเป็น AUDITOR มากกว่า 15 ปี
							และความเข้าใจลึกซึ้งในหลากหลายอุตสาหกรรม เราพร้อมเป็นพันธมิตรที่จะอยู่เคียงข้างคุณตั้งแต่เริ่มต้นจนได้รับการรับรอง
							ISO บริการหลักของเรา
						</p>
						<ul class="about-opt-list-2">
							<li><i class="ti-check"></i>วางระบบ ISO ครอบคลุมทุกมาตรฐาน</li>
							<li><i class="ti-check"></i>ให้คำปรึกษาปรับปรุงระบบงาน</li>
							<li><i class="ti-check"></i>อบรมเชิงปฏิบัติโดยผู้เชี่ยวชาญ</li>
							<li><i class="ti-check"></i>ดูแลตลอดกระบวนการรับรอง</li>
						</ul>
						<div class="about-contact-2">
							<div class="about-cnt-icon">
								<i class="ti-microphone"></i>
							</div>
							<div class="about-cnt-text">
								<h5 class="heading-5">ถ้ามีคำถามเพิ่มเติม เรายินดีให้คำปรึกษา!</h5>
								<p class="mb-0">
									<a href="tel:9123456789">(+66) 64-645-1525</a>
								</p>
							</div>
						</div>
						<a href="<? rootURL(); ?>about-us" class="btn-1 btn-md btn-border-2">
							ค้นพบเพิ่มเติม
						</a>
					</div>
				</div>
			</div>
		</div>
		<!-- End About -->

		<!-- Start Partner
		============================================= -->
		<?php require_once './component/partner.php' ?>
		<!-- End Partner -->

		<!-- Start Service ISO Standard
		============================================= -->
		<?php require_once './component/iso_standards.php' ?>

		<!-- End Service ISO Standard -->

		<!-- Start Service
		============================================= -->
		<?php require_once './component/services.php' ?>

		<!-- End Service -->

		<!-- Start Why Choose Us
		============================================= -->

		<div class="faq-area pos-rel de-padding">
			<img src="<?= rootURL(); ?>assets/img/shape/shape-11.png" class="shape-11" alt="no image">
			<div class="container">
				<div class="faq-wpr">
					<div class="row">
						<div class="col-xl-6">
							<div class="faq-pics pr-60 grid-2">
								<div class="faq-pic-1 pos-rel">
									<img src="<?= rootURL(); ?>assets/img/pictures/faq-3.jpg" alt="no image">
									<img src="<?= rootURL(); ?>assets/img/dot/faq-dot.png" class="faq-dot up-move" alt="no image">
								</div>
								<div class="faq-pic-2">
									<img src="<?= rootURL(); ?>assets/img/pictures/faq-1.jpg" alt="no image">
								</div>
								<div class="faq-pic-3">
									<img src="<?= rootURL(); ?>assets/img/pictures/faq-2.jpg" alt="no image">
								</div>
								<div class="faq-pic-4 pos-rel">
									<img src="<?= rootURL(); ?>assets/img/pictures/faq-4.jpg" alt="no image">
								</div>
							</div>
						</div>
						<div class="col-xl-6">
							<div class="course-accordion">
								<span class="hero-sub-title  mb-20">
									<span class="hero-line"></span>
									Why Choose Us
								</span>
								<h2 class="heading-1 mb-30">
									ก้าวสู่มาตรฐานสากล <br /> อย่างมั่นใจกับ ONE STOP ISO
								</h2>
								<p class="mb-30">
									ไม่ว่าคุณจะเริ่มต้นจากจุดไหน เรามีประสบการณ์และความเชี่ยวชาญที่จะช่วยให้คุณบรรลุเป้าหมายการได้รับการรับรอง ISO อย่างราบรื่นและมีประสิทธิภาพ
								</p>
								<ul class="about-opt-list-2">
									<li><i class="ti-check"></i>รองรับทุกระดับ ไม่ว่ามีพื้นฐานหรือไม่</li>
									<li><i class="ti-check"></i>ดูแลตลอดกระบวนการรับรอง</li>
									<li><i class="ti-check"></i>ให้คำปรึกษาพัฒนาระบบอย่างต่อเนื่อง</li>
									<li><i class="ti-check"></i>รับประกันผลลัพธ์ด้วยทีมผู้เชี่ยวชาญ</li>
								</ul>
								<div class="progress-wrapper mt-30">
									<div class="about-contact-2">
										<div class="about-cnt-icon">
											<i class="ti-microphone"></i>
										</div>
										<div class="about-cnt-text">
											<h5 class="heading-5">ก้าวสู่ความสำเร็จด้วยกันได้ตั้งแต่ตอนนี้ !</h5>
											<p class="mb-0">
												<a href="tel:9123456789">(+66) 64-645-1525</a>
											</p>
										</div>
									</div>

								</div>
								<a href="<? rootURL(); ?>about-us" class="btn-1 btn-md btn-border-2">
									ค้นพบเพิ่มเติม
								</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- End Why Choose Us -->

		<!-- Start Works
		============================================= -->
		<!-- <div class="work-area bg de-padding pos-rel">
			<img src="<?= rootURL(); ?>assets/img/vector/sub-shape.png" class="sub-shape" alt="no image">
			<div class="container">
				<div class="row">
					<div class="col-xl-8 offset-xl-2">
						<div class="site-title text-center">
							<span class="hero-sub-title  mb-20">
								<span class="hero-line"></span>
								Our Works
							</span>
							<h2 class="heading-1 mb-0">
								Together we can building <br />
								anything
							</h2>
						</div>
					</div>
				</div>
				<div class="work-wpr">
					<div class="swiper work-sldr">
						<div class="swiper-wrapper">
							<div class="swiper-slide">
								<div class="work-single">
									<div class="work-pic">
										<img src="<?= rootURL(); ?>assets/img/pictures/p-1.jpg" alt="no image">
										<div class="work-content">
											<span>app building</span>
											<a href="project-single.html">
												<h5 class="heading-5">Building a modern social <br /> Application</h5>
											</a>
											<a href="project-single.html" class="work-btn">Read More</a>
										</div>
									</div>
								</div>
							</div>
							<div class="swiper-slide">
								<div class="work-single">
									<div class="work-pic">
										<img src="<?= rootURL(); ?>assets/img/pictures/p-2.jpg" alt="no image">
										<div class="work-content">
											<span>app building</span>
											<a href="project-single.html">
												<h5 class="heading-5">Building a modern Agriculture <br /> Application</h5>
											</a>
											<a href="project-single.html" class="work-btn">Read More</a>
										</div>
									</div>
								</div>
							</div>
							<div class="swiper-slide">
								<div class="work-single">
									<div class="work-pic">
										<img src="<?= rootURL(); ?>assets/img/pictures/p-3.jpg" alt="no image">
										<div class="work-content">
											<span>app building</span>
											<a href="project-single.html">
												<h5 class="heading-5">Building a modern E-commerce <br /> Application</h5>
											</a>
											<a href="project-single.html" class="work-btn">Read More</a>
										</div>
									</div>
								</div>
							</div>
							<div class="swiper-slide">
								<div class="work-single">
									<div class="work-pic">
										<img src="<?= rootURL(); ?>assets/img/pictures/p-4.jpg" alt="no image">
										<div class="work-content">
											<span>app building</span>
											<a href="project-single.html">
												<h5 class="heading-5">Building a modern business <br /> Application</h5>
											</a>
											<a href="project-single.html" class="work-btn">Read More</a>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="swiper-pagination"></div>
					</div>
				</div>
			</div>
		</div> -->
		<!-- End Works -->

		<!-- Start CTA
		============================================= -->
		<div class="cta-area hero-overlay hero-bg de-pt cta-btm" style="background:url(assets/img/pictures/counter.jpg)">
			<div class="container">
				<div class="cta-wpr grid-2">
					<div class="cta-left">
						<span class="hero-sub-title wh mb-20">
							<span class="hero-line"></span>
							Get ISO Standard Consultation
						</span>
						<h2 class="heading-1 mb-0">
							ปลดล็อกศักยภาพธุรกิจด้วย ISO <br /> เริ่มต้นง่ายๆ กับเรา
						</h2>
					</div>
					<div class="cta-right center-right">
						<a href="<? rootURL(); ?>about-us" class="btn-1 btn-white btn-md">
							ดูเพิ่มเติม
						</a>
					</div>
				</div>
			</div>
		</div>
		<!-- End CTA -->

		<!-- Start Counter
============================================= -->
		<div class="counter-area counter-top-minus">
			<div class="container">
				<div class="counter-wpr hero-bg" style="background-image: url(assets/img/shape/shape-1.png)">
					<div class="counter-1 grid-4">
						<?php require_once './static/counter_data.php';
						foreach ($counter_items as $item): ?>
							<div class="fun-fact">
								<div class="counter-icon">
									<i class="<?php echo $item['icon']; ?>"></i>
								</div>
								<div class="counter">
									<div class="timer" data-to="<?php echo $item['value']; ?>" data-speed="<?php echo $item['speed']; ?>"></div>
									<div class="operator"><?php echo $item['unit']; ?></div>
								</div>
								<span class="medium"><?php echo $item['text']; ?></span>
							</div>
						<?php endforeach; ?>
					</div>
				</div>
			</div>
		</div>
		<!-- End Counter -->

		<!-- Start Price
		============================================= -->
		<!-- <div class="price-area bg price-top-bg de-padding">
			<div class="container">
				<div class="row">
					<div class="col-xl-8 offset-xl-2">
						<div class="site-title text-center">
							<span class="hero-sub-title mb-20">
								<span class="hero-line"></span>
								Pricing Table
							</span>
							<h2 class="heading-1 mb-0">
								Checkout our affortable <br /> pricing table
							</h2>
						</div>
					</div>
				</div>
				<div class="price-wpr grid-3">
					<div class="price-box">
						<div class="price-box-content">
							<div class="price-ribbon-txt text-right">
								<p class="price-ribbon">Basic</p>
							</div>
							<div class="price-up">
								<h2 class="price-value">
									<sup>$</sup>19
									<span>Per Monthly</span>
								</h2>
							</div>
							<ul class="price-list">
								<li><i class="icofont-check-alt"></i>Create Unique Websites</li>
								<li><i class="icofont-check-alt"></i>Automate Your Busy Work</li>
								<li><i class="icofont-check-alt"></i>Optimize All Your Efforts</li>
								<li><i class="icofont-check-alt"></i>Centralized Teams</li>
								<li><i class="icofont-check-alt"></i>Shareable Team Libraries</li>
							</ul>
							<div class="price-bottom">
								<a href="<?= rootURL(); ?>contact-us/" class="price-btn">
									Get Started <i class="icofont-rounded-double-right"></i>
								</a>
							</div>
						</div>
					</div>
					<div class="price-box">
						<div class="price-box-content">
							<span class="price-popular">Popular</span>
							<div class="price-ribbon-txt text-right">
								<p class="price-ribbon">Advanced</p>
							</div>
							<div class="price-up">
								<h2 class="price-value">
									<sup>$</sup>39
									<span>Per Monthly</span>
								</h2>
							</div>
							<ul class="price-list">
								<li><i class="icofont-check-alt"></i>Create Unique Websites</li>
								<li><i class="icofont-check-alt"></i>Automate Your Busy Work</li>
								<li><i class="icofont-check-alt"></i>Optimize All Your Efforts</li>
								<li><i class="icofont-check-alt"></i>Centralized Teams</li>
								<li><i class="icofont-check-alt"></i>Shareable Team Libraries</li>
							</ul>
							<div class="price-bottom">
								<a href="<?= rootURL(); ?>contact-us/" class="price-btn">
									Get Started <i class="icofont-rounded-double-right"></i>
								</a>
							</div>
						</div>
					</div>
					<div class="price-box">
						<div class="price-box-content">
							<div class="price-ribbon-txt text-right">
								<p class="price-ribbon">Premium</p>
							</div>
							<div class="price-up">
								<h2 class="price-value">
									<sup>$</sup>99
									<span>Per Monthly</span>
								</h2>
							</div>
							<ul class="price-list">
								<li><i class="icofont-check-alt"></i>Create Unique Websites</li>
								<li><i class="icofont-check-alt"></i>Automate Your Busy Work</li>
								<li><i class="icofont-check-alt"></i>Optimize All Your Efforts</li>
								<li><i class="icofont-check-alt"></i>Centralized Teams</li>
								<li><i class="icofont-check-alt"></i>Shareable Team Libraries</li>
							</ul>
							<div class="price-bottom">
								<a href="<?= rootURL(); ?>contact-us/" class="price-btn">
									Get Started <i class="icofont-rounded-double-right"></i>
								</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div> -->
		<!-- End Price -->

		<!-- Start Team
		============================================= -->
		<!-- <div class="team-area de-padding bg-theme-3 overflow-hidden pos-rel">
			<img src="<?= rootURL(); ?>assets/img/dot/service-wavy.png" class="team-wavy" alt="no image">
			<div class="container">
				<div class="row">
					<div class="col-xl-8 offset-xl-2">
						<div class="site-title wh text-center">
							<span class="hero-sub-title wh mb-20">
								<span class="hero-line"></span>
								Our Team
							</span>
							<h2 class="heading-1 mb-0">
								Our Experts team provide <br /> you best ideas
							</h2>
						</div>
					</div>
				</div>
				<div class="team-wpr grid-3">
					<div class="team-box">
						<div class="team-pic">
							<img src="<?= rootURL(); ?>assets/img/pictures/team-1.jpg" alt="no image">
							<div class="team-content">
								<span>Senior officer</span>
								<a href="team-single.html">
									<h5 class="heading-5">Louis Josiah</h5>
								</a>
								<ul class="team-social">
									<li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
									<li><a href="#"><i class="fab fa-instagram"></i></a></li>
									<li><a href="#"><i class="fab fa-twitter"></i></a></li>
								</ul>
								<img src="<?= rootURL(); ?>assets/img/vector/team-line.png" class="team-line" alt="no image">
							</div>
						</div>
					</div>
					<div class="team-box">
						<div class="team-pic">
							<img src="<?= rootURL(); ?>assets/img/pictures/team-2.jpg" alt="no image">
							<div class="team-content">
								<span>Manager</span>
								<a href="team-single.html">
									<h5 class="heading-5">Penny J. Welch</h5>
								</a>
								<ul class="team-social">
									<li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
									<li><a href="#"><i class="fab fa-instagram"></i></a></li>
									<li><a href="#"><i class="fab fa-twitter"></i></a></li>
								</ul>
								<img src="<?= rootURL(); ?>assets/img/vector/team-line.png" class="team-line" alt="no image">
							</div>
						</div>
					</div>
					<div class="team-box">
						<div class="team-pic">
							<img src="<?= rootURL(); ?>assets/img/pictures/team-3.jpg" alt="no image">
							<div class="team-content">
								<span>Asst. Manager</span>
								<a href="team-single.html">
									<h5 class="heading-5">Holly D. Gearheart</h5>
								</a>
								<ul class="team-social">
									<li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
									<li><a href="#"><i class="fab fa-instagram"></i></a></li>
									<li><a href="#"><i class="fab fa-twitter"></i></a></li>
								</ul>
								<img src="<?= rootURL(); ?>assets/img/vector/team-line.png" class="team-line" alt="no image">
							</div>
						</div>
					</div>
				</div>
			</div>
		</div> -->
		<!-- End Team -->

		<!-- Start Review
		============================================= -->
		<div class="review-area bg de-pt pos-rel">
			<div class="review-shapes">
				<img src="<?= rootURL(); ?>assets/img/vector/team-shape.png" class="review-shape" alt="no image">
			</div>
			<div class="container container-stage">
				<div class="row g-0 align-items-center">
					<div class="col-xl-5">
						<div class="review-left">
							<div class="review-left-content pos-rel">
								<img src="<?= rootURL(); ?>assets/img/pictures/review-side.jpg" alt="no image">
								<div class="review-left-title-arrow">
									<h2 class="heading-5">ลูกค้าของเรา<br> รู้สึกอย่างไรบ้าง?</h2>
									<div class="review-slider-ico">
										<div class="swiper-button-next"></div>
										<div class="swiper-button-prev"></div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-xl-7">
						<div class="reveiw-wpr review-sldr swiper">
							<!-- Additional required wrapper -->
							<div class="swiper-wrapper">
								<?php
								require_once './static/reviews_data.php';
								foreach ($reviews as $review) :
								?>
									<!-- Single Item -->
									<div class="swiper-slide">
										<div class="review-single">
											<h5 class="heading-5"><?php echo $review['name']; ?></h5>
											<div>
												<h6 class="heading-5"><?php echo $review['position']; ?></h6>
												<p>
													<?php echo $review['content']; ?>
												</p>
											</div>

											<span>
												คุณภาพการบริการ \
												<?php
												for ($i = 0; $i < $review['rating']; $i++) {
													echo '<i class="icofont-star"></i>';
												}
												?>
											</span>
										</div>
									</div>
									<!-- End Single Item -->
								<?php endforeach; ?>
							</div>
							<!-- Pagination -->
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- End Review -->

		<!-- Start Contact us
		============================================= -->
		<div class="contact-area de-pt pos-rel">
			<?php require_once './component/contact_us.php' ?>
		</div>
		<!-- End Contact us -->

		<!-- Start Blog
		============================================= -->
		<!-- <div class="blog-area de-padding">
			<div class="container">
				<div class="row">
					<div class="col-xl-8 offset-xl-2">
						<div class="site-title text-center">
							<span class="hero-sub-title mb-20">
								<span class="hero-line"></span>
								Our Blog
							</span>
							<h2 class="heading-1 mb-0">
								Checkout our latest <br /> news and article
							</h2>
						</div>
					</div>
				</div>
				<div class="blog-wpr grid-3">
					<div class="blog-box">
						<div class="blog-pic">
							<img src="<?= rootURL(); ?>assets/img/pictures/blog-1.jpg" alt="no image">
						</div>
						<div class="blog-desc">
							<ul class="blog-meta-item">
								<li>
									<i class="fa-regular fa-user"></i>
									<a href="#">By admin</a>
								</li>
								<li>
									<i class="fa-regular fa-comments"></i>
									<a href="#">Comments (07)</a>
								</li>
							</ul>
							<div class="blog-content">
								<h4 class="heading-4">Innovative solutions for a better future</h4>
								<div class="blog-date-item">
									<h4>28</h4>
									<p>August</p>
								</div>
							</div>
							<div class="blog-bottom">
								<a href="single.html" class="blog-btn">
									Read More
									<i class="ti-arrow-top-right"></i>
								</a>
							</div>
						</div>
					</div>
					<div class="blog-box">
						<div class="blog-pic">
							<img src="<?= rootURL(); ?>assets/img/pictures/blog-2.jpg" alt="no image">
						</div>
						<div class="blog-desc">
							<ul class="blog-meta-item">
								<li>
									<i class="fa-regular fa-user"></i>
									<a href="#">By admin</a>
								</li>
								<li>
									<i class="fa-regular fa-comments"></i>
									<a href="#">Comments (07)</a>
								</li>
							</ul>
							<div class="blog-content">
								<h4 class="heading-4">Leading the way in business</h4>
								<div class="blog-date-item">
									<h4>27</h4>
									<p>August</p>
								</div>
							</div>
							<div class="blog-bottom">
								<a href="single.html" class="blog-btn">
									Read More
									<i class="ti-arrow-top-right"></i>
								</a>
							</div>
						</div>
					</div>
					<div class="blog-box">
						<div class="blog-pic">
							<img src="<?= rootURL(); ?>assets/img/pictures/blog-3.jpg" alt="no image">
						</div>
						<div class="blog-desc">
							<ul class="blog-meta-item">
								<li>
									<i class="fa-regular fa-user"></i>
									<a href="#">By admin</a>
								</li>
								<li>
									<i class="fa-regular fa-comments"></i>
									<a href="#">Comments (07)</a>
								</li>
							</ul>
							<div class="blog-content">
								<h4 class="heading-4">Great power of your business</h4>
								<div class="blog-date-item">
									<h4>26</h4>
									<p>August</p>
								</div>
							</div>
							<div class="blog-bottom">
								<a href="single.html" class="blog-btn">
									Read More
									<i class="ti-arrow-top-right"></i>
								</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div> -->
		<!-- End Blog -->

	</main>



</body>
<?php require_once "./component/footer.php"; ?>
<?php require_once "./js.php"; ?>

</html>