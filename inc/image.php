<?php
/* plagin     Regenerate Thumbnails */
/* https://www.youtube.com/watch?v=vabVTvH0Wx4 */


function image_sizes() {
    add_image_size('hero_slider-image', 642, 616, true);
    add_image_size('promo', 135, 48, true);
    add_image_size('shop_section', 480, 371, true);
    add_image_size('baner', 1300, 400, true);
    add_image_size('baner_item', 313, 313, true);
    add_image_size('servis', 618, 312, true);
    add_image_size('blog_item', 420, 220, true);
    add_image_size('instagram', 309, 386, true);
    add_image_size('slider_catalog', 166, 102, true);
    add_image_size('top_shop', 145, 160, true);
    add_image_size('categories_image', 301, 318, true);
    add_image_size('text_image', 820, 450, true);
    add_image_size('service_slider', 468, 416, true);
}
add_action('after_setup_theme', 'image_sizes'); 

