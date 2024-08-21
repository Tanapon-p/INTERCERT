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
                    <h2 class="breadcrumb-title">Training ISO</h2>
                    <ul class="breadcrumb-menu clearfix">
                        <li><a href="/">หน้าหลัก</a></li>
                        <li><a href="/services/">บริการของเรา</a></li>
                        <li class="active">Traning</li>
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
                            <h2 class="heading-2 mb-20">Training ISO</h2>
                            <div class="service-tx mb-40">
                                <p class="mb-20">
                                    การให้บริการอบรมของ One Stop ISO co.,ltd
                                    ครอบคลุมในทุกด้านธุรกิจหรืออุตสาหกรรมต่างๆ รวมถึงการให้บริการการอบรมทางด้านการพัฒนาศักยภาพ การทำงาน ทำให้เรามีคอร์สการอบรมมากกว่า 100 คอร์ส ซึ่งการอบรมของเราจะแบ่งเป็น 3 ข้อหลักๆ
                                </p>

                                <ul class="mb-20">
                                    <li>1. การให้บริการอบรมทางด้านมาตรฐานการรับรอง ISO ไม่ว่าจะเป็น ISO9001 , ISO14001 , ISO45001 , ISO/IEC27001 , ISO/IEC29110 และ อื่นอีกมากมาย</li>
                                    <li>2. การให้บริการอบรมเฉพาะทาง Non ISO ไม่ว่าจะเป็น IATF16949 , GHP , BRC , FSSC</li>
                                    <li>3. การให้บริการการอบรมพัฒนาศักยภาพ Soft Skill ไม่ว่าจะเป็น</li>
                                </ul>
                                <ul class="service-single-list mb-20">
                                    <li>
                                        <i class="ti ti-angle-right"></i>
                                        พัฒนาศักยภาพการทำงานระดับพนักงาน
                                    </li>
                                    <li>
                                        <i class="ti ti-angle-right"></i>
                                        High Performing Leadership Development
                                    </li>
                                    <li>
                                        <i class="ti ti-angle-right"></i>
                                        เทคนิคการสอนงานแบบ OJT (On the job training)
                                    </li>
                                    <li>
                                        <i class="ti ti-angle-right"></i>
                                        Why Why Analysis & 3 GEN
                                    </li>
                                </ul>
                                <p class="mb-20">
                                    อื่น ๆ พัฒนาศักยภาพการทำงานระดับพนักงาน
                                </p>
                                <ul class="mb-20">
                                    <ul class="service-single-list mb-20">
                                        <li>
                                            <i class="ti ti-angle-right"></i>
                                            การอบรมการทำงานเฉพาะทาง
                                        </li>
                                        <li>
                                            <i class="ti ti-angle-right"></i>
                                            การอบรมการทำงานด้านวิศวกรรม
                                        </li>
                                        <li>
                                            <i class="ti ti-angle-right"></i>
                                            การอบรมการทำงานด้านการตลาด
                                        </li>
                                        <li>
                                            <i class="ti ti-angle-right"></i>
                                            การอบรมการทำงานด้านระบบปฏิบัติการการจัดการ
                                        </li>
                                        <li>
                                            <i class="ti ti-angle-right"></i>
                                            การอบรมการทำงานด้านการขนส่ง
                                        </li>
                                    </ul>
                                </ul>
                            </div>
                            <div class="service-element mb-40">
                                <div class="service-element-desc">
                                    <h4 class="heading-4 mb-20">เวลาและสถานที่การอบรม</h4>
                                    <p>
                                        การอบรมจะกำหนดอยู่ที่ 1 วันต่อ 1 หัวข้อ ลูกค้าสามารถเลือกอบรมได้ทั้งแบบ On-site และ On-line
                                    </p>
                                    <ul class="service-single-list">
                                        <li>
                                            <i class="ti ti-angle-right"></i>
                                            กำหนดผู้เข้าอบรมได้สูงสุด 30 ท่าน
                                        </li>
                                        <li>
                                            <i class="ti ti-angle-right"></i>
                                            ผู้ที่เข้ารับการอบรมจะได้รับ Certificate ทุกท่าน
                                        </li>
                                        <li>
                                            <i class="ti ti-angle-right"></i>
                                            กรณีผู้เข้าอบรมเกินจะมีค่าบริการออก Certificate 200 บาท ต่อท่าน
                                        </li>
                                    </ul>
                                </div>

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