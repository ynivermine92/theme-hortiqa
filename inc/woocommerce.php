<?php




if (class_exists('WooCommerce')) {

    //woocommerce support
    function hortiqa_add_woocommerce_support()
    {
        add_theme_support('woocommerce');
    }
    add_action('after_setup_theme', 'hortiqa_add_woocommerce_support');



    /********************************** selector filter **********************************/
    // удаляем сортировку по названию
    add_filter('woocommerce_catalog_orderby', function ($sortby) {
        unset($sortby['title']);
        return $sortby;
    });

    /* переоприделяем */

    add_filter('woocommerce_catalog_orderby', function ($sortby) {

        return [
            'popularity'  => 'По популярности',
            'rating'      => 'По рейтингу',
            'date'        => 'По новизне',
            'price'       => 'Сначала дешевые',
            'price-desc'  => 'Сначала дорогие',
        ];
    });

    // убираем стандартный вывод
    remove_action('woocommerce_before_shop_loop', 'woocommerce_catalog_ordering', 30);

    // добавляем свой с обёрткой
    add_action('woocommerce_before_shop_loop', function () {

        echo '<div class="orderby-wrapper">';

        woocommerce_catalog_ordering();

        echo '</div>';
    }, 30);



    /********************************** !!!сatalogs!!! **********************************/

    /********************************** wrapper продуктов **********************************/
    /* Для замены класса ul карточёк товара ( обертки  items) */
    add_filter('woocommerce_product_loop_start', 'my_custom_products_ul', 10);
    function my_custom_products_ul($html)
    {
        // Заменяем стандартный класс на свой
        $html = str_replace('class="products columns-4"', 'class="categories__items row"', $html);
        return $html;
    }


    /********************************** item продуктов **********************************/
    add_filter('woocommerce_post_class', 'productItemWoo', 20, 2);
    function productItemWoo($classes, $product)
    {
        if (!is_product()) {
            $classes[] = 'categories__item';
            $classes[] = 'col-sm-3';
            $classes[] = 'col-6';
        }

        return $classes;
    }



    /********************************** image продуктов, кастомный размер image **********************************/

    add_filter('single_product_archive_thumbnail_size', function () {
        return 'best_sellers';
    });




    /********************************** продукты, карточка товара  **********************************/


    remove_action('woocommerce_before_shop_loop_item', 'woocommerce_template_loop_product_link_open', 10);
    remove_action('woocommerce_after_shop_loop_item', 'woocommerce_template_loop_product_link_close', 5);

    // 1. wishlist
    add_action('woocommerce_before_shop_loop_item', function () {
        echo '<div class="categories__wishlist product-item__link-heart">';
        echo do_shortcode('[ti_wishlists_addtowishlist]');
        echo '</div>';
    }, 5);

    // 2. ссылка на товар
    add_action('woocommerce_before_shop_loop_item', function () {
        echo '<a href="' . get_the_permalink() . '" class="categories__cart">';
    }, 10);

    // 3. закрытие ссылки
    add_action('woocommerce_after_shop_loop_item', function () {
        echo '</a>';
    }, 5);






    /********************************** продукты, Рейтинг **********************************/

    remove_action('woocommerce_shop_loop_item_title', 'woocommerce_template_loop_product_title', 10);

    add_action('woocommerce_shop_loop_item_title', function () {
        global $product;

        echo '<div class="categories__inner">';

        echo get_template_part('section/rating');

        echo '<div class="review-count">';
        echo 'Отзывов: ' . $product->get_review_count();
        echo '</div>';

        echo '</div>';
    }, 9);




    /********************************** продукты, title **********************************/
    add_action('woocommerce_shop_loop_item_title', function () {
        echo '<h2 class=categories__name>' . get_the_title() . '</h2> ';
    }, 10);


    /********************************** продукты, кнопка товара  **********************************/
    remove_action('woocommerce_after_shop_loop_item', 'woocommerce_template_loop_add_to_cart', 10);

    add_action('woocommerce_after_shop_loop_item', function () {
        global $product;

        if ($product->is_type('variation')) {
            echo '<a href="?add-to-cart=' . $product->get_id() . '" class="categories__link">В КОШИК</a>';
        } else {
            echo '<a href="' . get_permalink($product->get_id()) . '" class="categories__link">В КОШИК</a>';
        }
    }, 10);


    /********************************** продукты, лейбел акция   **********************************/
    add_filter('woocommerce_sale_flash', function ($html, $post, $product) {
        return '<span class="onsale"> АКЦІЯ </span>';
    }, 10, 3);


















    /* my-account */

    /* delete title account */

    add_filter('the_title', function ($title, $id) {
        if (is_account_page() && in_the_loop()) {
            return '';
        }
        return $title;
    }, 10, 2);



    add_filter('woocommerce_product_query', 'custom_filter_variations');

    function custom_filter_variations($query)
    {
        $color = $_GET['filter_pa_color'] ?? '';
        if (!empty($color)) {
            $query->set('post_type', 'product_variation');

            $query->set('meta_query', array(
                array(
                    'key'     => '_variation_attribute_pa_color',
                    'value'   => $color,
                    'compare' => '='
                ),
            ));
        }

        return $query;
    }


    /* Блок фильтр всемя категориями   */

    function ynivermine_all_categories_tree()
    {
        // 1. Счётчик всех товаров в магазине
        $all_products = wp_count_posts('product');
        $total_count  = (int) ($all_products->publish ?? 0);

        // 2. Получаем все категории первого уровня
        $taxonomy       = 'product_cat';
        $top_categories = get_terms(array(
            'taxonomy'   => $taxonomy,
            'hide_empty' => false,
            'parent'     => 0,
            'orderby'    => 'name',
            'order'      => 'ASC',
        ));

        if (empty($top_categories) || is_wp_error($top_categories)) {
            return;
        }

        $shop_url = wc_get_page_permalink('shop'); // или get_home_url()

        echo '<h3 class="bapf_hascolarr filter__catalog-arrow">category</h3>';
        echo '<div class="filter__categories">';

        // All как было — просто ссылка‑счётчик
        echo '<span class="product-count">';
        echo '<a href="' . esc_url($shop_url) . '">All (' . $total_count . ')</a>';
        echo '</span>';

        echo '<ul>';

        foreach ($top_categories as $cat) {
            $cat_link = get_term_link($cat);
            $cat_name = esc_html($cat->name);

            printf(
                '<li class="cat-parent"><a href="%s">%s</a> <span class="product-count">(%d)</span>',
                esc_url($cat_link),
                $cat_name,
                (int) $cat->count
            );

            // Подкатегории
            $sub_args = array(
                'taxonomy'   => $taxonomy,
                'hide_empty' => false,
                'parent'     => $cat->term_id,
                'orderby'    => 'name',
                'order'      => 'ASC',
            );
            $subcats = get_terms($sub_args);

            if (!empty($subcats) && !is_wp_error($subcats)) {
                echo '<ul>';
                foreach ($subcats as $sub) {
                    $sub_link = get_term_link($sub);
                    $sub_name = esc_html($sub->name);

                    printf(
                        '<li class="cat-child"><a href="%s">%s</a> <span class="product-count">(%d)</span></li>',
                        esc_url($sub_link),
                        $sub_name,
                        (int) $sub->count
                    );
                }
                echo '</ul>';
            }

            echo '</li>';
        }

        echo '</ul>';
        echo '</div>';
    }
}
