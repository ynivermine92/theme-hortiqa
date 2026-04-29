<?php
/* plagin     Regenerate Thumbnails */
/* https://www.youtube.com/watch?v=vabVTvH0Wx4 */

/*   1 там где только динамически создавать кастомный размер 
 ( там где нет динамики вручную  делать ) */
/*  2 если у кастомных размеров (похожие шерена и высота (не на монго отличаются то создавать 
 ту которая больше что бы не плодить кастомные размеры не нагружать базу данных)) */

function image_sizes()
{
    add_image_size('social', 166, 102, true);
    add_image_size('blog_cart-product', 145, 160, true);
    add_image_size('inspiration', 312, 220, true);
    add_image_size('inspiration_education', 319, 262, true);
    add_image_size('best_sellers', 313, 313, true);
    add_image_size('product', 618, 318, true);
    add_image_size('blog_cart', 523, 348, true);
    add_image_size('portfolio_slider', 230, 416, true);
    add_image_size('hero_slider-image', 642, 616, true);
    add_image_size('product_cart', 520, 707, true);
    add_image_size('product_popap', 1200, 1200, true);
}
add_action('after_setup_theme', 'image_sizes');
