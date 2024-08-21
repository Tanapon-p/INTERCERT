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
                    <h2 class="breadcrumb-title">Pre-Audit</h2>
                    <ul class="breadcrumb-menu clearfix">
                        <li><a href="/">หน้าหลัก</a></li>
                        <li><a href="/services/">บริการของเรา</a></li>
                        <li class="active">Pre-Audit</li>
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
                            <img src="<?= rootURL(); ?>assets/img/pictures/pre-audit-pic.jpg" class="d-block mb-30" alt="no image">
                            <h2 class="heading-2 mb-20">Pre-Audit</h2>
                            <div class="service-tx mb-40">
                                <p class="mb-20">
                                    เป็นการตรวจประเมินก่อนที่ลูกค้าหรือ CB จะมาตรวจประเมินองค์กรของท่าน โดยทางทีมอาจารย์ที่ปรึกษาจะร่วมวางแผนกับทางองค์กร เพื่อกำหนดขอบข่ายและจุดมุ่งเน้นในการตรวจประเมิน ให้ตอบสนองความต้องการขององค์กรและลูกค้า โดยมีขั้นตอนดังนี้
                                </p>
                                <ul class="service-single-list mb-20">
                                    <li>
                                        <i class="ti ti-angle-right"></i>
                                        ผู้ตรวจสอบจาก One Stop ISO มาทำการรวบรวมข้อมูลจากองค์กร
                                    </li>
                                    <li>
                                        <i class="ti ti-angle-right"></i>
                                        ผู้ตรวจสอบวางแผนและกำหนดขอบข่ายร่วมกับองค์กร
                                    </li>
                                    <li>
                                        <i class="ti ti-angle-right"></i>
                                        ผู้ตรวจสอบทำการทบทวนเอกสารและจัดทำรายการตรวจสอบ
                                    </li>
                                    <li>
                                        <i class="ti ti-angle-right"></i>
                                        ดำเนินการตรวจสอบ
                                    </li>
                                    <li>
                                        <i class="ti ti-angle-right"></i>
                                        ส่งมอบรายงานการตรวจสอบในรูปแบบที่องค์กรต้องการ
                                    </li>
                                </ul>
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