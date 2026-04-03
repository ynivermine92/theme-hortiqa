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
            $classes[] = 'col-sm-4';
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
}
