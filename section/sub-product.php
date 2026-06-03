<section class="catalogs sub-product">

    <div class="wrapper">

        <!-- Slider main container -->
        <div class="catalogs__slider swiper">

            <div class="row">
                <div class="col-12">
                    <div class="testimonials__wrapper">

                        <h2 class="title">Subcategories</h2>

                        <?php
                        $arrow = get_template_directory() . '/assets/img/svg/arrow.svg';
                        $svg = file_get_contents($arrow);
                        $svg = str_replace('<svg', '<svg class="icon-arrow"', $svg);
                        ?>

                        <div class="testimonials__content">
                            <!-- If we need navigation buttons -->
                            <div class="swiper-button-prev"> <button class="arrow-btn"> <?php echo $svg; ?> </button></div>
                            <div class="swiper-button-next"> <button class="arrow-btn"> <?php echo $svg; ?> </button></div>
                        </div>

                    </div>
                </div>
            </div>

            <!-- Additional required wrapper -->
            <div class="swiper-wrapper">
                <!-- Slides -->

                <?php
                // Отримуємо поточну категорію
                $current_term = get_queried_object();
                $current_term_id = isset($current_term->term_id) ? $current_term->term_id : 0;

                // Отримуємо підкатегорії
                $subcategories = [];
                if ($current_term_id && taxonomy_exists('product_cat')) {
                    $subcategories = get_terms([
                        'taxonomy'   => 'product_cat',
                        'parent'     => $current_term_id,
                        'hide_empty' => false,
                    ]);
                }

                if (!empty($subcategories) && !is_wp_error($subcategories)) :
                    foreach ($subcategories as $index => $term) :

                        // Зображення категорії
                        $thumbnail_id = get_term_meta($term->term_id, 'thumbnail_id', true);

                        // Надійний вивід картинки з вашим розміром 'product_sub'
                        if ($thumbnail_id) {
                            $image_html = wp_get_attachment_image($thumbnail_id, 'product_sub', false, [
                                'class' => 'swiper-image',
                                'alt'   => esc_attr($term->name)
                            ]);
                        } else {
                            // Заглушка строго 166x102, щоб уникнути завантаження великого файлу
                            $image_html = '<img class="swiper-image" src="https://picsum.photos/166/102?random=' . $index . '" width="166" height="102" alt="' . esc_attr($term->name) . '">';
                        }
                ?>

                        <div class="swiper-slide ">

                            <div class="swiper-content">
                                <div class="swiper-inner">
                                    <a href="<?php echo esc_url(get_term_link($term)); ?>">
                                        <?php echo $image_html; ?>
                                    </a>
                                    <div class="swiper-conntent">

                                        <div class="swiper-sub__title">
                                            <?php echo esc_html($term->name); ?>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>

                    <?php
                    endforeach;
                else :
                    ?>

                    <div class="swiper-slide ">

                        <div class="swiper-content">
                            <div class="swiper-inner">
                                <!-- Заглушка також строго 166x102 -->
                                <img class="swiper-image" src="https://picsum.photos/166/102" width="166" height="102" alt="Підкатегорій немає" />
                                <div class="swiper-conntent">

                                    <div class="swiper-sub__title">
                                        Підкатегорій немає
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>

                <?php endif; ?>

            </div>

            <div class="swiper-pagination"></div>

        </div>
    </div>
</section>