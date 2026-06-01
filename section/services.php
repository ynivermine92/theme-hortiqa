<?php
$blog_query = new WP_Query(array(
    'post_type'      => 'post',
    'posts_per_page' => 3,
    'post_status'    => 'publish',
));
?>

<section class="services">
    <div class="wrapper">
        <div class="row">
            <div class="col-12">
                <h2 class="title">Блог</h2>
            </div>
        </div>
        <div class="row services__inner">
            <?php if ($blog_query->have_posts()) : while ($blog_query->have_posts()) : $blog_query->the_post(); ?>
                    <div class="col-12">
                        <div class="row services__wrapper">
                            <div class="col-lg-6 col-12">
                                <div class="services__content">
                                    <div class="services__sub-title"><?= esc_html(get_the_title()); ?></div>
                                    <p class="services__text text"><?= esc_html(wp_trim_words(get_the_excerpt(), 30, '...')); ?></p>
                                    <a class="services__link btn" href="<?= esc_url(get_permalink()); ?>">Детальніше</a>
                                </div>
                            </div>
                            <div class="col-lg-6 col-12">
                                <div class="services__box">
                                    <?php if (has_post_thumbnail()) { ?>
                                        <img
                                            src="<?= esc_url(wp_get_attachment_image_url(get_post_thumbnail_id(), 'product')); ?>"
                                            alt="<?= esc_attr(get_post_meta(get_post_thumbnail_id(), '_wp_attachment_image_alt', true) ?: get_the_title()) ?>"
                                            class="services__image">
                                    <?php } ?>
                                </div>
                            </div>
                        </div>
                    </div>
            <?php endwhile;
                wp_reset_postdata();
            endif; ?>
        </div>
        <div class="row services__wrapper-box">
            <div class="col-12"> <a class="services__btn btn-green" href="/inspiration/">Переглянути більше</a> </div>
        </div>
    </div>
</section>