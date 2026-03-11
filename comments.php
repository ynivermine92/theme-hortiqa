<div id="comments" class="comments-area">
    <?php if ( have_comments() ) : ?>
        <h2><?php echo get_comments_number() . ' комментарий'; ?></h2>
        <ol class="comment-list">
            <?php wp_list_comments(); ?>
        </ol>
    <?php endif; ?>

    <?php comment_form(); ?>
</div>