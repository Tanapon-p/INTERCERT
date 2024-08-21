<?php
require_once './utilities/utilities.php';
?>

<div class="service-area-2 bg de-pb service-top-padding service-minus-margin">
    <div class="container">
        <div class="row mb-60 align-items-center">
            <div class="col-xl-8">
                <span class="hero-sub-title mb-20">
                    <span class="hero-line"></span>
                    What We Do
                </span>
                <h2 class="heading-1">
                    เราให้บริการที่ปรึกษา ISO <br />
                    แบบครบจบในที่เดียว
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
        <div class="service-wpr-2 grid-4">
            <?php
            require_once './static/services_data.php';
            $i = 0;
            foreach ($services as $service) :
                if ($i >= 1) {
            ?>
                    <div class="service-box-2">
                        <div class="service-up-2">
                            <div class="service-img-2">
                                <img src="<?php echo $service['img_url']; ?>" alt="no image">
                            </div>
                            <!-- <div class="service-value-2">
										<span><?php echo $service['number']; ?></span>
									</div> -->
                        </div>
                        <div class="service-desc-2">
                            <div>
                                <a href="<?php echo $service['link']; ?>">
                                    <h5 class="heading-4"><?php echo $service['title']; ?></h5>
                                </a>
                                <div class="service-subtitle-2"><?php echo $service['subtitle']; ?></div>
                                <p>
                                    <?php echo $service['description']; ?>
                                </p>
                            </div>
                            <div>
                                <a href="<?php echo $service['link']; ?>" class="service-btn-2">
                                    อ่านเพิ่มเติม &rarr;
                                </a>
                            </div>
                        </div>
                    </div>
            <?php
                }
                $i++;
            endforeach;
            ?>
        </div>
    </div>
</div>