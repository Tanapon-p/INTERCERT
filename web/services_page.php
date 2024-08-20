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
        <div class="service-single pos-rel de-padding">
            <div class="container">
                <div class="row g-5">
                    <div class="col-xl-8">
                        <div class="service-single-wpr pr-50">
                            <img src="<?php echo rootURL(); ?>assets/img/pictures/services.jpg" class="d-block mb-30" alt="no image">
                            <h2 class="heading-2 mb-20">
                                Customer succes is our success
                            </h2>
                            <div class="service-tx mb-40">
                                <p class="mb-20">
                                    ONE STOP ISO ทําได้จริงในเรื่องของความมุ่งมั่น เราเชื่อมั่นว่าเราจะทําให้ลูกค้าสําเร็จได้ตามเป้าประสงค์ลูกค้า ไม่ว่าลูกค้าจะเป็นแบบไหน ลูกค้าต้องการ ISO ใด มีพื่นฐานในการจัดทําระบบหรือไม่ ไม่ใช่ปัจจัยสําคัญ
                                    เพราะเราจะช่วยลูกค้าตั่งแต่เริ่มต้นจนกว่าลูกค้าจะผ่านการรับรอง การันตีโดยผู้เชี่ยวชาญในการทําระบบยาวนานกว่า 10 ปี
                                </p>
                                <p class="mb-0">
                                    จุดเริ่มต้นของบริษัท เกิดจากบุคลากรที่เคยเป็น AUDITOR ในบริษัทผู้ตรวจประเมิน ISO มาก่อนด้วยความชํานาญในด้านงาน ISO มากกว่า 15 ปีทางทีมงานของบริษัท มาจากกลุ่มอุตสาหกรรมอาหารอุตสาหกรรมสิ่งทอ และอื่นๆอีกมากมาย ในสายงานบริการทางองค์กรมีผู้เชี่ยวชาญหลากหลายประเภททางบริษัทของเรามีการให้บริการ ในหลากหลายรูปแบบ ไม่ว่าจะเป็นการให้คําปรึกษาในการปรับปรุงระบบการทํางาน หรือการฝึกอบรมทางด้าน ISO ไม่ว่าจะเป็น ISO 9001, ISO 14001, IATF 16949, ISO 45001, GHP/HACCP, ISO 50001, ISO 27001, ISO 29110 เป็นต้น
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