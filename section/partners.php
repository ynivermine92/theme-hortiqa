<?php
$partners_data = get_field('partners', 'option'); ?>







<section class="partners">
    <div class="wrapper">
        <div class="partners__inner">
            <div class="partners__box">
                <span>Excellent</span>

                <img class="partners__image"
                    src="<?php echo get_template_directory_uri(); ?>/assets/img/png/stars.png"
                    alt="star">
            </div>

            <div class="partners__box">
                <span>436 reviews on</span>
                <img class="partners__image"
                    src="<?php echo get_template_directory_uri(); ?>/assets/img/png/star.png"
                    alt="stars">
                <span>Trustpilot</span>
            </div>
        </div>


    </div>
    <div class="partners__wrapper">
        <!-- Slider main container -->
        <div class="partners__swiper swiper">
            <div class="swiper-wrapper">
                <?php if (!empty($partners_data['partners_items'])) : ?>
                    <?php foreach ($partners_data['partners_items'] as $item) :
                        $image = $item['partners_image'];
                        if (!$image) continue; // на всякий случай
                    ?>
                        <div class="swiper-slide">
                            <img class="partners__image-slide"
                                src="<?= esc_url($image['sizes']['promo']); ?>"
                                alt="<?= esc_attr($image['alt']); ?>">
                        </div>
                    <?php endforeach; ?>
                <?php endif; ?>


            </div>

        </div>



    </div>
</section>