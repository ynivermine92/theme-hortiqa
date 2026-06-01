<?php $collection_data = get_field('collection'); ?>

<section class="collection">
    <div class="wrapper">
        <div class="row">
            <div class="col-12">
                <div class="collection__wrapper">

                    <?php if (!empty($collection_data['collection_mian-image'])) { ?>
                        <img class="collection__general" src="<?= esc_url(wp_get_attachment_image_url($collection_data['collection_mian-image']['ID'], 'baner')); ?>"
                            alt="<?= esc_attr($collection_data['collection_mian-image']['alt']) ?>">
                    <?php } ?>
                    <div class="collection__content">
                        <?php if (!empty($collection_data['collection_main-title'])) { ?>
                            <h2 class="title"><?= esc_html($collection_data['collection_main-title']); ?></h2>
                        <?php } ?>
                        <?php if (!empty($collection_data['collection_main-link'])) { ?>
                            <a class="collection__link btn-green" href="<?= esc_url($collection_data['collection_main-link']['url']); ?>"><?= esc_html($collection_data['collection_main-link']['title']); ?></a>
                        <?php } ?>
                    </div>
                </div>
            </div>
        </div>





        <?php
        // Запрос 4 самых продаваемых товаров (WooCommerce)
        $best_sellers_query = new WP_Query(array(
            'post_type'      => 'product',
            'posts_per_page' => 4,
            'meta_key'       => 'total_sales',
            'orderby'        => 'meta_value_num',
            'order'          => 'DESC',
            'post_status'    => 'publish',
        ));

        if ($best_sellers_query->have_posts()) : ?>
            <div class="row collection__inner">
                <?php while ($best_sellers_query->have_posts()) : $best_sellers_query->the_post(); ?>
                    <div class="col-xxl-3 col-md-6 col-12">
                        <a class="collection__link" href="<?= esc_url(get_permalink()); ?>">
                            <?php if (has_post_thumbnail()) { ?>
                                <img
                                    src="<?= esc_url(wp_get_attachment_image_url(get_post_thumbnail_id(), 'best_sellers')); ?>"
                                    alt="<?= esc_attr(get_post_meta(get_post_thumbnail_id(), '_wp_attachment_image_alt', true) ?: get_the_title()) ?>"
                                    class="collection__image">
                            <?php } ?>

                            <span class="collection__label">Лідери продажів</span>
                            <div class="collection__name"><?= esc_html(get_the_title()); ?></div>

                            <button class="arrow-btn">
                                <?php
                                $arrow = get_template_directory() . '/assets/img/svg/arrow.svg';
                                if (file_exists($arrow)) {
                                    $svg = file_get_contents($arrow);
                                    echo str_replace('<svg', '<svg class="icon-arrow"', $svg);
                                }
                                ?>
                            </button>
                        </a>
                    </div>
            <?php endwhile;
                wp_reset_postdata();
            endif; ?>
            </div>





    </div>
</section>