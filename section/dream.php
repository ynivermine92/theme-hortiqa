<?php

$dream_data = get_field('dream'); ?>








<section class="dream">
    <div class="wrapper">
        <div class="row">
            <div class="col-12">
                <?php if (!empty($dream_data['dream_title'])) { ?>
                    <h2 class="dream__title title"> <?= esc_html($dream_data['dream_title']); ?></h2>
                <? } ?>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <?php if (!empty($dream_data['dream_text'])) { ?>
                    <p class="dream__text"> <?= esc_html($dream_data['dream_text']); ?></p>
                <? } ?>
            </div>
        </div>

        <div class="row dream__inner">
            <?php if (!empty($dream_data['dream_items'])) {
                foreach ($dream_data['dream_items'] as $item) {    ?>
                    <div class="col-md-4 col-12">

                        <div class="dream__wrapper">
                            <div class="dream__box">
                                <img
                                    src="<?= esc_url($item['dream_image']['url']); ?>"
                                    alt="<?= esc_attr($item['dream_image']['alt']) ?>"
                                    class="dream__image">
                                <div class="dream__sub-title"><?= esc_attr($item['dream_sub-title']) ?></div>
                                <p class="dream__content text"><?= esc_attr($item['dream_content']) ?></p>
                            </div>
                        </div>
                    </div>

                <?php } ?>
            <?php } ?>
        </div>
    </div>
</section>