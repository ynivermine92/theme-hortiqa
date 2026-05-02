<?php

/* remove_action('woocommerce_after_single_product_summary', 'woocommerce_output_product_data_tabs', 10);
add_action('woocommerce_after_single_product_summary', 'commnet_castom', 10); */




/* Удаляем таб */

remove_action('woocommerce_after_single_product_summary', 'woocommerce_output_product_data_tabs', 10);

/* Вытягиваем коментар */

add_action('woocommerce_after_single_product_summary', 'move_reviews_below_tabs', 15);

function move_reviews_below_tabs()
{
    global $product;

    if (comments_open($product->get_id())) {
        echo '<div class="custom-product-reviews">';
        comments_template(); // отзывы WooCommerce
        echo '</div>';
    }
}






