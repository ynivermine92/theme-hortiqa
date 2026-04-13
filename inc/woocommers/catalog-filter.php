<?php


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



/* Блок фильтр всех  категорий   */

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
