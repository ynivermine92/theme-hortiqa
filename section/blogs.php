<?php
/* Template Name: Blog */
get_header();
?>

<section class="blogs">

    <!-- Главный блог -->
    <?php
    $args_main = [
        'post_type'      => 'post',
        'posts_per_page' => 1,
    ];
    $main_query = new WP_Query($args_main);

    if ($main_query->have_posts()) :
        $main_post_id = $main_query->posts[0]->ID; // получаем ID главного поста
    ?>
        <div class="blogstop">
            <div class="wrapper">
                <div class="row">
                    <div class="col-12">
                        <h1 class="title">Inspiration & Education</h1>
                    </div>
                </div>

                <!-- Категории -->
                <div class="row">
                    <div class="col-12">
                        <ul class="blogs__items">
                            <?php
                            $categories = array_filter(get_categories(), fn($cat) => $cat->name !== 'Главная');
                            $has_all = false;
                            foreach ($categories as $category) {
                                if ($category->name === 'Все') {
                                    $has_all = true;
                                    break;
                                }
                            }
                            foreach ($categories as $category) {
                                $active_class = ($has_all && $category->name === 'Все') ? 'active' : '';
                            ?>
                                <li class="blogs__item">
                                    <button class="blogs__btn <?php echo $active_class; ?> btn-green" data-category-id="<?php echo esc_attr($category->term_id); ?>">
                                        <?php echo esc_html($category->name); ?>
                                    </button>
                                </li>
                            <?php } ?>
                        </ul>
                    </div>
                </div>

                <!-- Главный пост -->
                <div class="row blogstop__inner">
                    <?php while ($main_query->have_posts()) : $main_query->the_post(); ?>
                        <div class="col-12">
                            <div class="row blogstop-wrapper">
                                <div class="col-lg-6 col-12">
                                    <div class="blogstop__content">
                                        <div class="blogstop__subtitle"><?php the_title(); ?></div>
                                        <p class="blogstop__text text"><?php echo get_the_excerpt(); ?></p>
                                        <a class="blogstop__link btn-green" href="<?php the_permalink(); ?>">Read article</a>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-12">
                                    <div class="blogstop__box">
                                        <?php if (has_post_thumbnail()) :
                                            the_post_thumbnail('servis', ['class' => 'blogstop__image']);
                                        else :
                                            echo 'Миниатюра не установлена';
                                        endif; ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php endwhile; ?>
                </div>
            </div>
        </div>
    <?php endif;
    wp_reset_postdata(); ?>

    <!-- Все остальные блоги -->
    <?php
    $paged = max(1, get_query_var('paged'));
    $args_other = [
        'post_type'           => 'post',
        'posts_per_page'      => 2,
        'paged'               => $paged,
        'post__not_in'        => [$main_post_id], // исключаем главный пост
        'ignore_sticky_posts' => 1,
    ];
    $other_query = new WP_Query($args_other);

    if ($other_query->have_posts()) : ?>
        <div class="wrapper">
            <div class="row blogs__category">
                <?php while ($other_query->have_posts()) : $other_query->the_post();
                    $categories = get_the_category();
                    $cats_names = [];
                    if (!empty($categories)) {
                        foreach ($categories as $cat) {
                            if (!in_array($cat->name, ['Главная', 'Все'])) {
                                $cats_names[] = $cat->name;
                            }
                        }
                    }
                    $cats_output = !empty($cats_names) ? implode(', ', $cats_names) : 'Без категории';
                ?>
                    <div class="col-md-4 col-sm-6 col-12">
                        <a class="blogs__inner" href="<?php the_permalink(); ?>">
                            <div class="blogs__image">
                                <?php
                                if (has_post_thumbnail()) :
                                    the_post_thumbnail('blog_item');
                                else :
                                    echo 'Миниатюра не установлена';
                                endif;
                                ?>
                            </div>
                            <div class="blogs__box">
                                <div class="blogs__data">
                                    <div class="blogs__label"><?php echo esc_html($cats_output); ?></div>
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
                <?php endwhile; ?>
            </div>

            <!-- Пагинация -->
            <div class="pagination">
                <ul class="pagination__items">
                    <?php
                    $total_pages = $other_query->max_num_pages;

                    // Prev
                    $prev_disabled = ($paged <= 1) ? ' disabled' : '';
                    echo '<li class="pagination__item pagination__item-prev' . $prev_disabled . '" data-pagination-id="' . max(1, $paged - 1) . '">
                <a class="pagination__link pagination__link-prev" href="#">
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

                            // получаем номер страницы из ссылки
                            preg_match('/page\/(\d+)/', $item, $matches);
                            $page_num = isset($matches[1]) ? $matches[1] : 1;

                            $item = str_replace('page-numbers', 'pagination__link', $item);
                            echo '<li class="' . $class . '" data-pagination-id="' . $page_num . '">' . $item . '</li>';
                        }
                    }

                    // Next
                    $next_disabled = ($paged >= $total_pages) ? ' disabled' : '';
                    echo '<li class="pagination__item pagination__item-next' . $next_disabled . '" data-pagination-id="' . min($total_pages, $paged + 1) . '">
                <a class="pagination__link pagination__link-next" href="#">
                    <span class="pagination__arrow">&gt;</span>
                </a>
              </li>';
                    ?>
                </ul>
            </div>
        </div>
    <?php endif;
    wp_reset_postdata(); ?>
</section>

<?php get_footer(); ?>