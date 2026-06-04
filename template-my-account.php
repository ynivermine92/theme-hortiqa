<?php
/* Template Name: my-account*/

get_header(); ?>

<main>
    <?php
    if (!is_front_page() && function_exists('breadcrumbs')) { ?>
        <div class="wrapper">
            <?= breadcrumbs(); ?>
        </div>
    <? } ?>


    <div class="wrapper">
        <?php the_content(); ?>
    </div>
</main>
    

<?php get_footer();
