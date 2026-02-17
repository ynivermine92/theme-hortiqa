<?php
/* Template Name: Blog */
get_header(); ?>

<section class="blogs">
    <div class="wrapper">
        <div class="row">

            <?php
            $args = array(
                'post_type'      => 'post',
                'posts_per_page' => 9,
                'paged'          => get_query_var('paged') ? get_query_var('paged') : 1,
            );

            $the_query = new WP_Query($args);

            if ($the_query->have_posts()) : ?>

                <div class="row">

                    <?php while ($the_query->have_posts()) : $the_query->the_post(); ?>

                        <div class="col-xxl-4 col-md-6 col-12">
                            <a class="blogs__inner" href="<?php the_permalink(); ?>">

                                <div class="blogs__image">
                                    <!-- image -->
                                    <?php if (has_post_thumbnail()) : ?>
                                        <?php the_post_thumbnail('blog_item'); ?>
                                        
                                    <?php else : ?>
                                        Миниатюра не установлена
                                    <?php endif; ?>
                                </div>

                                <div class="blogs__box">

                                    <div class="blogs__data">

                                        <!-- категория блога  -->
                                        <div class="blogs__label">
                                            <?php
                                            $categories = get_the_category();
                                            if (!empty($categories)) {
                                                echo esc_html($categories[0]->name);
                                            } else {
                                                echo 'Без категории';
                                            }
                                            ?>
                                        </div>
                                        <!-- когда создался месяц челос год  -->
                                        <span class="blogs__month month">
                                            <?php echo get_the_date('M d, Y'); ?>
                                        </span>

                                    </div>
                                         <!-- тайтел блога  -->
                                    <div class="blogs__sub-title title">
                                        <?php the_title(); ?>
                                    </div>
                                            <!-- сабтайтел блога   -->
                                    <p class="blogs__sub-title blogs__sub-text">
                                        <?php echo wp_trim_words(get_the_excerpt(), 15); ?>
                                    </p>

                                    <button class="blogs__content-btn">
                                        <span class="text">Learn more</span>

                                        <?php
                                        $arrow = get_template_directory() . '/assets/img/svg/arrow.svg';
                                        if (file_exists($arrow)) {
                                            $svg = file_get_contents($arrow);
                                            echo str_replace('<svg', '<svg class="icon-arrow"', $svg);
                                        }
                                        ?>
                                    </button>

                                </div>
                            </a>
                        </div>

                    <?php endwhile; ?>

                </div>

            <?php endif;

            wp_reset_postdata();
            ?>

        </div>
    </div>
</section>

<?php get_footer(); ?>