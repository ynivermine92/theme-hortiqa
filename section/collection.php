<section class="collection">
    <div class="wrapper">
        <div class="row">
            <div class="col-12">
                <div class="collection__wrapper">
                    <img class=" collection__general" src="https://picsum.photos/1920/1080" alt="">
                    <div class="collection__content">
                        <h2 class="title">Autumn Collection Now Available</h2>
                        <a class="collection__link btn-green " href="#">Shop Seasonal Plants</a>

                    </div>
                </div>
            </div>
        </div>
        <div class="row collection__inner">
            <div class="col-xxl-3 col-md-6 col-12">
                <a class="collection__link" href="#">
                    <img class="collection__image" src="https://picsum.photos/1920/1080" alt="">
                    <span class="collection__label">Best sellers</span>

                    <div class="collection__name">Autumn Collection</div>

                    <button class="arrow-btn">   <?php
                            $arrow = get_template_directory() . '/assets/img/svg/arrow.svg';

                            $svg = file_get_contents($arrow);

                            $svg = str_replace('<svg', '<svg class=" icon-arrow"', $svg);

                            echo $svg;
                            ?></button>

                </a>
            </div>
             <div class="col-xxl-3 col-md-6 col-12">
                <a class="collection__link" href="#">
                    <img class="collection__image" src="https://picsum.photos/1920/1080" alt="">
                    <span class="collection__label">Best sellers</span>

                    <div class="collection__name">Autumn Collection</div>

                    <button class="arrow-btn">          <?php
                            $arrow = get_template_directory() . '/assets/img/svg/arrow.svg';

                            $svg = file_get_contents($arrow);

                            $svg = str_replace('<svg', '<svg class=" icon-arrow"', $svg);

                            echo $svg;
                            ?></button>

                </a>
            </div>
             <div class="col-xxl-3 col-md-6 col-12">
                <a class="collection__link" href="#">
                    <img class="collection__image" src="https://picsum.photos/1920/1080" alt="">
                    <span class="collection__label">Best sellers</span>

                    <div class="collection__name">Autumn Collection</div>

                    <button class="arrow-btn">               <?php
                            $arrow = get_template_directory() . '/assets/img/svg/arrow.svg';

                            $svg = file_get_contents($arrow);

                            $svg = str_replace('<svg', '<svg class=" icon-arrow"', $svg);

                            echo $svg;
                            ?></button>

                </a>
            </div>
             <div class="col-xxl-3 col-md-6 col-12">
                <a class="collection__link" href="#">
                    <img class="collection__image" src="https://picsum.photos/1920/1080" alt="">
                    <span class="collection__label">Best sellers</span>

                    <div class="collection__name">Autumn Collection</div>

                    <button class="arrow-btn">              <?php
                            $arrow = get_template_directory() . '/assets/img/svg/arrow.svg';

                            $svg = file_get_contents($arrow);

                            $svg = str_replace('<svg', '<svg class=" icon-arrow"', $svg);

                            echo $svg;
                            ?></button>

                </a>
            </div>
        </div>
    </div>
</section>