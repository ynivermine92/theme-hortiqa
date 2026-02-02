<?php



$hero_data = get_field('hero'); ?>


<!-- /* echo '<pre>';
print_r($hero_data);
echo '</pre>'; */ -->






<section class="hero">
    <div class="wrapper">
        <div class="hero__inner row">
            <div class="hero__wrapper col-lg-5 col-12">
                <h1 class="hero__title">
                    <?= esc_html($hero_data['hero_title']); ?>
                </h1>

                <p class="hero__text text"> <?= esc_html($hero_data['hero__text']); ?></p>
                <ul class="hero__items">
                    <?php if (!empty($hero_data['hero_icons'])) {
                        foreach ($hero_data['hero_icons'] as $item) {    ?>

                            <li class="hero__item">

                                <?php if (!empty($item['hero_icon'])) { ?>
                                    <img
                                        src="<?= esc_url($item['hero_icon']['url']); ?>"
                                        alt="<?= esc_attr($item['hero_icon']['alt']) ?>"
                                        class="hero__icon">
                                <?php } ?>

                                <?php if (!empty($item['hero_icon-text'])) { ?>
                                    <span class="hero__icon-text text"><?= esc_html($item['hero_icon-text']); ?></span>

                                <?php } ?>

                            </li>
                        <?php } ?>
                    <?php } ?>




                </ul>
                <div class="hero__content">
                    <?php if (!empty($hero_data['hero_shop'])) { ?>
                        <a class="hero__shop-link btn btn-lightgreen" href="<?= esc_url($hero_data['hero_shop']['url']); ?>"><?= esc_html($hero_data['hero_shop']['title']); ?></a>
                    <?php } ?>

                    <?php if (!empty($hero_data['hero_Inspired'])) { ?>
                        <a class="hero__shop-link btn" href="<?= esc_url($hero_data['hero_Inspired']['url']); ?>"><?= esc_html($hero_data['hero_Inspired']['title']); ?></a>
                    <?php } ?>
                </div>
            </div>
            <div class="col-lg-6 col-12">
                <!-- Slider main container -->
                <div class="hero__swiper swiper">
                    <!-- Additional required wrapper -->
                    <div class="swiper-wrapper">
                        <!-- Slides -->
                        <?php if (!empty($hero_data['hero_sliders'])) {
                            foreach ($hero_data['hero_sliders'] as $item) {    ?>
                                <?php if (!empty($item['hero_slider'])) { ?>
                                    <div class="swiper-slide">
                                        <img
                                            src="<?= esc_url(wp_get_attachment_image_url($item['hero_slider']['ID'], 'hero_slider-image')); ?>"
                                            alt="<?= esc_attr($item['hero_slider']['alt']) ?>"
                                            class="hero__icon">
                                    </div>
                                <?php } ?>


                            <?php } ?>
                        <?php } ?>



                    </div>
                    <!-- If we need pagination -->
                    <div class="swiper-pagination"></div>



                </div>
            </div>


        </div>
    </div>
</section>