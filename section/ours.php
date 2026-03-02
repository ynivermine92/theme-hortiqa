<?php
$ours_data = get_field('ours');
?>

<section class="ours">
    <div class="wrapper">
        <div class="ours__box row">
            <div class="col-xl-6 col-12">
                <h2 class="title"> <?= esc_html($ours_data['ours_title']); ?></h2>

                <ul class="ours__items">
                    <?php if (!empty($ours_data['ours_item'])) {
                        foreach ($ours_data['ours_item'] as $item) {    ?>
                            <li class="ours__item">

                                <img
                                    src="<?= esc_url(get_stylesheet_directory_uri() . '/assets/img/svg/brend-icon.svg'); ?>"
                                    class="ours__icon"
                                    alt="">





                                <p class="ours__text text"><?= esc_html($item['ours_text']); ?></p>
                            </li>
                        <?php } ?>
                    <?php } ?>
                </ul>


                <ul class="ours__items ours__customers">
                    <?php if (!empty($ours_data['ours_customer'])) {
                        foreach ($ours_data['ours_customer'] as $item) {    ?>
                            <li class="ours__customer">
                                <div class="ours__customer-title">
                                    <?= esc_html($item['ours_customer-title']); ?>
                                </div>
                                <p class="ours__customer-text">
                                    <?= esc_html($item['ours_customer-text']); ?>
                                </p>
                            </li>
                        <?php } ?>
                    <?php } ?>
                </ul>

            </div>
            <div class="col-xl-6 col-12 mt-5 mt-xl-0">

                <img
                    src="<?= esc_url($ours_data['ours_image']['url']); ?>"
                    alt="<?= esc_attr($ours_data['ours_image']['alt']) ?>"
                    class="ours__image">




            </div>
        </div>
    </div>
</section>