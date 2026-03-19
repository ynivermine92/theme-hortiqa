<?php
/* REST API endpoint для wishlist  */
add_action('rest_api_init', function () {
    register_rest_route('wishlist/v1', '/wishlist', [
        'methods' => 'POST',
        'callback' => 'handle_user_wishlist',
        'permission_callback' => function () {
            return current_user_can('read'); // проверка через nonce
        },
    ]);
});
/* request  получает парметры ндропоинта( а колбек ендропоинта хранит все что пришло из фроентенда*/
function handle_user_wishlist($request)
{



    $user_id = get_current_user_id();





    /*  берем из обьекта параметр  wishlist  (ID товаров которые лайкнул */
    $wishlist_param = $request->get_param('wishlist');

    $wishlist_param = array_map('intval', $wishlist_param);

  


/*     echo '<pre>';
    print_r($wishlist_param);
    echo '</pre>';
    exit;
 */

    // если пришёл POST с wishlist и пользователь авторизован — сохраняем в user_meta

    $ids_to_save = array_map('intval', (array)$wishlist_param);




    if (!empty($ids_to_save)) {
        update_user_meta($user_id, 'user_wishlist', $ids_to_save);
    }





    // Определяем, какие ID подтягивать
    if (is_user_logged_in()) {
        $ids = get_user_meta($user_id, 'user_wishlist', true);


        $ids = (array)$ids;
    } else {
        // для гостей берем из переданного параметра
        $ids = !empty($wishlist_param) ? array_map('intval', (array)$wishlist_param) : [];
    }

    if (empty($ids)) {
        return ['products' => []];
    }

    // Получаем данные товаров
    $args = [
        'post_type' => 'product',
        'post__in' => $ids,
        'posts_per_page' => -1,
        'orderby' => 'post__in'
    ];

    $query = new WP_Query($args);
    $products = [];
    if ($query->have_posts()) {
        while ($query->have_posts()) {
            $query->the_post();
            global $product;
            $products[] = [
                'id' => get_the_ID(),
                'title' => get_the_title(),
                'link' => get_permalink(),
                'image' => $product->get_image('woocommerce_thumbnail', ['class' => 'wishlist__item-img']),
                'price' => $product->get_price_html()
            ];
        }
        wp_reset_postdata();
    }

    return rest_ensure_response(['products' => $products]);
}
