<?php

$workflow_data = get_field('workflow');

?>
<section class="workflow">
    <div class="wrapper">
        <div class="row">
            <div class="col-12">
                <?php if (!empty($workflow_data['workflow_title'])) { ?>
                    <h2 class="workflow__title title"> <?= esc_html($workflow_data['workflow_title']); ?></h2>
                <? } ?>
            </div>
        </div>


        <div class="row workflow__inner">
            <?php if (!empty($workflow_data['workflow_items'])) {
                foreach ($workflow_data['workflow_items'] as $item) {    ?>
                    <div class="col-lg-3 col-md-6 col-md-6 col-12">

                        <div class="workflow__wrapper">
                            <div class="workflow__box">
                                <img
                                    src="<?= esc_url($item['workflow_image']['url']); ?>"
                                    alt="<?= esc_attr($item['workflow_image']['alt']) ?>"
                                    class="workflow__image">
                                <div class="workflow__wrapper-box">
                                    <div class="workflow__nuber"><?= esc_attr($item['workflow_nuber']) ?></div>
                                    <div class="workflow__sub-title"><?= esc_attr($item['workflow__sub-title']) ?></div>

                                </div>
                                <p class="workflow__content text"><?= esc_attr($item['workflow_content']) ?></p>
                            </div>
                        </div>
                    </div>

                <?php } ?>
            <?php } ?>
        </div>
    </div>
</section>