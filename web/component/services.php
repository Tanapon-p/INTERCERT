<?php

require_once './utilities/utilities.php';
?>

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
                    ด้วยโซลูชั่นครบวงจร
                </h2>
            </div>
            <div class="col-xl-4">
                <div class="service-botam text-right">
                    <?php if (!isServicesPage()): ?>
                        <a href="/services/" class="btn-1 btn-md">
                            ดูเพิ่มเติม
                        </a>
                    <?php endif; ?>
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
                            <img src="<?php echo $iso_service['img_url']; ?>" alt="<?php echo $iso_service['title']; ?>">
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