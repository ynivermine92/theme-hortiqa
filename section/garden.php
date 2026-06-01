<?php


$garden_data = get_field('shop'); ?>





<section class="garden">
    <div class="wrapper">
        <div class="row">
            <div class="col-12">
                <h2 class="garden__title title"><?= esc_html($garden_data['shop_title']); ?></h2>
            </div>
        </div>
        <div class="row  garden__items">


            <?php if (!empty($garden_data['shop_items'])) {
                foreach ($garden_data['shop_items'] as $item) { ?>
                    <div class="col-xl-5 col-sm-6 col-12">
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
            <!-- g-3 = відступ між картками (24px), g-lg-4 = більший відступ на десктопі -->
            <div class="row support__items g-3 g-lg-4">

                <div class="support__item col-xxl-3 col-md-6 col-12 h-100">
                    <div class="support__content">
                        <div class="support__box">
                            <img class="support__icon" src="<?php echo get_template_directory_uri(); ?>/assets/img/png/support.png" alt="">
                            <div class="support__sub-title">Підтримка клієнтів</div>
                        </div>
                        <p class="support__text">Потрібна допомога? Наша команда працює 7 днів на тиждень, щоб відповісти на всі ваші запитання.</p>
                    </div>
                </div>

                <div class="support__item col-xxl-3 col-md-6 col-12 h-100">
                    <div class="support__content">
                        <div class="support__box">
                            <img class="support__icon" src="<?php echo get_template_directory_uri(); ?>/assets/img/png/secure.png" alt="">
                            <div class="support__sub-title">Безпечна оплата</div>
                        </div>
                        <p class="support__text">Оплачуйте замовлення з упевненістю, всі транзакції захищені банком</p>
                    </div>
                </div>

                <div class="support__item col-xxl-3 col-md-6 col-12 h-100">
                    <div class="support__content">
                        <div class="support__box">
                            <img class="support__icon" src="<?php echo get_template_directory_uri(); ?>/assets/img/png/premium.png" alt="">
                            <div class="support__sub-title">Преміальна якість</div>
                        </div>
                        <p class="support__text">Ми співпрацюємо безпосередньо з перевіреними виробниками, щоб запропонувати вам лише найкраще</p>
                    </div>
                </div>

                <div class="support__item col-xxl-3 col-md-6 col-12 h-100">
                    <div class="support__content">
                        <div class="support__box">
                            <img class="support__icon" src="<?php echo get_template_directory_uri(); ?>/assets/img/png/box.png" alt="">
                            <div class="support__sub-title">Безпечна доставка</div>
                        </div>
                        <p class="support__text">Якщо щось не так, повідомте нас протягом 30 днів — ми це виправимо</p>
                    </div>
                </div>
            </div>
        </div>

    </div>
</section>