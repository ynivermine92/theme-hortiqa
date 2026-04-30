<?php

remove_action('woocommerce_after_single_product_summary', 'woocommerce_output_product_data_tabs', 10);

add_action('woocommerce_after_single_product_summary', 'commnet_castom', 10);

function commnet_castom()
{
    global $product;

    $product_id = get_the_ID();

    // текущая страница
    $current = isset($_GET['cpage']) ? max(1, intval($_GET['cpage'])) : 1;

    $per_page = 3;
    $offset = ($current - 1) * $per_page;

    // комментарии
    $comments = get_comments([
        'post_id' => $product_id,
        'status'  => 'approve',
        'type'    => 'review',
        'number'  => $per_page,
        'offset'  => $offset,
    ]);

    // общее количество
    $total = get_comments([
        'post_id' => $product_id,
        'status'  => 'approve',
        'type'    => 'review',
        'count'   => true
    ]);

    $total_pages = ceil($total / $per_page);
?>

    <section class="comment">

        <div class="comment__inner">
            <h2 class="title">Коментар:</h2>
            <div class="comment__count">
                (<?php echo $product->get_review_count(); ?>)
            </div>
        </div>

        <?php foreach ($comments as $comment) :
            $rating = get_comment_meta($comment->comment_ID, 'rating', true);
        ?>

            <div class="comment__content">
                <div class="comment__box">
                    <div class="comment__avatar">
                        <?php echo get_avatar($comment, 40); ?>
                        <span class="comment__name"><?php echo esc_html($comment->comment_author); ?></span>
                    </div>
                </div>

                <div class="comment__box-conent">
                    <div class="comment__box-top">
                        <span class="comment__date">
                            <?php echo wc_get_rating_html($rating); ?>
                            <?php echo get_comment_date('d.m.Y', $comment); ?>
                        </span>
                    </div>

                    <p class="comment__text text">
                        <?php echo esc_html($comment->comment_content); ?>
                    </p>

                    <div class="comment__wrapper">
                        <div class="comment__feedback">
                            <img class="comment__feedbackimage" src="https://picsum.photos/1920/1080" alt="">
                        </div>
                        <div class="comment__feedback">
                            <img class="comment__feedbackimage" src="https://picsum.photos/1920/1080" alt="">
                        </div>
                        <div class="comment__feedback">
                            <img class="comment__feedbackimage" src="https://picsum.photos/1920/1080" alt="">
                        </div>
                    </div>
                </div>
            </div>

        <?php endforeach; ?>

        <!-- PAGINATION -->
        <?php if ($total_pages > 1) : ?>

            <div class="wrapper">
                <div class="pagination">
                    <ul class="pagination__items">

                        <!-- Prev -->
                        <?php
                        $prev_page = $current - 1;
                        $is_prev_disabled = ($current <= 1);
                        ?>

                        <li class="pagination__item pagination__item-prev <?php echo $is_prev_disabled ? 'disabled' : ''; ?>">

                            <?php if (!$is_prev_disabled) : ?>
                                <a class="pagination__link pagination__link-prev"
                                    href="<?php echo esc_url(add_query_arg('cpage', $prev_page)); ?>">
                                    <span class="pagination__arrow">&lt;</span>
                                </a>
                            <?php else : ?>
                                <span class="pagination__link pagination__link-prev">
                                    <span class="pagination__arrow">&lt;</span>
                                </span>
                            <?php endif; ?>

                        </li>

                        <!-- Pages -->
                        <?php
                        $links = paginate_links([
                            'base'      => add_query_arg('cpage', '%#%'),
                            'format'    => '',
                            'total'     => $total_pages,
                            'current'   => $current,
                            'type'      => 'array',
                            'prev_next' => false,
                            'end_size'  => 1,
                            'mid_size'  => 2,
                        ]);

                        if (!empty($links)) :
                            foreach ($links as $link) :

                                $classes = 'pagination__item';

                                if (strpos($link, 'current') !== false) {
                                    $classes .= ' active';
                                }

                                if (strpos($link, 'dots') !== false) {
                                    $classes .= ' pagination__item-dots';
                                }

                                $link = str_replace('page-numbers', 'pagination__link', $link);
                        ?>
                                <li class="<?php echo esc_attr($classes); ?>">
                                    <?php echo $link; ?>
                                </li>
                        <?php
                            endforeach;
                        endif;
                        ?>

                        <!-- Next -->
                        <?php
                        $next_page = $current + 1;
                        $is_next_disabled = ($current >= $total_pages);
                        ?>

                        <li class="pagination__item pagination__item-next <?php echo $is_next_disabled ? 'disabled' : ''; ?>">

                            <?php if (!$is_next_disabled) : ?>
                                <a class="pagination__link pagination__link-next"
                                    href="<?php echo esc_url(add_query_arg('cpage', $next_page)); ?>">
                                    <span class="pagination__arrow">&gt;</span>
                                </a>
                            <?php else : ?>
                                <span class="pagination__link pagination__link-next">
                                    <span class="pagination__arrow">&gt;</span>
                                </span>
                            <?php endif; ?>

                        </li>

                    </ul>
                </div>
            </div>

        <?php endif; ?>

        <!-- FORM -->
        <?php
        $current_user = wp_get_current_user();
        ?>

        <?php
        comment_form([

            'class_form' => 'comment-form feedback__form',

            'logged_in_as' => '
                <p class="logged-in-as custom-logged">
                    <span class="feedback__content">Ви війшли як : </span>
                    <strong class="feedback__user">' . esc_html($current_user->display_name) . '</strong>

                    <a class="feedback__profil" href="' . admin_url('profile.php') . '">Профиль</a>

                </p>
              
           ',

            'title_reply' => 'Оставить отзыв',
            'label_submit' => 'Отправить',
            'class_submit' => 'btn btn-primary',

            'comment_field' => '
  

        <p class="comment-form-rating custom-field">
            <label class="label">Рейтинг</label>
            <select class="select" name="rating" required>
                <option value="">Выберите</option>
                <option value="5">★★★★★</option>
                <option value="4">★★★★☆</option>
                <option value="3">★★★☆☆</option>
                <option value="2">★★☆☆☆</option>
                <option value="1">★☆☆☆☆</option>
            </select>
        </p>


        <p class="comment-form-comment custom-field">
            <textarea class="input textarea feedback__textarea" name="comment" required placeholder="Ваш отзыв"></textarea>
        </p>
    
    ',

            'fields' => [
                'author' => '
            <p class="comment-form-author custom-field">
                <input class="input" name="author" type="text" placeholder="Имя" required>
            </p>
        ',

                'email' => '
            <p class="comment-form-email custom-field">
                <input class="input" name="email" type="email" placeholder="Email" required>
            </p>
        ',


            ],

        ]);
        ?>
        <!--         <a class="feedback__log" href="' . wc_get_page_permalink('myaccount') . '">
                        Вийти із акаунту ?
                    </a> -->

    </section>

<?php }




/* Если Юзер не авторизирован  я изменяю дефотную силку переношу на мою кастомную страницу авторизицией */

add_filter('comment_form_defaults', function ($defaults) {

    $defaults['must_log_in'] = '
        <p class="must-log-in">
            Для отправки комментария вам необходимо
            <a href="' . wc_get_page_permalink('myaccount') . '">авторизоваться</a>.
        </p>
    ';

    return $defaults;
});
