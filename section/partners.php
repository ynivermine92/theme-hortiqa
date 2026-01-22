<?php
$partners = get_fields($post_id);
$partners_data = $partners['partners'];


/* echo ' <pre>';
print_r($partners_data);
echo '</pre>'; */





?>




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
                <?php if (!empty($partners_data['partners_sliders'])) {
                    foreach ($partners_data['partners_sliders'] as $item) {    ?>


                        <div class="swiper-slide">
                            <img class="partners__image-slide"

                                src="<?= esc_url(wp_get_attachment_image_url($item['partners_slider']['ID'], 'promo')); ?>"
                                alt="<?= esc_attr($item['partners_slider']['alt']) ?>">
                        </div>
                    <?php } ?>
                <?php } ?>

            </div>

        </div>



    </div>
</section>