<?php
/* Template Name: Blog */
get_header(); ?>

<section class="blogs">



    <?php
    $args = array(
        'post_type'      => 'post',
        'posts_per_page' => 9,
        'paged'          => get_query_var('paged') ? get_query_var('paged') : 1,
    );

    $the_query = new WP_Query($args);

    if ($the_query->have_posts()) : ?>


        <!-- главный блог -->
        <div class="blogstop">
            <div class="wrapper">

                <div class="row">
                    <div class="col-12">
                        <h1 class="title">
                            Inspiration & Education
                        </h1>
                    </div>
                </div>


                <div class="row blogstop__inner">

                    <?php while ($the_query->have_posts()) : $the_query->the_post();
                        $categories = get_the_category();

                        if (!empty($categories)) :
                            foreach ($categories as $category) :

                                /* фильтруется по категории  Главная */
                                if ($category->name === 'Главная') : ?>


                                    <?
                                    /* обьект поста */

                                    /* 
                                    echo '<pre>';
                                    print_r($GLOBALS['post']);
                                    echo '</pre>';   */

                                    ?>

                                    <div class="col-12">
                                        <div class="row blogstop-wrapper">
                                            <div class="col-lg-6 col-12">
                                                <div class="blogstop__content">
                                                    <!-- тайтел поста -->
                                                    <div class="blogstop__subtitle"><?php the_title(); ?></div>
                                                    <!-- саб тайтел поста  который админке пот миниатброй  -->
                                                    <p class="blogstop__text text"> <?php echo get_the_excerpt(); ?>
                                                    </p>
                                                    <!-- линк на блолг -->
                                                    <a class="blogstop__link btn-green" href="<?php the_permalink(); ?>">Read article</a>
                                                </div>
                                            </div>


                                            <div class="col-lg-6 col-12">
                                                <div class="blogstop__box">
                                                    <!-- миниатюра блога  -->
                                                    <?php if (has_post_thumbnail()) : ?>
                                                        <?php the_post_thumbnail('servis', [
                                                            'class' => 'blogstop__image'
                                                        ]); ?>
                                                    <?php else : ?>
                                                        Миниатюра не установлена
                                                    <?php endif; ?>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                    <?php endif;
                            endforeach;
                        endif;
                    endwhile; ?>

                </div>
            </div>
        </div>


        <!-- главный блог  все блоги -->
        <div class="wrapper">
            <div class="row">

                <?php while ($the_query->have_posts()) : $the_query->the_post();
                    $categories = get_the_category();

                    if (!empty($categories)) {
                        foreach ($categories as $category) {


                            /* фильтруется по категории  Главная  и не выводим  */
                            if ($category->name !== 'Главная') { ?>

                                <div class="col-md-4  col-sm-6 col-12">
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

                                            <p class="blogs__text text"> <?php echo get_the_excerpt(); ?>
                                            </p>

                                            <button class="blogs__content-btn">
                                                <span class="btn-text text">Learn more</span>

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
                    <?

                            }
                        }
                    }
                    ?>







                <?php endwhile; ?>

            </div>
        </div>
    <?php endif;

    wp_reset_postdata();
    ?>



</section>

<?php get_footer(); ?>



<?

?>