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
                    <h2 class="breadcrumb-title">บริการของเรา</h2>
                    <ul class="breadcrumb-menu clearfix">
                        <li><a href="/">หน้าหลัก</a></li>
                        <li class="active">บริการของเรา</li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- End Breadcrumb -->

        <!-- Start Service Single
    ============================================= -->

        <?php require_once './component/services.php' ?>

        <div class="service-single pos-rel de-padding">
            <div class="container">
                <div class="row g-5">
                    <div class="col-xl-8">
                        <div class="service-single-wpr pr-50">
                            <img src="<?php echo rootURL(); ?>assets/img/pictures/services.jpg" class="d-block mb-30" alt="no image">
                            <h2 class="heading-2 mb-20">
                                ไขข้อสงสัย กระบวนการการขอมาตรฐานการรับรอง ISO มีขั้นตอนอย่างไรบ้าง?
                            </h2>
                            <div class="service-tx mb-40">
                                <p class="mb-20">
                                    การรับรองมาตรฐาน ISO เป็นกุญแจสำคัญสู่ความสำเร็จขององค์กรในยุคปัจจุบัน แม้กระบวนการขอรับรองอาจดูซับซ้อน แต่ด้วยการวางแผนที่ดีและการดำเนินการอย่างเป็นระบบ ทุกองค์กรสามารถบรรลุเป้าหมายนี้ได้โดยมี 5 ขั้นตอนสำคัญในการขอมาตรฐานการรับรอง ISO ตั้งแต่การจัดตั้งทีมงานดังนี้
                                </p>
                                <h3 class="heading-3 mb-4">
                                    1. Set up Team ISO
                                </h3>
                                <p class="mb-20">
                                    การจัดตั้งทีมสำหรับจัดทำระบบการรับรองมาตรฐานต่างๆ เพื่อสั่งการดำเนินการและประสานงานการจัดทำระบบมาตรฐานอย่างเป็นไปตามขั้นตอน
                                </p>
                                <h3 class="heading-3 mb-4">
                                    2. Awareness and Requirements Training
                                </h3>
                                <p class="mb-20">
                                    การอบรมข้อกำหนดของมาตรฐานต่างๆ เพื่อให้ทีมงานมีความรู้ความเข้าใจในระบบมาตรฐานนั้นๆ
                                </p>
                                <h3 class="heading-3 mb-4">
                                    3. Documentation
                                </h3>
                                <p class="mb-20">
                                    การจัดทำเอกสารของระบบมาตรฐานนั้นๆ ให้มีความสอดคล้องและถูกต้องตามข้อกำหนดของมาตรฐานเป็นหลัก

                                </p>
                                <h3 class="heading-3 mb-4">
                                    4. Internal Quality Audit Training
                                </h3>
                                <p class="mb-20">
                                    การอบรมการตรวจติดตามภายในองค์กร เพื่อการสร้างผู้ตรวจติดตามภายในที่ดี และเป็นไปตามข้อกำหนดของระบบมาตรฐานนั้นๆ

                                </p>
                                <h3 class="heading-3 mb-4">
                                    5. Pre Audit
                                </h3>
                                <p class="mb-20">
                                    การซ้อมตรวจประเมินเสมือนจริงโดยที่ปรึกษา เป็นการประเมินความพร้อมต่างๆ ทั้งบุคลากร ระบบการดำเนินการ รวมถึงเอกสารเพื่อวิเคราะห์ความสอดคล้องและความถูกต้องของข้อกำหนดมารตฐานอีกทั้งยังทำให้ทราบถึงปัญหาที่จะเกิดขึ้นกรณีตรวจพบความไม่สอดคล้องเพื่อดำเนินการแก้ไขอย่างทันท่วงที ก่อนถึงกระบวนการการตรวจประเมินจริงจากผู้ให้การรับรอง
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
        <!-- Start Partner
		============================================= -->
        <?php require_once './component/partner.php' ?>
        <!-- End Partner -->

        <!-- Start Service
		============================================= -->
        <?php require_once './component/iso_standards.php' ?>
        <!-- End Service -->
        <div class="contact-area de-pt pos-rel">
            <?php require_once './component/contact_us.php' ?>
        </div>
    </main>



    <!-- Start Scroll top
============================================= -->
    <a href="#bdy" id="scrtop" class="smooth-menu"><i class="ti-arrow-up"></i></a>
    <!-- End Scroll top-->



</body>
<?php require_once "./component/footer.php"; ?>
<?php require_once "./js.php"; ?>

</html>