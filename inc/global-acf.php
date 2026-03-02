<?php


add_action('acf/init', function () {
    if (function_exists('acf_add_options_page')) {
        acf_add_options_page(array(
            'page_title' => 'Global',
            'menu_title' => 'Global',
            'menu_slug'  => 'global-settings',
            'capability' => 'edit_posts',
            'redirect'   => false
        ));
    }
});
