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
                    <h2 class="breadcrumb-title">Consult service</h2>
                    <ul class="breadcrumb-menu clearfix">
                        <li><a href="/">Home</a></li>
                        <li><a href="/services/">Services</a></li>
                        <li class="active">Consult service</li>
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
                            <img src="<?= rootURL(); ?>assets/img/pictures/consult-pic.jpg" class="d-block mb-30" alt="no image">
                            <h2 class="heading-2 mb-20">Consult service</h2>
                            <div class="service-tx mb-40">
                                <p class="mb-20">
                                    ที่ปรึกษา ISO มีหน้าที่ในการแนะนำกระบวนการต่างๆของการจัดทำระบบมาตรฐานตั้งแต่ต้นจนจบกระบวนการ ไม่ว่าจะเป็น การอบรม การจัดทำเอกสาร การซ้อมตรวจประเมิน และแก้ปัญหาในกรณีพบความไม่สอดคล้องต่างๆ ซึ่งทาง One Stop ISO co.,ltd เราใช้ที่ปรึกษาประจำในการให้บริการลูกค้าเพื่อป้องกันความล่าช้าและความเปลี่ยนแปลงที่จะเกิดขึ้นทำให้ลูกค้าไว้วางใจในการใช้บริการกับเราได้แน่นอน
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4">
                        <aside class="sidebar">
                            <!-- Category -->
                            <?php require_once './component/services_sidebar.php' ?>
                        </aside>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Project Single -->


        <!-- Start Works
		============================================= -->
        <div class="work-area bg de-padding pos-rel">
            <img src="<?= rootURL(); ?>assets/img/vector/sub-shape.png" class="sub-shape" alt="no image">
            <div class="container">
                <div class="row">
                    <div class="col-xl-8 offset-xl-2">
                        <div class="site-title text-center">
                            <span class="hero-sub-title  mb-20">
                                <span class="hero-line"></span>
                                Our Consult
                            </span>
                            <h2 class="heading-1 mb-0">
                                ภาพบรรยากาศ
                            </h2>
                        </div>
                    </div>
                </div>
                <div class="work-wpr">
                    <div class="swiper work-sldr">
                        <div class="swiper-wrapper">
                            <?php
                            $images = ['p-1.jpg', 'p-2.jpg', 'p-3.jpg', 'p-4.jpg'];
                            foreach ($images as $image) {
                                echo '<div class="swiper-slide">
                        <div class="work-single">
                            <div class="work-pic">
                                <img src="' . rootURL() . 'assets/img/pictures/' . $image . '" alt="no image">
                            </div>
                        </div>
                    </div>';
                            }
                            ?>
                        </div>
                        <div class="swiper-pagination"></div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Works -->

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