<?php
$garden = get_fields($post_id);
$garden_data = $garden['shop'];
?>


<section class="garden">
    <div class="wrapper">
        <div class="row">
            <div class="col-12">
                <h2 class="garden__title title"><?= esc_html($garden_data['hero_title']); ?></h2>
            </div>
            <div class="row  garden__items">


                <?php if (!empty($garden_data['shop_items'])) {
                    foreach ($garden_data['shop_items'] as $item) {?>
                        <div class="col-md-6 col-12 garden__item">
                            <a class="garden__link" href="<?= esc_url($item['shop_link']['url']); ?>">
                                <?php if (!empty($item['shop_image'])) { ?>
                                    <img
                                        src="<?= esc_url($item['shop_image']['url']); ?>"
                                        alt="<?= esc_attr($item['shop_image']['alt']) ?>"
                                        class="garden__image">
                                <?php } ?>
                                <div class="garden__content">
                                    <span class="garden__text"><?= esc_html($item['shop_text']); ?></span>


                                    <?php
                                    $arrow = get_template_directory() . '/assets/img/svg/arrow.svg';

                                    $svg = file_get_contents($arrow);

                                    $svg = str_replace('<svg', '<svg class=" icon-arrow"', $svg);

                                    echo $svg;
                                    ?>
                                </div>
                            </a>
                        </div>

                    <?php } ?>
                <?php } ?>







            </div>
            <div class="support">
                <div class="row support__items">
                    <div class="col-xxl-3 col-md-6 col-12">
                        <div class="support__item">
                            <div class="support__box">
                                <img class="support__icon" src="<?php echo get_template_directory_uri(); ?>/assets/img/png/support.png" alt="">

                                <div class="support__sub-title">Customer Support</div>
                            </div>

                            <p class="support__text">Need help? Our team is here 7 days a week to answer all your questions</p>
                        </div>
                    </div>
                    <div class="col-xxl-3 col-md-6 col-12">
                        <div class="support__item">
                            <div class="support__box">
                                <img class="support__icon" src="<?php echo get_template_directory_uri(); ?>/assets/img/png/secure.png" alt="">

                                <div class="support__sub-title">Secure Payment</div>
                            </div>

                            <p class="support__text">Checkout with confidence, all transactions are bank-protected</p>

                        </div>
                    </div>
                    <div class="col-xxl-3 col-md-6 col-12 ">
                        <div class="support__item">
                            <div class="support__box">
                                <img class="support__icon" src="<?php echo get_template_directory_uri(); ?>/assets/img/png/premium.png" alt="">

                                <div class="support__sub-title">Premium Quality</div>
                            </div>

                            <p class="support__text">We work directly with trusted growers to bring you only the best</p>

                        </div>
                    </div>
                    <div class="col-xxl-3 col-md-6 col-12">
                        <div class="support__item">
                            <div class="support__box">
                                <img class="support__icon" src="<?php echo get_template_directory_uri(); ?>/assets/img/png/box.png" alt="">

                                <div class="support__sub-title">Safe delivery</div>
                            </div>

                            <p class="support__text">If something’s not right, let us know within 30 days — we’ll fix it</p>

                        </div>
                    </div>


                </div>
            </div>
        </div>
    </div>
</section>