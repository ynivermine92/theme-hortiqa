<?php /* Template Name: checout*/



get_header(); ?>


<main>

    <?php
    echo do_shortcode('[woocommerce_cart]');
    ?>

</main>

<?php get_footer();
