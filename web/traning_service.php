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
                    <h2 class="breadcrumb-title">Traning service</h2>
                    <ul class="breadcrumb-menu clearfix">
                        <li><a href="/">Home</a></li>
                        <li class="active">Traning service</li>
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
                            <img src="<?= rootURL(); ?>assets/img/pictures/traning-pic.jpg" class="d-block mb-30" alt="no image">
                            <h2 class="heading-2 mb-20">Traning service</h2>
                            <div class="service-tx mb-40">
                                <p class="mb-20">
                                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Eius alias autem illo, quo vitae omnis. Perferendis quasi commodi deleniti animi culpa blanditiis rerum libero aliquid possimus amet debitis, nihil odio!
                                </p>
                                <p class="mb-0">
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consequatur porro repudiandae, doloribus, deleniti, error cupiditate pariatur veritatis quia voluptatem quidem ad ipsa consectetur numquam odit totam? Autem, deserunt. Recusandae, ut!
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
                                                <span>Training ISO</span>
                                                <i class="ti-angle-right"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <span>Consult ISO</span>
                                                <i class="ti-angle-right"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <span>Pre Audit</span>
                                                <i class="ti-angle-right"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
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

        <!-- Start Service ISO Standard
		============================================= -->
        <?php require_once './component/iso_standards.php' ?>

        <!-- End Service ISO Standard -->
    </main>

    <!-- Start Scroll top
============================================= -->
    <a href="#bdy" id="scrtop" class="smooth-menu"><i class="ti-arrow-up"></i></a>
    <!-- End Scroll top-->

    <?php require_once "./component/footer.php"; ?>
    <?php require_once "./js.php"; ?>

</body>

</html>