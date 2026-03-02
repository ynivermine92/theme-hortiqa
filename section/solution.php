<?php


$solution_data = get_field('solution'); ?>



<section class="services solution">
    <div class="wrapper">
        <div class="row">
            <div class="col-12">
                <h2 class="title"> <?= esc_html($solution_data['solution_title']); ?></h2>

            </div>
        </div>
        <div class="row services__inner">
            <?php foreach ($solution_data['solution_items'] as $item) {    ?>
                <div class="col-12">

                    <div class="row services__wrapper">
                        <div class="col-xl-6 col-12">
                            <div class="services__content">
                                <div class="services__sub-title"><?= esc_html($item['solution_sub-title']); ?></div>
                                <p class="services__text text"><?= esc_html($item['solution_text']); ?></p>

                                <?php if (!empty($item['solution_link'])) { ?>
                                    <a class="services__link btn" href="<?= esc_url($item['services_link']['url']); ?>"><?= esc_html($item['solution_link']['title']); ?></a>
                                <?php } ?>
                            </div>
                        </div>
                        <div class="col-xl-6 col-12">
                            <div class="services__box">
                                <?php if (!empty($item['solution_image'])) { ?>
                                    <img
                                        src="<?= esc_url(wp_get_attachment_image_url($item['solution_image']['ID'], 'servis')); ?>"
                                        alt="<?= esc_attr($item['solution_image']['alt']) ?>"
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