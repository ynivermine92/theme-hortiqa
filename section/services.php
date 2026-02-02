<?php


$services_data = get_field('services');?>



<section class="services">
    <div class="wrapper">
        <div class="row">
            <div class="col-12">
                <h2 class="title"> <?= esc_html($services_data['services_title']); ?></h2>

            </div>
        </div>
        <div class="row services__inner">
            <?php foreach ($services_data['services_items'] as $item) {    ?>
                <div class="col-12">
                   
                        <div class="row services__wrapper">
                            <div class="col-xl-6 col-12">
                                <div class="services__content">
                                    <div class="services__sub-title"><?= esc_html($item['services_sub-title']); ?></div>
                                    <p class="services__text text"><?= esc_html($item['services_text']); ?></p>
                                    <?php if (!empty($item['services_link'])) { ?>
                                        <a class="services__link btn" href="<?= esc_url($item['services_link']['url']); ?>"><?= esc_html($item['services_link']['title']); ?></a>
                                    <?php } ?>

                                </div>
                            </div>
                            <div class="col-xl-6 col-12">
                                <div class="services__box">
                                    <?php if (!empty($item['services_image'])) { ?>
                                        <img
                                            src="<?= esc_url(wp_get_attachment_image_url($item['services_image']['ID'], 'servis')); ?>"
                                            alt="<?= esc_attr($item['services_image']['alt']) ?>"
                                            class="services__image">
                                    <?php } ?>
                                </div>
                                          

                            </div>
                        </div>
               
                </div>


            <?php } ?>
        </div>
        <div class="row services__wrapper-box">
            <div class="col-12"> <a class="services__btn btn-green" href="#">See more services</a> </div>

        </div>
</section>