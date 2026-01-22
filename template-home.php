<?php /* Template Name: home*/
get_header();
?>

<main>
    <?php get_template_part('section/hero');     ?>
    <?php get_template_part('section/partners');   ?>
    <?php get_template_part('section/garden');   ?>
    <?php get_template_part('section/collection');   ?>
    <?php get_template_part('section/services');   ?>
    <?php get_template_part('section/education');   ?>
    <?php get_template_part('section/testimonials');  ?>
    <?php get_template_part('section/advertising');  ?>
</main>

<?php
get_footer();
