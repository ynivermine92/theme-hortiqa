<?php




if (class_exists('WooCommerce')) {

    /* !!!!woocommerce castom!!!  */
    function hortiqa_add_woocommerce_support()
    {
        add_theme_support('woocommerce');
    }
    add_action('after_setup_theme', 'hortiqa_add_woocommerce_support');

    
    /* inc */
    require get_template_directory() . '/inc/woocommers/account.php';
    require get_template_directory() . '/inc/woocommers/catalog.php';
    require get_template_directory() . '/inc/woocommers/catalog-filter.php';
}
