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
                    <h2 class="breadcrumb-title">เกี่ยวกับเรา</h2>
                    <ul class="breadcrumb-menu clearfix">
                        <li><a href="/">หน้าหลัก</a></li>
                        <li class="active">เกี่ยวกับเรา</li>
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
                            <img src="<?php echo rootURL(); ?>assets/img/pictures/about-us.png" class="d-block mb-30" alt="no image">
                            <h2 class="heading-2 mb-20">
                                ONE STOP ISO พลิกโฉมธุรกิจคุณด้วยมาตรฐานระดับโลก
                            </h2>
                            <div class="service-tx mb-40">
                                <p class="mb-20">
                                    เราคือทีมผู้เชี่ยวชาญที่พร้อมยกระดับธุรกิจของคุณสู่มาตรฐานระดับสากล เรามีความชำนาญด้านการ อบรม วางระบบ และตรวจให้การรับรอง ISO ที่ครอบคลุมทุกด้านด้วยวิทยากรและทีมงานที่มีประสบการณ์จากการเป็น AUDITOR มามากกว่า 15 ปี เราแนะนำกระบวนการต่างๆ ของการจัดทำระบบมาตรฐานตั้งแต่ต้นจนจบกระบวนการไม่ว่าจะเป็น

                                </p>
                                <ul class="mb-20">
                                    <li>- การวางระบบ ISO ครอบคลุมทุกมาตรฐาน</li>
                                    <li>- การอบรมเชิงปฏิบัติโดยผู้เชี่ยวชาญ</li>
                                    <li>- การจัดทำเอกสารพร้อมให้คำปรึกษาเพื่อปรับปรุงระบบการทำงาน</li>
                                    <li>- การซ้อมตรวจประเมินโดยอาจารย์ที่ปรึกษา</li>
                                    <li>- ดูเเลทุกขั้นตอนกระบวนการทำงานจนถึงได้รับใบรับรองผล (Certificate)</li>
                                </ul>
                                <p class="mb-20">
                                    อีกทั้งวิทยากรของเราส่วนมากมาจากการเป็นผู้ตรวจประเมิน มาเป็นที่ปรึกษาที่มีความชำนาญเฉพาะทางในทุกสาขาธุรกิจ ทำให้ลูกค้าไม่ว่าจะเป็นทั้งภาครัฐหรือเอกชน ให้การยอมรับในบริษัทของเรา และเราเชื่อมั่นว่าสิ่งที่ท่านได้รับไปนั้น สามารถนำไปปรับใช้ได้จริงในองค์กรของท่านได้จริง
                                </p>
                                <p class="mb-0">
                                    หากมีข้อสงสัยต้องการปรึกษาเพิ่มเติม เราพร้อมยินดีให้คำปรึกษา

                                </p>

                                <a href="tel:+66636452424">(+66) 63-645-2424</a>
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
                            <a href="<? rootURL(); ?>about-us" class="btn-1 btn-md">
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