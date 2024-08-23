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
                        <li><a href="/">หน้าหลัก</a></li>
                        <li class="active">มาตรฐาน ISO</li>
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
                            <div class="d-flex justify-content-center">
                                <img src="<?= $services[$_GET['id']]['img_url']; ?>" class="d-block mb-30 w-50" alt="no image">
                            </div>

                            <h2 class="heading-2 mb-20"><?= $services[$_GET['id']]['heading-1']; ?></h2>
                            <div class="service-tx mb-40">
                                <p class="mb-20">
                                    <?= $services[$_GET['id']]['p-1']; ?>
                                </p>
                                <?php if (!empty($services[$_GET['id']]['p-1-2'])): ?>
                                    <p class="mb-20">
                                        <?= $services[$_GET['id']]['p-1-2']; ?>
                                    </p>
                                <?php endif; ?>

                                <?php if (!empty($services[$_GET['id']]['p-1-3'])): ?>
                                    <p class="mb-20">
                                        <?= $services[$_GET['id']]['p-1-3']; ?>
                                    </p>
                                <?php endif; ?>


                            </div>
                            <div class="service-tx mb-40">
                                <h3 class="heading-3 mb-20"><?= $services[$_GET['id']]['heading-2']; ?></h3>
                                <?php if (!empty($services[$_GET['id']]['p-2'])): ?>
                                    <p class="mb-0">
                                        <?= $services[$_GET['id']]['p-2']; ?>
                                    </p>
                                <?php endif; ?>

                                <?php if (!empty($services[$_GET['id']]['p-2-items'])): ?>

                                    <ul class="service-single-list">
                                        <?php foreach ($services[$_GET['id']]['p-2-items'] as $item): ?>
                                            <li>
                                                <i class="ti ti-angle-right"></i>
                                                <?= $item; ?>
                                            </li>
                                        <?php endforeach; ?>
                                    </ul>

                                <?php endif; ?>

                            </div>
                            <div class="service-element mb-40">
                                <div class="service-element-desc">
                                    <?php if (!empty($services[$_GET['id']]['heading-3'])): ?>
                                        <h3 class="heading-3 mb-20"><?= $services[$_GET['id']]['heading-3']; ?></h3>
                                    <?php endif; ?>
                                    <?php if (!empty($services[$_GET['id']]['p-3-items'])): ?>
                                        <ul class="service-single-list">
                                            <?php foreach ($services[$_GET['id']]['p-3-items'] as $item): ?>
                                                <li>
                                                    <i class="ti ti-angle-right"></i>
                                                    <?= $item; ?>
                                                </li>
                                            <?php endforeach; ?>
                                        </ul>
                                    <?php endif; ?>
                                </div>
                            </div>

                        </div>
                    </div>

                    <div class="col-xl-4">
                        <aside class="sidebar">
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
        <?php require_once './component/services.php' ?>
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