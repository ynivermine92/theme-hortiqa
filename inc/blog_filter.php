<?php

/* аякс запрос для регистрованных юзеров */
add_action('wp_ajax_filter_blogs', 'filter_blogs_callback');

/*  не для регистрированных аякс запрос для регистрованных юзеров */
add_action('wp_ajax_nopriv_filter_blogs', 'filter_blogs_callback');




function filter_blogs_callback()
{
    /* запрос пост  полуачем */
    if (!isset($_POST['category_id'])) {
        wp_send_json_error(['message' => 'Не передан ID категории']);
    }


    /*   сохраняем что из поста пришло */
    $category_id = intval($_POST['category_id']);
    $paged = 1;



    /*     обращаемся к базе данных и получаем посты по  category_id(тут число поста )
    выводим не больше 10 на одной странице */
    $main_cat_id = get_cat_ID('Главная');

    $query = new WP_Query([
        'cat' => $category_id,
        'posts_per_page' => 2,
        'category__not_in' => array($main_cat_id),
        'paged' => $paged,
    ]);

    // начинаем буфер для HTML  (собираем разметку)
    ob_start();




    /*  если пост не пустой  */
    if ($query->have_posts()) {
        while ($query->have_posts()) {
            $query->the_post();

            $categories = get_the_category();
            if (!empty($categories)) {
                foreach ($categories as $cat) {
                    if ($cat->name !== 'Все') {
                        $first_cat_name = $cat->name;
                        break;
                    }
                }
            } ?>

            <div class="col-md-4 col-sm-6 col-12">
                <a class="blogs__inner" href="<?php the_permalink(); ?>">
                    <div class="blogs__image">
                        <?php if (has_post_thumbnail()) : ?>
                            <?php the_post_thumbnail('blog_item'); ?>
                        <?php else : ?>
                            Миниатюра не установлена
                        <?php endif; ?>
                    </div>

                    <div class="blogs__box">
                        <div class="blogs__data">
                            <div class="blogs__label"><?php echo esc_html($first_cat_name); ?></div>
                            <span class="blogs__month month"><?php echo get_the_date('M d, Y'); ?></span>
                        </div>

                        <div class="blogs__sub-title title"><?php the_title(); ?></div>
                        <p class="blogs__text text"><?php echo get_the_excerpt(); ?></p>

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
    <? }
    } else {
        echo '<p>Постов нет.</p>';
    }

    $html_posts = ob_get_clean();





    /* pagination */
    ob_start(); ?>

    <ul class="pagination__items">
        <?php
        $total_pages = $query->max_num_pages;

        // Prev
        $prev_disabled = ($paged <= 1) ? ' disabled' : '';
        echo '<li class="pagination__item pagination__item-prev' . $prev_disabled . '">
                    <a class="pagination__link pagination__link-prev" href="' . get_pagenum_link(max(1, $paged - 1)) . '">
                        <span class="pagination__arrow">&lt;</span>
                    </a>
                </li>';

        // Страницы
        $pagination_links = paginate_links([
            'total'     => $total_pages,
            'current'   => $paged,
            'type'      => 'array',
            'prev_text' => '',
            'next_text' => '',
        ]);

        if ($pagination_links) {
            $pagination_links = array_filter($pagination_links, fn($item) => strpos($item, 'prev') === false && strpos($item, 'next') === false);
            foreach ($pagination_links as $item) {
                $class = (strpos($item, 'current') !== false) ? 'pagination__item active' : 'pagination__item';
                $item = str_replace('page-numbers', 'pagination__link', $item);
                echo '<li class="' . $class . '">' . $item . '</li>';
            }
        }

        // Next
        $next_disabled = ($paged >= $total_pages) ? ' disabled' : '';
        echo '<li class="pagination__item pagination__item-next' . $next_disabled . '">
                    <a class="pagination__link pagination__link-next" href="' . get_pagenum_link(min($total_pages, $paged + 1)) . '">
                        <span class="pagination__arrow">&gt;</span>
                    </a>
                </li>';
        ?>
    </ul>

<?





    /* останавливаем WP_Query */
    wp_reset_postdata();

    $html_pagination = ob_get_clean();



    /*передаем на аякс нашу разметку  и она лит в ответ аякс*/
    wp_send_json_success([
        'posts' => $html_posts,
        'pagination' => $html_pagination,
    ]);
}
