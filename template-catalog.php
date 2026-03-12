<?php
/* Template Name: Catalog */
get_header();
?>

<main class="catalog-page">

    <h1>Catalog</h1>

    <?php
    // Проверяем, есть ли товары
    if (woocommerce_product_loop()) :

        woocommerce_product_loop_start();

        while (have_posts()) : the_post();
            wc_get_template_part('content', 'product'); // шаблон одного товара
        endwhile;

        woocommerce_product_loop_end();

    else :
        echo '<p>No products found</p>';
    endif;
    ?>

</main>

<?php get_footer(); ?>