<?php

add_filter('woocommerce_dropdown_variation_attribute_options_args', function ($args) {
    $args['class'] .= 'variations__select';
    return $args;
});