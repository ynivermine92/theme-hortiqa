<?php $instagram_data = get_field('instagram');


?>

<section class="advertising">
    <div class="wrapper">
        <h2 class="title"> <?= esc_html($instagram_data['instagram_title']); ?></h2>
    </div>



    <!-- Slider main container -->
    <div class="swiper advertising__slider">
        <!-- Additional required wrapper -->
        <div class="swiper-wrapper">
            <!-- Slides -->

            <?php if (!empty($instagram_data['instagram_items'])) {
                foreach ($instagram_data['instagram_items'] as $item) {    ?>

                    <div class="swiper-slide">
                        <div class="advertising__inner">
                            <div class="advertising__wrapper">
                                <div class="advertising__logo">
                                    <img src="<?= esc_url(get_template_directory_uri() . '/assets/img/png/cart-log.png'); ?>" alt="">

                                </div>
                                <span>...</span>
                            </div>

                            <div class="advertising__image">
                                <img src="<?= esc_url(wp_get_attachment_image_url($item['instagram_image']['ID'], 'instagram')); ?>" alt="<?= esc_attr($item['instagram_image']['alt']) ?>">
                            </div> <?




                                    $like = file_get_contents(get_template_directory() . '/assets/img/svg/like.svg');
                                    $like = str_replace('<svg', '<svg class="advertising__icon-like"', $like);

                                    $commentsvg = file_get_contents(get_template_directory() . '/assets/img/svg/comment.svg');
                                    $commentsvg = str_replace('<svg', '<svg class="advertising__icon-comment"', $commentsvg);

                                    $telegram = file_get_contents(get_template_directory() . '/assets/img/svg/insta.svg');
                                    $telegram = str_replace('<svg', '<svg class="advertising__icon-telegram"', $telegram);

                                    $save = file_get_contents(get_template_directory() . '/assets/img/svg/save.svg');
                                    $save = str_replace('<svg', '<svg class="advertising__icon-save"', $save);

                                    ?>


                            <div class="advertising__wrapper-box">
                                <div class="advertising__conntent">
                                    <div class="advertising__box"><? echo $like; ?></div>
                                    <div class="advertising__box"><? echo $commentsvg; ?></div>
                                    <div class="advertising__box"><? echo $telegram; ?></div>
                                </div>
                                <div class="advertising__box"><? echo $save; ?></div>
                            </div>

                        </div>
                    </div>

                <?php } ?>
            <?php } ?>

        </div>



        <div class="advertising__social">

            <a class="advertising__link slider-link btn" href="#">
                <img src="https://picsum.photos/1920/1080" alt=""> <span class="text">Follow us on Instagram</span> </a>
        </div>

    </div>
</section>