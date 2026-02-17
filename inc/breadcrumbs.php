<?php function breadcrumbs()
{

?>

    <div class="breadcrumbs">
        <div class="wrapper">
            <ul class="breadcrumbs__list">
                <li class="breadcrumbs__item">
                    <a class="breadcrumbs__link" href="<?php echo esc_url(home_url()); ?>">Головна</a>
                </li>

                <?php
                if (function_exists('is_product') && is_product()) {
                    global $post;
                    $product = wc_get_product($post->ID);

                    if ($product) {
                        $terms = get_the_terms($product->get_id(), 'product_cat');
                        if ($terms && !is_wp_error($terms)) {
                            $last_term = end($terms);
                ?>
                            <li class="breadcrumbs__item">
                                <a class="breadcrumbs__link" href="<?php echo esc_url(get_term_link($last_term)); ?>">
                                    <?php echo esc_html($last_term->name); ?>
                                </a>
                            </li>
                        <?php
                        }
                        ?>
                        <li class="breadcrumbs__item current"><?php echo esc_html(get_the_title()); ?></li>
                    <?php
                    }
                } elseif (function_exists('is_woocommerce') && is_woocommerce()) {
                    ?>
                    <li class="breadcrumbs__item current"><?php echo esc_html(woocommerce_page_title(false)); ?></li>
                <?php
                } else {
                ?>
                    <li class="breadcrumbs__item current"><?php echo esc_html(get_the_title()); ?></li>
                <?php
                }
                ?>
            </ul>
        </div>
    </div>

<?php
}
