<?php /* Template Name: inspiration*/
get_header();
?>

<main>

    <?php
    if (!is_front_page() && function_exists('breadcrumbs')) { ?>
        <?= breadcrumbs(); ?>
    <? }

    get_template_part('section/blogs');  ?>


</main>

<?php
get_footer();
