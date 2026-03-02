<?php $collection_data = get_field('collection'); ?>

<section class="collection">
    <div class="wrapper">
        <div class="row">
            <div class="col-12">
                <div class="collection__wrapper">

                    <?php if (!empty($collection_data['collection_mian-image'])) { ?>
                        <img class="collection__general" src="<?= esc_url(wp_get_attachment_image_url($collection_data['collection_mian-image']['ID'], 'baner')); ?>"
                            alt="<?= esc_attr($collection_data['collection_mian-image']['alt']) ?>">
                    <?php } ?>
                    <div class="collection__content">
                        <?php if (!empty($collection_data['collection_main-title'])) { ?>
                            <h2 class="title"><?= esc_html($collection_data['collection_main-title']); ?></h2>
                        <?php } ?>
                        <?php if (!empty($collection_data['collection_main-link'])) { ?>
                            <a class="collection__link btn-green" href="<?= esc_url($collection_data['collection_main-link']['url']); ?>"><?= esc_html($collection_data['collection_main-link']['title']); ?></a>
                        <?php } ?>
                    </div>
                </div>
            </div>
        </div>
        <div class="row collection__inner">
            <?php foreach ($collection_data['collection_items'] as $item) { ?>

                <div class="col-xxl-3 col-md-6 col-12">

                    <a class="collection__link" href="<?= esc_url($item['collection_link']['url']); ?>">
                        <?php if (!empty($item['collection_image'])) { ?>
                            <img
                                src="<?= esc_url(wp_get_attachment_image_url($item['collection_image']['ID'], 'baner_item')); ?>"


                                alt="<?= esc_attr($item['collection_image']['alt']) ?>"
                                class="collection__image">
                        <?php } ?>

                        <span class="collection__label">Best sellers</span>

                        <div class="collection__name">Autumn Collection</div>

                        <button class="arrow-btn"> <?php
                                                    $arrow = get_template_directory() . '/assets/img/svg/arrow.svg';

                                                    $svg = file_get_contents($arrow);

                                                    $svg = str_replace('<svg', '<svg class=" icon-arrow"', $svg);

                                                    echo $svg;
                                                    ?></button>

                    </a>
                </div>

            <?php } ?>

        </div>
    </div>
</section>