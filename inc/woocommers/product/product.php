<?php


// RELATED (похожие товары)
add_filter('woocommerce_post_class', 'custom_wc_product_grid_classes', 10, 2);

function custom_wc_product_grid_classes($classes, $product)
{

    if (is_admin()) return $classes;

    if (wc_get_loop_prop('name') === 'related') {
        $classes[] = 'col-lg-3';
        $classes[] = 'col-6';
    }


    return $classes;
}



/* product_meta  передвинул верх */

remove_action('woocommerce_single_product_summary', 'woocommerce_template_single_meta', 40);
add_action('woocommerce_single_product_summary', 'woocommerce_template_single_meta', 4);

remove_action('woocommerce_single_product_summary', 'woocommerce_template_single_meta', 40);


remove_action('woocommerce_single_product_summary', 'woocommerce_template_single_title', 5);



/* product__title, есть наличии  передвинул верх */

add_action('woocommerce_single_product_summary', function () {
    global $product;


    echo '<h1 class="product__title title">' . get_the_title() . '</h1>';


    /*есть наличи*/
    if ($product->is_in_stock()) {
        echo '<div class="product__stock in">В наличии</div>';
    } else {
        echo '<div class="product__stock out">Нет в наличии</div>';
    }
}, 5);



// Убираем стандартный вывод цены
remove_action('woocommerce_single_product_summary', 'woocommerce_template_single_price', 10);

// Добавляем свой вывод цены с условием
add_action('woocommerce_single_product_summary', function () {


    global $product;

    // если товар вариативный — ничего не показываем
    if ($product->is_type('variable')) {
        return;
    }

    // для простых товаров показываем цену
    echo $product->get_price_html();
}, 6);



/* Лебел акция   */
remove_action('woocommerce_before_single_product_summary', 'woocommerce_show_product_sale_flash', 10);



