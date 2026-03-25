<?php
/* REST API endpoint для wishlist  */
add_action('rest_api_init', function () {
    register_rest_route('wishlist/v1', '/wishlist', [
        'methods' => 'POST',
        'callback' => 'handle_user_wishlist',
        'permission_callback' => function () {
            return is_user_logged_in();
        },
    ]);
});



/* request  получает парметры ндропоинта( а колбек ендропоинта хранит все что пришло из фроентенда*/
function handle_user_wishlist($request)
{
    $user_id = get_current_user_id();
    $wishlist_param = $request->get_json_params()['wishlist'] ?? [];

    // Приводим к числам
    $ids_to_save = array_map('intval', (array)$wishlist_param);

    // Получаем текущий wishlist из базы
    $current_ids = (array) 

    get_user_meta($user_id, 'user_wishlist', true);
    // 1️⃣ Если пришёл непустой массив — обновляем user_wishlist
    if (!empty($ids_to_save)) {
        update_user_meta($user_id, 'user_wishlist', $ids_to_save);

        // Если остался 1 товар — записываем его как последний
        if (count($ids_to_save) === 1) {
            update_user_meta($user_id, 'user_wishlist_last', $ids_to_save);
        }
    } else {
        // 2️⃣ Если пришёл пустой массив — проверяем последний товар
        $last_ids = (array) get_user_meta($user_id, 'user_wishlist_last', true);

        // Если user_wishlist и user_wishlist_last совпадают → удаляем последний
        if (!empty($current_ids) && count($current_ids) === count($last_ids) && empty(array_diff($current_ids, $last_ids))) {
            update_user_meta($user_id, 'user_wishlist_last', []);
            update_user_meta($user_id, 'user_wishlist', []); // очищаем wishlist
            $current_ids = [];
        }
    }

    // Подготавливаем вывод для фронтенда
    $ids_for_output = (array) get_user_meta($user_id, 'user_wishlist', true);

    if (empty($ids_for_output)) {
        return rest_ensure_response(['products' => []]);
    }

    $products = wc_get_products([
        'include' => $ids_for_output,
        'limit' => -1,
    ]);

    $data = [];
    foreach ($products as $product) {
        $data[] = [
            'id'    => $product->get_id(),
            'title' => $product->get_name(),
            'link'  => $product->get_permalink(),
            'image' => $product->get_image('woocommerce_thumbnail'),
            'price' => $product->get_price_html(),
        ];
    }

    return rest_ensure_response(['products' => $data]);
}
