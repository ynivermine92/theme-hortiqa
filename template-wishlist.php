<?php
/*
Template Name: wishlist
*/
get_header(); ?>

<?php
if (!is_front_page() && function_exists('breadcrumbs')) { ?>
    <div class="wrapper">
        <?= breadcrumbs(); ?>
    </div>
<? } ?>


<section class="wishlist favorites">
    <div class="wrapper">
        <div class="title">Товари які вам сподобалися</div>
        <div class="wishlist__grid" id="wishlist-container">
            <?php echo apply_filters('the_content', get_the_content()); ?>
        </div>
    </div>
</section>



<?php get_footer(); ?>