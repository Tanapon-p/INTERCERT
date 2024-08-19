<!DOCTYPE html>
<html lang="en">

<head>

    <?php require_once "./head.php"; ?>
    <?php require_once "./static/services_data.php"; ?>

</head>

<body id="bdy">

    <?php require_once "./component/header.php"; ?>


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

    <main class="main">

        <!-- Start Breadcrumb
    ============================================= -->
        <div class="site-breadcrumb" style="background: url(<?php echo rootURL(); ?>assets/img/pictures/breadcrumb.jpg)">
            <div class="container">
                <div class="site-breadcrumb-wpr">
                    <h2 class="breadcrumb-title">Service Details</h2>
                    <ul class="breadcrumb-menu clearfix">
                        <li><a href="/">Home</a></li>
                        <li class="active">Service Details</li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- End Breadcrumb -->

        <!-- Start Service Single
    ============================================= -->
        <div class="service-single pos-rel de-padding">
            <div class="container">
                <div class="row g-5">
                    <div class="col-xl-8">
                        <div class="service-single-wpr pr-50">
                            <img src="<?= $services[$_GET['id']]['img_url']; ?>" class="d-block mb-30" alt="no image">
                            <h2 class="heading-2 mb-20"><?= $services[$_GET['id']]['title']; ?></h2>
                            <div class="service-tx mb-40">
                                <p class="mb-20">
                                    Globally optimize highly efficient solution whereas open-source application. Completely strategize quality internal or
                                    "organic" sources for virtual e-business. Phosfluorescently re-engineer enterprise markets via value-added networks.
                                    Seamlessly restore inexpensive e-markets vis-a-vis corporate intellectual capital. Holisticly reinvent compelling niche
                                    markets via scalable strategic.
                                </p>
                                <p class="mb-0">
                                    Authoritatively scale business meta-services before client-based technologies. Collaboratively strategize synergistic scenarios rather than flexible action items. Continually deliver market positioning convergence and mission-critical infrastructures.
                                </p>
                            </div>
                            <div class="service-element grid-2 mb-40">
                                <div class="service-element-desc">
                                    <h4 class="heading-4 mb-20">Service Overview</h4>
                                    <p>
                                        Give lady of they such they sure it. Me contained explained my education. Vulgar as hearts by garret. contained explained my education
                                    </p>
                                    <ul class="service-single-list">
                                        <li>
                                            <i class="ti ti-angle-right"></i>
                                            Commercial freight
                                        </li>
                                        <li>
                                            <i class="ti ti-angle-right"></i>
                                            Residential freight
                                        </li>
                                        <li>
                                            <i class="ti ti-angle-right"></i>
                                            Tootsie roll lollipop topping
                                        </li>
                                    </ul>
                                </div>
                                <!-- <img src="assets/img/pictures/img-5.jpg" alt="no image"> -->
                            </div>
                            <h2 class="heading-2 mb-20">Our strengths and advantages</h2>
                            <p class="mb-0">
                                Globally optimize highly efficient solution whereas open-source application. Completely strategize quality internal or
                                "organic" sources for virtual e-business. Phosfluorescently re-engineer enterprise markets via value-added networks.
                                Seamlessly restore inexpensive e-markets vis-a-vis corporate intellectual capital. Holisticly reinvent compelling niche
                                markets via scalable strategic.
                            </p>
                        </div>
                    </div>
                    <div class="col-xl-4">
                        <aside class="sidebar">
                            <!-- Category -->
                            <div class="widget category">
                                <h5 class="work-title">Services Category</h5>
                                <div class="category-list">
                                    <ul>
                                        <li>
                                            <a href="#">
                                                <span>Air Transportation </span>
                                                <i class="ti-angle-right"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <span>Sea Transportation </span>
                                                <i class="ti-angle-right"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <span>Warehouse</span>
                                                <i class="ti-angle-right"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>

                            <!-- Recent Subscribe -->
                            <!-- <div class="widget subs bg-overlay hero-bg" style="background-image: url(assets/img/pictures/service-sidebar.jpg)">
                                <h5 class="work-title">Newsletter</h5>
                                <p class="subs-title">
                                    Give lady of they such they sure it. Me contained explained my education.
                                </p>
                                <div class="subs-sub">
                                    <div class="ipp">
                                        <input type="text" placeholder="Enter Your Email">
                                    </div>
                                    <button type="submit">Subscribe</button>
                                </div>
                            </div> -->
                        </aside>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Project Single -->
        <!-- Start Partner
		============================================= -->
        <?php require_once './component/partner.php' ?>
        <!-- End Partner -->

        <!-- Start Service
		============================================= -->
        <div class="service-area-2 bg de-pb service-top-padding service-minus-margin">
            <div class="container">
                <div class="row mb-60 align-items-center">
                    <div class="col-xl-8">
                        <span class="hero-sub-title mb-20">
                            <span class="hero-line"></span>
                            Services we provide
                        </span>
                        <h2 class="heading-1">
                            ก้าวข้ามขีดจำกัด สู่มาตรฐาน ISO ระดับโลก<br />
                            ด้วยโซลูชันครบวงจร
                        </h2>
                    </div>
                    <div class="col-xl-4">
                        <div class="service-botam text-right">
                            <a href="about.php" class="btn-1 btn-md">
                                ดูเพิ่มเติม
                            </a>
                        </div>
                    </div>
                </div>
                <div class="service-wpr-2 grid-3">
                    <?php
                    require_once './static/services_data.php';
                    foreach ($iso_services as $iso_service) :
                    ?>
                        <div class="service-box-2">
                            <div class="service-up-2 service-up-center">
                                <div class="service-img-3">
                                    <img src="<?php echo $iso_service['img_url']; ?>" alt="no image">
                                </div>
                            </div>
                            <div class="service-desc-2">
                                <div>
                                    <a href="<?php echo $iso_service['link']; ?>">
                                        <h5 class="heading-4"><?php echo $iso_service['title']; ?></h5>
                                    </a>
                                    <p>
                                        <?php echo $iso_service['description']; ?>
                                    </p>
                                </div>
                                <div>
                                    <a href="<?php echo $iso_service['link']; ?>" class="service-btn-2">
                                        อ่านเพิ่มเติม &rarr;
                                    </a>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
        <!-- End Service -->
    </main>

    <!-- Start Scroll top
============================================= -->
    <a href="#bdy" id="scrtop" class="smooth-menu"><i class="ti-arrow-up"></i></a>
    <!-- End Scroll top-->

    <?php require_once "./component/footer.php"; ?>
    <?php require_once "./js.php"; ?>

</body>

</html>