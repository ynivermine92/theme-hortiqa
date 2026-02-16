<?php /* Template Name: home*/
get_header();
?>

<main>
    <?php
    get_template_part('section/hero');
    get_template_part('section/partners');
    get_template_part('section/garden');
    get_template_part('section/services');
    get_template_part('section/collection');
    get_template_part('section/education');
    get_template_part('section/testimonials');
    get_template_part('section/advertising');
    ?>
</main>

<?php
get_footer();
