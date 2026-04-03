<aside class="sidebar">
    <?php
    if (is_active_sidebar('main-sidebar')) {
        dynamic_sidebar('main-sidebar');
    }

    echo do_shortcode('[br_filter_single filter_id=633]');

    ?>
</aside>